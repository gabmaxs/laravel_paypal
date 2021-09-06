<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes filme') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <div class="flex flex-wrap justify-around border-0 rounded w-9/12 p-5 bg-gray-100">
                        <div class="w-1/3 flex justify-center">
                            <img src="{{ $movie->image }}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col justify-between">
                            <div>
                                <h1 class="font-bold text-2xl">{{ $movie->title }}</h1>
                            </div>
                            <div>
                                <p>
                                    {{ $movie->overview }}
                                </p>
                            </div>
                            <div class="flex justify-evenly">
                                <button onclick="handleButtonClick({{ $movie->purchase_price }}, 'purchase')" id="purchase" value="{{ $movie->purchase_price }}" class="cursor-pointer w-auto p-2 border border-red-500 rounded bg-red-500 text-white">Aluguel: R${{ $movie->purchase_price }}</button>
                                <button onclick="handleButtonClick({{ $movie->rental_price }}, 'rental')" id="rental" value="{{ $movie->rental_price }}" class="cursor-pointer w-auto p-2 border border-red-500 rounded text-red-500">Compra: R${{ $movie->rental_price }}</button>
                            </div>
                            <div class="h-1/4" id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        const changeSelectedButton = () => {
            const selectedButton = document.getElementsByClassName("bg-red-500")[0]
            const newSelectedButton = document.getElementsByClassName("text-red-500")[0]

            selectedButton.classList.remove("bg-red-500", "text-white")
            selectedButton.classList.add("text-red-500", "bg-white")

            newSelectedButton.classList.remove("text-red-500", "bg-white")
            newSelectedButton.classList.add("bg-red-500", "text-white")
        }

        const saveOnBack = async (type) => {
            const user_id = @json(auth()->id())

            const movie_id = @json($movie->id)

            const resp = await fetch(`/api/movie/${movie_id}/buy`, {
                method: "POST",
                body: JSON.stringify({
                    type: type,
                    user_id: user_id
                }),
                header: new Headers({
                    "Content-Type": "application/json"
                })
            })
            const json = await resp.json()

            alert(json.message)
        }

        const generatePayPalButton = (price, type) => {
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: price
                            }
                        }]
                    })
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        saveOnBack(type)
                    })
                },
                style: {
                    height: 30
                }
            }).render("#paypal-button-container")
        }

        const handleButtonClick = (price, type) => {
            changeSelectedButton()

            document.getElementById("paypal-button-container").innerHTML = ""

            generatePayPalButton(price, type)
        }

        generatePayPalButton(@json($movie->purchase_price))
    </script>
</x-app-layout>

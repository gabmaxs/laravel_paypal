@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Filmes disponíveis</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-around">
                    @foreach ($movies as $movie)
                        <div class="card" style="width: 15rem; margin-bottom: 10px;">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title}}</h5>
                                <a href="#" class="card-link">Alugar</a>
                                <a href="#" class="card-link">Comprar</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

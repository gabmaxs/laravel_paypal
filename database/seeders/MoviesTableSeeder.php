<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            [
                "title" => "Homem de Ferro",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTczNTI2ODUwOF5BMl5BanBnXkFtZTcwMTU0NTIzMw@@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Depois de ser mantido em cativeiro em uma caverna afegã, o engenheiro bilionário Tony Stark cria uma armadura única e armada para combater o mal.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "O Incrível Hulk",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTUyNzk3MjA1OF5BMl5BanBnXkFtZTcwMTE1Njg2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Bruce Banner, um cientista em fuga do governo dos EUA, deve encontrar uma cura para o monstro em que se transforma, sempre que perde a paciência.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Homem de Ferro 2",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTM0MDgwNjMyMl5BMl5BanBnXkFtZTcwNTg3NzAzMw@@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Com o mundo agora ciente de sua identidade como Homem de Ferro, Tony Stark deve enfrentar tanto sua saúde em declínio quanto um homem louco e vingativo, ligado ao legado de seu pai.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Thor",
                "image" => "https://m.media-amazon.com/images/M/MV5BOGE4NzU1YTAtNzA3Mi00ZTA2LTg2YmYtMDJmMThiMjlkYjg2XkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "O poderoso, mas arrogante deus Thor, é expulso de Asgard para viver entre os humanos em Midgard (Terra), onde ele logo se torna um dos seus melhores defensores.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Capitão América: O Primeiro Vingador",
                "image" => "https://m.media-amazon.com/images/M/MV5BOGE4NzU1YTAtNzA3Mi00ZTA2LTg2YmYtMDJmMThiMjlkYjg2XkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Steve Rogers, um soldado militar rejeitado, se transforma no Capitão América depois de tomar uma dose de um 'soro de super-soldado'. Mas ser Capitão América tem um preço, enquanto ele tenta derrubar um traficante de guerra e uma organização terrorista.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Os Vingadores",
                "image" => "https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Os heróis mais poderosos da Terra devem se unir e aprender a lutar em equipe, se quiserem impedir que o travesso Loki e seu exército alienígena escravizem a humanidade.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Homem de Ferro 3",
                "image" => "https://m.media-amazon.com/images/M/MV5BMjE5MzcyNjk1M15BMl5BanBnXkFtZTcwMjQ4MjcxOQ@@._V1_UY268_CR3,0,182,268_AL_.jpg",
                "overview" => "Quando o mundo de Tony Stark é dilacerado por um terrorista formidável chamado Mandarin, ele inicia uma odisseia de reconstrução e retribuição.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Thor: O Mundo Sombrio",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTQyNzAwOTUxOF5BMl5BanBnXkFtZTcwMTE0OTc5OQ@@._V1_UY268_CR3,0,182,268_AL_.jpg",
                "overview" => "Quando os Elfos Negros tentam mergulhar o universo na escuridão, Thor deve embarcar em uma jornada perigosa e pessoal que o reunirá com a médica Jane Foster.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Capitão América: O Soldado Invernal",
                "image" => "https://m.media-amazon.com/images/M/MV5BMzA2NDkwODAwM15BMl5BanBnXkFtZTgwODk5MTgzMTE@._V1_UY268_CR1,0,182,268_AL_.jpg",
                "overview" => "Enquanto Steve Rogers luta para abraçar seu papel no mundo moderno, ele se une a um colega dos Vingadores e da S.H.I.E.L.D, a Viúva Negra, para combater uma nova ameaça da história: um assassino conhecido como Soldado Invernal.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Guardiões da Galáxia",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTAwMjU5OTgxNjZeQTJeQWpwZ15BbWU4MDUxNDYxODEx._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Um grupo de criminosos intergaláticos deve se unir para parar um guerreiro fanático com planos de limpar o universo.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ],
            [
                "title" => "Vingadores: Era de Ultron",
                "image" => "https://m.media-amazon.com/images/M/MV5BMTM4OGJmNWMtOTM4Ni00NTE3LTg3MDItZmQxYjc4N2JhNmUxXkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_UX182_CR0,0,182,268_AL_.jpg",
                "overview" => "Quando Tony Stark e Bruce Banner tentam iniciar um programa de manutenção da paz adormecido chamado Ultron, as coisas saem terrivelmente erradas e cabe aos heróis mais poderosos da Terra impedir que o vilão Ultron decida executar seu plano terrível.",
                "purchase_price" => 12.99,
                "rental_price" => 40.99
            ]
        ]);
    }
}

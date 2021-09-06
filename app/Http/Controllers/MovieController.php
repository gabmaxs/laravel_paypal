<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function show(Movie $movie) {
        return view("movie.show", ["movie" => $movie]);
    }

	public function buy(Request $request, Movie $movie) {
		$movie->users()->attach($request->get('user_id'), [
			"acquired_in" => Carbon::now(),
			"expires_at" => $request->get("type") == "purchase" ? Carbon::now()->addMonth() : null
		]);

		return response()->json([
			"message" => "Compra realizada com sucesso!",
			"movie" => $movie->load('users')
		]);
	}
}

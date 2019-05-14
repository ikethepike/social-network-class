<?php

use App\Highscore;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighscoreController extends Controller
{
    public function store(Request $request)
    {
        return Highscore::create([
            "name" => $request->name,
            "score" => $request->score,
            "level" => $request->level,
        ]);
    }

    public function list()
    {

        return Highscore::all();
    }
}

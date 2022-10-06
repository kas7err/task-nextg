<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{

    public function index()
    {
        $words = Word::orderBy('created_at', 'desc')->get();
        return view('index', ['words' => $words]);
    }


    public function push(Request $request)
    {
        $word = $request->validate([
            'value' => 'required',
        ]);
        Word::create($word);

        return back();
    }


    public function pull()
    {
        $word = Word::orderBy('created_at', 'desc')->first();
        $word->delete();
        return back();
    }

}

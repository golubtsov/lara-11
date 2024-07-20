<?php

namespace Domain\Web\Dictionary\Words;

use App\Http\Controllers\Controller;

class WordController extends Controller
{
    public function index()
    {
        return view('dictionary.words.index')
            ->with([
                'words' => Word::query()->paginate(10),
            ]);
    }

    public function store()
    {
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}

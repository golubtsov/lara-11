<?php

namespace Domain\Web\Dictionary\Words;

use App\Http\Controllers\Controller;
use Domain\Web\Dictionary\Languages\LanguagesEnum;
use Domain\Web\Dictionary\Words\Requests\StoreWordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WordController extends Controller
{
    public function index(): view
    {
        return view('dictionary.words.index')
            ->with([
                'words' => Word::query()->paginate(2),
            ]);
    }

    public function create(): view
    {
        return view('dictionary.words.create')
            ->with([
                'languages' => LanguagesEnum::cases()
            ]);
    }

    public function store(StoreWordRequest $request): RedirectResponse
    {
        Word::query()->create($request->validated());
        return redirect()->route('words.index');
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}

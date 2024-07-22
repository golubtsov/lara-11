<!-- resources/views/dictionary/words/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-white">Список слов</h1>
            <a href="{{ route('words.create') }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Добавить новое слово</a>
        </div>
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            @foreach ($words as $word)
                <div class="border-b border-gray-700 py-4 flex justify-between items-center">
                    <div>
                        <div class="text-lg font-bold text-white">{{ $word->word }}</div>
                        <div class="text-gray-300">{{ $word->translate }}</div>
                        <div class="text-sm text-gray-400">
                            <span class="font-bold">From:</span> {{ $word->from }}
                        </div>
                        <div class="text-sm text-gray-400">
                            <span class="font-bold">To:</span> {{ $word->to }}
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('words.edit', $word->id) }}" class="text-blue-500 hover:text-blue-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <form action="{{ route('words.destroy', $word->id) }}" method="POST"
                              onsubmit="return confirm('Вы уверены?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $words->links() }}
        </div>
    </div>
@endsection

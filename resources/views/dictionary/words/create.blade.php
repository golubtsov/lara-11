<!-- resources/views/word_form.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-white text-center">Добавить новое слово</h1>
        <form action="{{ route('words.store') }}" method="POST" class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
            @csrf
            @if ($errors->any())
                <div class="bg-red-500 p-4 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <label for="from" class="block">From</label>
                <select
                    class="form-input mt-1 block w-full bg-gray-700 px-4 py-2 @error('from') border-red-500 @enderror"
                    id="from" name="from" required>
                    @php /** @var array<\Domain\Web\Dictionary\Languages\LanguagesEnum> $languages */ @endphp
                    @foreach($languages as $language)
                        <option name="{{$language->value}}">{{$language->name()}}</option>
                    @endforeach
                </select>
                @error('from')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="to" class="block">To</label>
                <select
                    class="form-input mt-1 block w-full bg-gray-700 px-4 py-2 @error('from') border-red-500 @enderror"
                    id="to" name="to" required>
                    @php /** @var array<\Domain\Web\Dictionary\Languages\LanguagesEnum> $languages */ @endphp
                    @foreach($languages as $language)
                        <option name="{{$language->value}}">{{$language->name()}}</option>
                    @endforeach
                </select>
                @error('to')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="word" class="block">Слово</label>
                <input type="text"
                       class="form-input mt-1 block w-full bg-gray-700 px-4 py-2 @error('word') border-red-500 @enderror"
                       id="word" name="word" required>
                @error('word')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="translate" class="block">Перевод</label>
                <input type="text"
                       class="form-input mt-1 block w-full bg-gray-700 px-4 py-2 @error('translate') border-red-500 @enderror"
                       id="translate" name="translate" required>
                @error('translate')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="original_example" class="block">Пример использования слова</label>
                <textarea
                    class="form-textarea mt-1 block w-full bg-gray-700 px-4 py-2 @error('original_example') border-red-500 @enderror"
                    id="original_example" name="original_example" rows="3"></textarea>
                @error('original_example')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="translated_example" class="block">Пример перевода</label>
                <textarea
                    class="form-textarea mt-1 block w-full bg-gray-700 px-4 py-2 @error('translated_example') border-red-500 @enderror"
                    id="translated_example" name="translated_example" rows="3"></textarea>
                @error('translated_example')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                Добавить
            </button>
        </form>
    </div>
@endsection

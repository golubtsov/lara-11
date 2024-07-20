@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="space-y-2 p-3">
            @php
                /** @var \Domain\Web\Dictionary\Words\Word $word */
            @endphp
            @foreach($words as $word)
                <div class="space-y-1">
                    <p>{{$word->word}} | {{$word->translate}}</p>
                    @php /** @var \Domain\Web\Dictionary\WordExamples\WordExample $example */ @endphp
                    @foreach($word->examples as $example)
                        <p>{{$example->example}}</p>
                    @endforeach
                    <p>
                        <button class="p-1 border border-green-600">Редактировать</button>
                        <button class="p-1 border border-red-600">Удалить</button>
                    </p>
                </div>
            @endforeach
        </div>

        <div class="p-3 flex flex-1">
            <div class="w-fit content-end">
                <button class="p-2 border-white border">Добавить</button>
            </div>
        </div>
    </div>
@endsection

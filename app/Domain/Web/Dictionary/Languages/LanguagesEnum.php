<?php

namespace Domain\Web\Dictonary\Languages;

enum LanguagesEnum: int
{
    case RU = 1;

    case EN = 2;

    public function name(): string
    {
        return match ($this) {
            LanguagesEnum::RU => 'Русский',
            LanguagesEnum::EN => 'Английский',
        };
    }
}

<?php

namespace App\DataTransferObjects\Note;

use Spatie\LaravelData\Data;

final class NoteData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $title,
        public readonly ?string $description,
    )
    {
    }

    public static function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['string'],
        ];
    }

}

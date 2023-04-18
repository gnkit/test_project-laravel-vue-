<?php

namespace App\Actions\Note;

use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;

final class GetAllNoteAction
{
    /**
     * @return Collection
     */
    public static function execute(): Collection
    {
        $notes = Note::select(['id', 'title', 'description'])->get();

        return $notes;
    }
}

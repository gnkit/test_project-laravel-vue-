<?php

namespace App\Actions\Note;

use App\DataTransferObjects\Note\NoteData;
use App\Models\Note;

final class UpsertNoteAction
{
    /**
     * @param NoteData $data
     * @return Note
     */
    public static function execute(NoteData $data): Note
    {
        $note = Note::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'title' => $data->title,
                'description' => $data->description ?? '',
            ],
        );

        return $note;
    }
}

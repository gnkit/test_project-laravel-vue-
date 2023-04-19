<?php

namespace App\Actions\Note;

use App\DataTransferObjects\Note\NoteData;
use App\Models\Note;

final class DeleteNoteAction
{
    /**
     * @param Note $note
     * @return void
     */
    public static function execute(Note $note)
    {
        $note->delete();
    }
}

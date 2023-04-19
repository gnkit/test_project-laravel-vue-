<?php

namespace App\Http\Controllers\Api\v1;

use App\Actions\Note\DeleteNoteAction;
use App\Actions\Note\GetAllNoteAction;
use App\Actions\Note\UpsertNoteAction;
use App\DataTransferObjects\Note\NoteData;
use App\Http\Controllers\Controller;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $notes = GetAllNoteAction::execute();

        return response()->json($notes);
    }

    /**
     * @param NoteData $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NoteData $data)
    {
        sleep(2);

        UpsertNoteAction::execute($data);

        return response()->json('The note created successfully.');
    }

    /**
     * @param Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Note $note)
    {
        $noteData = NoteData::from($note);

        return response()->json($noteData);
    }

    /**
     * @param NoteData $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NoteData $data)
    {
        sleep(2);

        UpsertNoteAction::execute($data);

        return response()->json('The note updated successfully.');
    }

    /**
     * @param Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Note $note)
    {
        DeleteNoteAction::execute($note);

        return response()->json('The note deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Api\v1;

use App\Actions\Note\GetAllNoteAction;
use App\Actions\Note\UpsertNoteAction;
use App\DataTransferObjects\Note\NoteData;
use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

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
        UpsertNoteAction::execute($data);

        return response()->json('The note create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * @param Note $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Note $id)
    {
        $note = Note::findOrFail($id);

        return response()->json($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

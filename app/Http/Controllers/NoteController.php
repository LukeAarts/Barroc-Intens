<?php

namespace App\Http\NoteController;

use Illuminate\Http\Request;

public function index()
{
    $notes = Note::all();
    return view('notes.index', compact('notes'));
}

public function create()
{
    return view('notes.create');
}

public function show(Note $note)
{
    return view('notes.show', compact('note'));
}

public function edit(Note $note)
{
    return view('notes.edit', compact('note'));
}

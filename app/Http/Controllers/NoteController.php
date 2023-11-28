<?php

namespace App\Http\Controllers;
use App\Models\User;


use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // ...

    public function index()
    {
        $users = User::all();
        return view('notes.index', compact('users'));
    }

    public function create()
{
    $users = User::all();
    return view('notes.create', compact('users'));
}


public function store(Request $request)
{
    $request->validate([
        'note' => 'required',
        'company_id' => 'nullable|exists:companies,id',
    ]);
    
    // ...
    
    $company_id = $request->input('company_id');
    
    $note = new Note([
        'note' => $request->input('note'),
        'date' => now(),
        'company_id' => $company_id,
        'author_id' => auth()->id(),
    ]);
    
    $note->save();
    
    return redirect()->route('notes.index');
    
}




    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'note' => 'required',
        ]);

        $note->update([
            'note' => $request->input('note'),
        ]);

        return redirect()->route('notes.show', $note);
    }

    public function userNotes(User $user)
    {
        $notes = $user->notes; // Notities van de gebruiker ophalen
        return view('notes.user_notes', compact('user', 'notes'));
    }


    public function destroy(Note $note)
{
    $note->delete();

    // Hier gebruiken we route('notes.index') om door te verwijzen naar de indexpagina
    return redirect()->route('notes.index')
        ->with('success', 'Notitie succesvol verwijderd.');
}

    

    
}


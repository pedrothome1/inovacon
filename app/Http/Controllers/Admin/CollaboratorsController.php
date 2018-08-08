<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollaboratorsController extends Controller
{
    public function index()
    {
        return view('dashboard.collaborators.index', [
            'collaborators' => User::collaborator()->paginate(20),
        ]);
    }

    public function create(User $collaborator)
    {
        return view('dashboard.collaborators.create', compact('collaborator'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::createCollaborator(
            $request->only('name', 'email', 'password')
        );

        return back()->with('flash', 'Colaborador cadastrado com sucesso.');
    }
}

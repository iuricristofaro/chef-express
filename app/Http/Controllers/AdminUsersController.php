<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;



class AdminUsersController extends Controller
{
    /**
     * @var user
     */

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->paginate(4);

        return view('admin.usuarios.index', compact('users'));
    }

    public function cadastro()
    {
        return view('admin.usuarios.cadastro');
    }

    public function store(UserRequest $request)
    {
        $user = $this->user->create($request->all());

        return redirect()->route('admin.usuarios.index');
    }

    public function editar($id)
    {
        $user = $this->user->find($id);

        return view('admin.usuarios.editar', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $this->user->find($id)->update($request->all());

        return redirect()->route('admin.usuarios.index');
    }

    public function destroy($id)
    {
        $this->user->find($id)->delete();

        return redirect()->back();
    }

}

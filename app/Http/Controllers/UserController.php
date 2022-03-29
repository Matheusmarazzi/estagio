<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::get();
        
        return view('users.index', compact('users'));
    }
    /*funçao editar*/
    public function edit($id){
        if(!$user = User::find($id))
            return redirect()->route('users.home');
            return view('users.edit', compact('user'));
    
    }
    /*funçao salvar*/
    public function update(Request $request, $id){
        if(!$user = User::find($id))
            return redirect()->route('users.home');
            $data = $request->only('name', 'email');
            if($request->password)
                $data['password'] = bcrypt($request->password);
            $user->update($data);

            return redirect()->route('users.index');
    
    }
    /*funçao deletar*/
    public function destroy($id){
        if(!$user = User::find($id));

        $user->delete();
        return redirect()->route('home');
    
    }
}



    


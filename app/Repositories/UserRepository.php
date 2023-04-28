<?php
namespace App\Repositories;


use App\Models\User;
use App\Contracts\MyInterface;

class UserRepository implements UserInterface{

    public function all(){

        return $user = User::all();
    }

    public function store(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],

        ]);
    }


    public function update(array $data,$id){
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    
    public function delete($id)
    {
        return User::destroy($id);
    }
    
}
?>


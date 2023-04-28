<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\UserInterface;
use App\Models\User;


class UserController extends Controller
{
    public $user;

    function __construct(UserInterface $interface){
        $this->user = $interface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users  = $this->user->all();
        
        return view('index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = [
            'name' => 'khizar',
            'email' => 'khizar',
            'password' => 'khizar',
        ];
        
        $this->user->store($request);
        return 'data insterded';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request = [
            'name' => 'name 1',
            'email' => 'email'
           
        ];
        $this->user->update($request,$id);
        return 'data update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user->delete($id);
        return $id. 'id delete';
        
    }
}

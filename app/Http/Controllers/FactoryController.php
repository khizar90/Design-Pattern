<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\UserFactory;

class FactoryController extends Controller
{

  

    public function store(Request $request)
    {
        $request = [
            'name' => 'khizarfrfhdsds',
            'email' => 'khizarenndbfjk',
            'password' => 'khizar djhfkidl',
        ];

        // UserFactory::create($request);
        $user = UserFactory::make($request);

        return response()->json($user);
    }
}

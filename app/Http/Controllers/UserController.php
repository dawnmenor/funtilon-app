<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;


class UserController extends Controller
{
     public function show() {
        $users = [
            [
                'name' => 'John Doe',
                'gender' => 'Male'
            ],
            [
                'name' => 'Jane Doe',
                'gender' => 'Female'
            ],
            [
                'name' => 'Michael Smith',
                'gender' => 'Male'
            ],
            [
                'name' => 'Sarah Johnson',
                'gender' => 'Female'
            ],
            [
                'name' => 'David Williams',
                'gender' => 'Male'
            ],
            [
                'name' => 'Emily Brown',
                'gender' => 'Female'
            ],
            [
                'name' => 'Robert Davis',
                'gender' => 'Male'
            ]
        ];
        return response()->json($users);
    }
    
    public function index(UserService $userService) {
        return $userService->listUsers();
    }
}

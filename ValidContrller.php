<?php
namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

class ValidContrller extends Controller
{

    
    public function create()
    {
        return view('createuser');
    }

    public function store(UserRequest $request)
{
    return 'User addeds uccessfully!!!!!!';
}
}

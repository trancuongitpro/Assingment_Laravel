<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Models\account;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xuLiDangKi(StoreAccountRequest $request)
    {
        $request->validate();
        $obj = new account();
        $obj->fistname = $request->get('fistname');
        $obj->lastname = $request->get('lastname');
        $obj->phone = $request->get('phone');
        $obj->identityNumber = $request->get('identityNumber');
        $obj->gender = $request->get('gender');
        $obj->save();

    }
}

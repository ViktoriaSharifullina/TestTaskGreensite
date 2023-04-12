<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function myformPost(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc',
            'password' => 'required|min:8|max:15',
            'password_repeat' => 'required|same:password'
        ],[
            'first_name.required' => 'Поле имя является обязательным',
            'last_name.required' => 'Поле фамилия является обязательным',
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Email должен быть действительным адресом электронной почты',
            'password.required' => 'Поле пароль является обязательным',
            'password.min' => 'Пароль должен быть не менее 8 символов',
            'password.max' => 'Пароль должен быть не более 15 символов',
            'password_repeat.required' => 'Повторите пароль',
            'password_repeat.same' => 'Пароли не совпадают'
        ]);

        if ($validator->passes()){
            return response()->json(['success'=>'Регистрация прошла успешно']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }


}

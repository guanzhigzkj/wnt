<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/29
 * Time: 17:53
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('user.create');
    }

    //注册
    public function signup() {
        return view('user.signup');
    }

    public function dosignup(Request $request) {
        $this->checkuser($request);
    }

    //登录
    public function dologin(Request $request) {
        $user = $this->validate($request, [
            'mobile' => 'required|max:11',
            'password' => 'required|max:18'
        ]);
        return;
    }

    public function checkuser($request) {
        $user = $this->validate($request, [
            'mobile' => 'bail|required|numeric|min:11|max:11|unique:users',
            'password' => 'required'
        ]);
    }
}
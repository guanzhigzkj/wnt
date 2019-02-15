<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/29
 * Time: 17:53
 */
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthingController extends Controller
{
    public function login() {
        return view('authing.create');
    }

    //注册
    public function signup() {
        return view('authing.signup');
    }

    public function dosignup(Request $request) {
        $this->checkuser($request);
        $salt = mt_rand(999, 9999);
        $user = User::create([
            'username' => $request->username ? $request->username : $request->mobile,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'salt' => $salt,
            'register_time' => date('Y-m-d H:i:s', time()),
            'last_login_time' => date('Y-m-d H:i:s', time()),
        ]);
        Auth::Login($user);
        session(['user_id' => $user->id, 'user_name' => $user->username, 'iflogin' => md5($user->username.$user->id)]);
        session()->flash('success', '注册成功');
        return redirect()->route('index') ;
    }

    //登录
    public function dologin(Request $request) {
        $checkUser = $this->validate($request, [
            'mobile' => 'bail|required',
            'password' => 'required'
        ]);
        if(Auth::attempt($checkUser)){
            session()->flash('success', '登录成功');
            $user = Auth::user();
            session(['user_id' => $user->id, 'user_name' => $user->username, 'iflogin' => md5($user->username.$user->id)]);
            return redirect()->route('index') ;
        }else{
            session()->flash('danger', '用户名或密码不正确');
            return redirect()->back()->withInput();
        }
        return;
    }

    public function checkuser($request) {
        $user = $this->validate($request, [
            'mobile' => 'bail|required|numeric|unique:users',
            'password' => 'required'
        ]);
    }
}
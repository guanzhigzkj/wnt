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
        return view('user.login');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/30
 * Time: 14:32
 */
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        if(!(session()->has("iflogin") && session('iflogin'))){
            return redirect('login');
        }
        return view('index.index');
    }
}
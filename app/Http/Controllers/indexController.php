<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class indexController extends BaseController
{
    public function getUser(Request $request) {

        $token = $request->header('token');
        $User_Admin = Login::query()
            ->where('token',$token)->first();
        $User_info = User::query()->get();
        return response()->json(response_data(0,$User_info,'加载成功'));
    }
    public function loginVerify(Request $request) {
        $verify = $request->validate([
            'accout' => 'required',
            'password' => 'required',
        ]);
        $user = Login::query()
            ->where('accout',$verify['accout'])
            ->where('password',$verify['password'])
            ->first();

        if(empty($user)) {
            return response_data(1,null,'账户密码错误');
        }
        if(empty($user->token)){
            $user->token = Str::random(32);
        }
        $user->save();
        return  response_data(0,$user->token,'登录成功');
    }
}

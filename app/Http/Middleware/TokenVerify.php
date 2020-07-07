<?php

namespace App\Http\Middleware;

use App\Models\Login;
use Closure;

class TokenVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('token');
        if(empty($token)) {
            return $this->response(response_data(1,null,'请先登录'));
        }
        $User = Login::query()
            ->where('token', $token)->first();
        if(empty($User)) {
            return $this->response(response_data(1,null,'你已退出登录，请重新登录'));
        }
        $request->setUserResolver(function () use($User){
            return $User;
        });
        return $next($request);
    }
    private function response($data = [], $status = 200, array $headers = []){
        return response()->json($data, $status, $headers);
    }
}

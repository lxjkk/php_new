<?php


function response_data(int $code,$data,$msg){
    return [
        'code'=>$code,
        'data'=>$data,
        'msg'=>$msg
    ];
}

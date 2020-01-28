<?php

namespace App\traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponser{
private function SuccessResponse($data,$code){
    return response()->json($data,$code);
}

private function ErrorResponse($message,$code){
    return response()->json(['error'=>$message,'code'=>$code]);
}
protected function showAll(Collection $collection,$code = 200){
return $this->SuccessResponse(['data'=>$collection],$code);
}
    protected function showOne(Model $model,$code = 200){
        return $this->SuccessResponse(['data'=>$model],$code);
    }
}

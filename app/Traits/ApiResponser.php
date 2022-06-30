<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

trait ApiResponser{

    protected function successResponse($data, $message = null, $code = 200)
	{
		$res = $data;
		if(is_array($data)){
			$res = (count($data) === 0) ? [] : $data;
		}
		return response()->json([
			'status'=> true, 
			'message' => $message, 
			'data' => $res
		], $code);
	}

	protected function errorResponse($data, $message = null, $code)
	{
		$res = $data;
		if(is_array($data)){
			$res = (count($data) === 0) ? [] : $data;
		}
		return response()->json([
			'status'=>false,
			'message' => $message,
			'data' => $res
		], $code);
	}
}
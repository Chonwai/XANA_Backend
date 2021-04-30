<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Apis\BaseControllerInterface;
use App\Http\Controllers\Controller;
use App\Services\OrderServices;
use App\Services\ProductServices;
use App\Services\UserServices;
use Illuminate\Http\Request;

class OrderController extends Controller implements BaseControllerInterface
{
    public function responseAll()
    {
        $data = OrderServices::getInstance()->responseAll();

        return response()->json($data, 200);
    }

    public function responseSpecify(Request $request)
    {
        // $status = UserServices::getInstance()->dataValidation($request, 'responseSpecify');

        // if ($status === true) {
        //     $res = UserServices::getInstance()->responseSpecify($request, 'api');
        //     return $res;
        // } else {
        //     return response()->json($status, 200);
        // }
    }

    public function insert(Request $request)
    {
        $data = OrderServices::getInstance()->insert($request);

        return response()->json($data, 200);
    }

    public function update(Request $request)
    {
        //
    }

    public function delete(Request $request)
    {
        //
    }
}

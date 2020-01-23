<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    /**判断优惠券是否有效
     * @param $code
     * @param Request $request
     * @return mixed
     * @throws CouponCodeUnavailableException Author: sai
     * DateTime: 2020/1/23 11:02 上午
     */
    public function show($code, Request $request) {
        // 判断优惠券是否存在
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable($request->user());

        return $record;
    }
}

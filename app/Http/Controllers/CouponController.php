<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Coupon;
use App\Models\StatusCode;
use App\Models\Security;
use Illuminate\Support\Carbon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $coupons = Coupon::with('security', 'status')->get();
        return response()->json($coupons);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'isin_code' => 'string|required',
            'payment_date' => 'date|required',
            'status_id' => 'numeric|required|min:1'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 400);
        }

        $security = Security::where('isin_code', $request->input('isin_code'))->first();
        if (!$security) {
            return response()->json(['errors' => [
                'message' => 'isin_code not found.'
            ]], 404);
        }

        $status = StatusCode::where('status_id', $request->input('status_id'))->first();
        if (!$status) {
            return response()->json(['errors' => [
                'message' => 'status_id not found.'
            ]], 404);
        }

        $coupon = Coupon::create($request->all());

        return response()->json($coupon, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $coupon = Coupon::with('security', 'status')->find($id);

        if (!$coupon) {
            return response()->json(['errors' => [
                'message' => 'requested resource not found.'
            ]], 404);
        }

        return response()->json($coupon);
    }

    /**
     * Display a search result of resources.
     */
    public function search(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'isin_code' => 'string|required',
            'start_date' => 'date|required',
            'end_date' => 'date|required',
            'status_id' => 'numeric|required|min:1'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 400);
        }

        $searchResults = Coupon::whereBetween('payment_date', [$request->input('start_date'), $request->input('end_date')])
            ->where('isin_code', $request->input('isin_code'))
            ->where('status_id', $request->input('status_id'))
            ->get();


        return response()->json($searchResults);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(), [
            'isin_code' => 'string|required',
            'payment_date' => 'date|required',
            'status_id' => 'numeric|required|min:1'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 400);
        }

        $security = Security::where('isin_code', $request->input('isin_code'))->first();
        if (!$security) {
            return response()->json(['errors' => [
                'message' => 'isin_code not found.'
            ]], 404);
        }

        $status = StatusCode::where('status_id', $request->input('status_id'))->first();
        if (!$status) {
            return response()->json(['errors' => [
                'message' => 'status_id not found.'
            ]], 404);
        }

        $coupon = Coupon::find($id);
        if (!$coupon) {
            return response()->json(['errors' => [
                'message' => 'requested resource not found.'
            ]], 404);
        }

        $currentDate = Carbon::now();
        $coupon->update([
            'isin_code' => $request->input('isin_code'),
            'payment_date' => $request->input('payment_date'),
            'status_id' => $request->input('status_id'),
            'record_date' => $currentDate,
        ]);

        return response()->json($coupon);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = Coupon::find($id);

        if (!$coupon) {
            return response()->json(['errors' => [
                'message' => 'requested resource not found.'
            ]], 404);
        }

        $coupon->delete();

        return response()->json([
            'message' => 'coupon deleted successfully.',
        ]);
    }
}

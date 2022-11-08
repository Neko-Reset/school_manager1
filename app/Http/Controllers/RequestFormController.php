<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;
use Illuminate\Support\Facades\Auth;

class RequestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $all = $request->all();
        // dump($all);
        // return view('requestforms.create', compact(''));
    }

    
    public function create_booking(Request $request)
    {
        $all = $request->all();
        return view('requestforms.create', compact('all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking_id = RequestForm::create([
            'coupon_price' => 1000,
            'user_id' => Auth::id(),
            'course_id' => $request->course_id,
            'price' => $request->price,
            'coupon' => $request->coupon,
            'total_price' => $request->total_price
        ]);
        return view('requestforms.index');
    }

    public function payment(Request $request)
    {
        $all = $request->all();
        $secret ="sk_test_fc3a7d8d1819b7f69caf11dd"; // テスト秘密の鍵
        \Payjp\Payjp::setApiKey($secret);
        $description = 'テスト';
        //ユーザーの作成
        $customer = \Payjp\Customer::create(array('card' => $all['payjp-token'], 'description' => $description));
        //チャージの作成
        $charge = \Payjp\Charge::create(array('customer' => $customer->id, 'amount' => 5000, 'currency' => 'jpy', 'description' => $description));
        dump($charge);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

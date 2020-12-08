<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_SESSION['staff'])) {
            return redirect('login');
        }
        unset($_SESSION['cart']);
        unset($_SESSION['customer_ID']);
        unset($_SESSION['cus-promotion']);

        $payments = DB::table('payments')
                                ->get();

        return view('payment/payment', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment/payment-create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('payments')->insert([
            'name' => $request->input('name'),

        ]);

        return redirect('payment')->with('success', 'Cập nhật thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($payment_ID)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($payment_ID)
    {
        $payments = DB::table('payments')
            ->where('payment_ID', '=', $payment_ID)
            ->get();
        return view('payment/payment-edit', ['payments' => $payments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $payment_ID)
    {
        DB::table('payment')
            ->where('payment_ID', '=', $payment_ID)
            ->update([
                'name' => $request->input('name'),

            ]);

            return redirect('payment')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($payment_ID)
    {
        $payment_name = DB::table('payments')
           ->where('payment_ID', '=', $payment_ID)
           ->value('name');
       $roadmaps = DB::table('roadmaps')
           ->where('payment_ID', '=', $payment_ID)
           ->exists();
       if ($roadmaps) {
           return redirect('payment')->with('error', 'Không thể xóa loại sản phẩm ' . $payment_name);
       } else {
           DB::delete('delete from cate_product where payment_ID = ?', [$payment_ID]);
           return redirect('payment')->with('success', 'Cập nhật thành công');
       }
   }
}

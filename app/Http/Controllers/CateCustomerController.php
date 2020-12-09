<?php

namespace App\Http\Controllers;

use App\cate_customer;
use App\role;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

session_start();
class CateCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate_customer = cate_customer::all();
        return view('cate-customer/cate-customer',['cate_customer'=>$cate_customer]);
        // if (!isset($_SESSION['staff'])) {
        //     return redirect('login');
        // }
        // unset($_SESSION['cart']);
        // unset($_SESSION['customer_ID']);
        // unset($_SESSION['cus-promotion']);

        // $cate_customer = DB::table('cate_customer')
        //     ->get();
        // return view('cate-customer/cate-customer', ['cate_customer' => $cate_customer]);
    }
    public function get_create(){
        $cate_customer = cate_customer::all();
        return view('cate-customer/cate-customer-create',
        [
            'cate_customer' => $cate_customer
        ]);
    }
    public function post_create(Request $catecus){
        $this->validate($catecus,[
            'name' => 'required|min:2|max:32',
            
        ],[
            'name.required' => 'Bạn chưa nhập tiêu đề !',
            'name.min' =>'Tên tiêu đề phải tối thiểu 2 ký tự !',
            'name.max' =>'Tên tiêu đề phải tối đa 32 ký tự !',
        ]);
        $cate_customer = new cate_customer;
        $cate_customer->name = $catecus->name;
        $cate_customer->promotion = $catecus->promotion;
   
        // dd($nhanvien);
        $cate_customer->save();
        return redirect(''.route('listcate_customer').'');
    }

    public function get_edit($cate_customer_ID){
        $cate_customer = cate_customer::find($cate_customer_ID);
        return view('cate-customer.cate-customer-edit',['cate_customer'=>$cate_customer]);
    }
    public function post_edit($cate_customer_ID, Request $catecus){
        $cate_customer = cate_customer::find($cate_customer_ID);
        $cate_customer ->cate_customer_ID = $catecus->cate_customer_ID;
        $cate_customer ->name             = $catecus->name;
        $cate_customer ->promotion        = $catecus->promotion;

        $cate_customer ->save();
        return redirect(''.route('listcate_customer').'');
    }
    public function del($cate_customer_ID){
        $cate_customer = cate_customer::destroy($cate_customer_ID);
        return redirect()->back()->with('success','xóa thành công');
    }

















    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cate-customer/cate-customer-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('cate_customer')->insert([
        //     'name' => $request->input('name'),
        //     'promotion' => $request->input('promotion'),

        // ]);

        // return redirect('cate-customer')->with('success', 'Cập nhật thành công');
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
    public function edit($cate_customer_ID)
    {
        // $cate_customer = DB::table('cate_customer')
        //     ->where('cate_customer_ID', '=', $cate_customer_ID)
        //     ->get();
        // return view('cate-customer/cate-customer-edit', ['cate_customer' => $cate_customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cate_customer_ID)
    {
        // $updated = DB::table('cate_customer')
        //     ->where('cate_customer_ID', '=', $cate_customer_ID)
        //     ->update([
        //         'name' => $request->input('name'),
        //         'promotion' => $request->input('promotion'),

        //     ]);

        //     return redirect('cate-customer')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cate_customer_ID)
    {
        // $cate_customer_name = DB::table('cate_customer')
        //     ->where('cate_customer_ID', '=', $cate_customer_ID)
        //     ->value('name');
        // $customers = DB::table('customers')
        //     ->where('cate_customer_ID', '=', $cate_customer_ID)
        //     ->exists();
        // if ($customers) {
        //     return redirect('cate-customer')->with('error', 'Không thể xóa nhóm khách hàng ' . $cate_customer_name);
        // } else {
        //     DB::delete('delete from cate_customer where cate_customer_ID = ?', [$cate_customer_ID]);
        //     return redirect('cate-customer')->with('success', 'Cập nhật thành công');
        // }
    }
}

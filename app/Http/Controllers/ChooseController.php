<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();
class ChooseController extends Controller
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

        
        $choose = DB::table('choose')->paginate(8);
        $customers = DB::table('customers')->get();
        $roadmaps = DB::table('roadmaps')->get();
        return view('choose/choose', [
            'choose' => $choose,
            'roadmaps' => $roadmaps,
            'customers' => $customers,
            ]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('products')->insert([
        //     'name' => $request->input('name'),
        //     'unit' => $request->input('unit'),
        //     'price' => $request->input('price'),
        //     'inventory_number' => $request->input('inventory_number'),
        //     'status' => $request->input('status'),
        //     'cate_product_ID' => $request->input('cate_product_ID'),
        // ]);

        // return redirect('choose')->with('success', 'Cập nhật thành công');
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

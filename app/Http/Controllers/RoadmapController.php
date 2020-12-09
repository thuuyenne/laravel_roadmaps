<?php

namespace App\Http\Controllers;

use App\roadmap;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();
class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (!isset($_SESSION['staff'])) {
        //     return redirect('login');
        // }
    //     unset($_SESSION['cart']);
    //     unset($_SESSION['customer_ID']);
    //     unset($_SESSION['cus-promotion']);

    //     $payments = DB::table('payments')->get();
    //     $customers = DB::table('customers')->get();
    //     $transportations = DB::table('transportations')->get();

    //     $roadmaps = DB::table('roadmaps')->paginate(8);

    //     return view('roadmap/roadmap', [
    //         'roadmaps' => $roadmaps, 
    //         'payments' => $payments,
    //         'customers' => $customers,
    //         'transportations' => $transportations
    //         ]);
                $user    = User::all(); 
                $roadmap = roadmap::all();
                return view('roadmap/roadmap',[
                    'user'   => $user,
                    'roadmap'=> $roadmap]); 
     }
     public function del($roadmap_ID){
        $roadmap = roadmap::destroy($roadmap_ID);
        return redirect()->back()->with('success','xóa thành công');
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
















     
    public function create()
    {
        // $payments = DB::table('payments')->get();
        // $customers = DB::table('customers')->get();
        // $transportations = DB::table('transportations')->get();
        // return view('roadmap/roadmap-create', [
        //     'customers' => $customers,
        //     ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

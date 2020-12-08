<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RequestPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Event;
use Psy\CodeCleaner\RequirePass;
use Illuminate\Support\Facades\Post;

session_start();

class UpdateAccountController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       
    }
   
    
   
    // public function profile()
    // {
    //     return view('account.acc-profile.profile');
    // }

    // public function updateprofileacc()
    // {
    //     // $customers = Customer::findOrFail($customer_ID);
              
    //     // // return view('dashboard.camping.update', compact('camping'));
    //     $customers = Auth::customers(); 
    //     return view('account.acc-profile.profile', compact('customers'));
    //     // return view('account.acc-profile.profile');
    // }
    // public function updateAccountPost(Request $request)
    // {
    //     // $data = $request->except('_token');
    //     // $account = Customer::find(Auth::id());
    //     // //Lưu
    //     // $account->update($data);
    //     // return redirect()->back();
    // }
    public function create()
    {
    
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
    
    }

    
    public function edit($id)
    {
    
    }

    
    public function update(Request $request, $id)
    {
        // $customer = DB::table('customers')
        //     ->where('customer_ID', '=', $customer_ID)
        //     ->update([
               
       
        //         'first_name' => $request->input('first_name'),
        //         'last_name' => $request->input('last_name'),
        //         'phone_number' => $request->input('phone_number'),
        //         'address' => $request->input('address'),
               

        //     ]);

        // return redirect('account/acc-profile/profile')->with('success', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
    
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\RequestPassword;
use Illuminate\Support\Facades\DB;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Psy\CodeCleaner\RequirePass;

session_start();
class AccountConController extends Controller
{    
    
    public function index(){
        if (!isset($_SESSION['customer'])) {
            return redirect('account.login-acc');
        }
        $customer_ID = $_SESSION['customer_ID'];
        $customers = DB::table('customers')
            ->where('customer_ID', '=', $customer_ID)
            ->get();
        return view('account/acc-profile/profile', [
            'customers' => $customers,
        ]);
    }
    
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $customer_ID = $_SESSION['customer_ID'];
        DB::table('customers')->insert([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address')
        ]);

        return redirect('profile')->with('success', 'Cập nhật thành công');
    }
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $customer_ID)
    {
        DB::table('customers')
        ->where('customer_ID', '=', $customer_ID)
        ->update([
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
           

        ]);

    return redirect('customer')->with('success', 'Cập nhật thành công');

    }

    public function show($id){

    }

   
    public function destroy($id)
    {
        //
    }
}

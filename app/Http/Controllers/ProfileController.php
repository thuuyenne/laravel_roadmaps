<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use App\Customer;
use App\User;
session_start();

class ProfileController extends Controller
{
   
    public function index()
    {
        
        if (!isset($_SESSION['customers'])) {
            return redirect('account/login-acc');
        }
        $data = DB::table('customers')
            ->where('customer_ID', '=', $_SESSION['customer_ID'])
            ->get();
           

        return view('account/acc-profile/profile', ['acc-profile' => $data]);
    }
    public function getregistration()
    {
        return view('account.acc-profile.register');
    }
  
    public function postregistration(Request $request){
        {

            DB::table('users')->insert([

                'username' => $request->input('username'),
                'password' => bcrypt($request->input('password')),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'cate_customer_ID' => $request->input('cate_customer_ID'),
                'id_role' => 3,

              
            ]);
        return redirect('account/login-acc')->with('success', 'đăng ký thành công');
        }

       
    } 
    public function showlogin()
        {
            
            return view('account.login-acc');
        }
    public function postlogin(Request $request)
    {
        $email = $request->get("email");
        $password = $request->get("password");
        
        if(Auth::attempt(['email'=>$email,'password'=>$password])){

            return redirect()->route('update_profile');    
        }
        else{
            echo "dangxuat";die;
            return redirect('account/login-acc');
        }

        
        
    }
    public function completelogin(){
        $user = User::all();
        return view('account/acc-profile/profile',['user'=>$user])->with('success', 'đăng nhập thành công');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('account/login-acc');
    }

    public function updateprofileacc(Request $request)
    
    {
        
        $cus = User::find(Auth::user()->id);
       
        return view('account.acc-profile.profile', compact('cus'));
    }

    // public function post_updateprofileacc(Request $request)
    // {
        
    // }


    public function getroadmappro(){
        return view('account.acc-profile.roadmap-profile');
    }

    public function postroadmappro(Request $request){

    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        
    }

    public function show($customer_ID)
    {
        
    }

  
    public function edit($customer_ID)
    {
        $profile = DB::table('customers')
            ->where('customer_ID', '=', $customer_ID)
            ->get();
        return view('account/acc-profile/acc-edit',['acc-profile'=>$profile]);
    }
    public function edit_password(Request $req){

        $user = User::find(Auth::user()->id);
        $user->first_name =  $req->ho;
        $user->last_name =  $req->ten;
        $user->phone_number = $req->sdt;
        $user->address = $req->diachi;


        if($req->changepassword == "on")
        {   
            
            //nhớ phải !, hàm 
            if(!Hash::check($req->oldpassword, Auth::user()->password))
            {
                return redirect()->back()->with('oldpw','Mật khẩu không khớp với mật khẩu hiện tại');
            }
            else
            {
                $this->validate($req,[
                    'password' => 'required|min:3|max:32',
                    'passwordAgain' => 'required|same:password'
                ],[
                    'password.required' => 'Bạn chưa nhập mật khẩu',
                    'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                    'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                    'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                    'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
                ]);

                $user->password= bcrypt($req->password);
            }

                
        }
        $user->save();

           

            return redirect()->back()->with('capnhat','Cập nhật thành công');

    } 

    // public function getupdate_profile()
    // {   
    //     if (!isset($_SESSION['user'])) {
    //         return redirect('account/login-acc');
    //     }
    //     $customer = Event::all();
    //     // $data = DB::table('customers')
    //     //     ->where('customer_ID', '=', $_SESSION['customer_ID'])
    //     //     ->get();

    //     return view('account/acc-profile/profile')->with($customer);
      
 

    // }
    // public function update_profile(Request $request, $customer_ID)
    //  {
       
    //     DB::table('customers')
    //     ->where('customer_ID', '=', $customer_ID)
    //     ->update([
    //         'name' => $request->input('name'),
    //         'gender' => $request->input('gender'),
    //         'phone_number' => $request->input('phone_number'),
    //         'address' => $request->input('address'),
    //         'cate_customer_ID' => $request->input('cate_customer_ID'),

    //     ]);

    // return redirect('account/acc-profile/profile')->with('success', 'Cập nhật thành công');
    // }

 
    public function destroy($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
}

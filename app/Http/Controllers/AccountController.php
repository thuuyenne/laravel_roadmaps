<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

session_start();

class AccountController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $username = $request->get("username");
        $password = $request->get("password");
        
        if(Auth::attempt(['username'=>$username,'password'=>$password])){

            return redirect()->route('quantri.home');    
        }
        else{
            echo "dangxuat";die;
            return redirect()->route('home');
        }
        
    }
    public function logout()
    {
    //    unset($_SESSION['staff']);
        if(Auth::user()->id_role == 1 || Auth::user()->id_role ==  2)
        {
            Auth::logout();
            return redirect()->route('ad.login');
        }
        else
        {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function index()
    {   
        $staff = User::find(Auth::user()->id);

        return view('my-account', ['staff' => $staff]);
    }

    public function update(Request $request)
    {
        $password = DB::table('users')
            ->where('id', '=', $_SESSION['id'])
            ->value('password');
        if ($_POST['old_password'] != '' && $_POST['old_password'] != '') {
            $old_password = $request->input('old_password');
            $new_password = $request->input('new_password');
            if ($password == $old_password) {
                $update = DB::table('staff')
                    ->where('id', '=', $_SESSION['id'])
                    ->update([
                        'phone_number' => $request->input('phone_number'),
                        'address' => $request->input('address'),
                        'password' => $new_password,
                    ]);

                return redirect('index')->with('status-success', 'Cập nhật thành công!');
            } else {
                $update = DB::table('users')
                    ->where('id', '=', $_SESSION['id'])
                    ->update([
                        'phone_number' => $request->input('phone_number'),
                        'address' => $request->input('address'),
                    ]);
                return redirect('index')->with('status-error', 'Mật khẩu cũ không đúng! Vui lòng nhập lại!');
            }
        } else {
            $update = DB::table('users')
                ->where('id', '=', $_SESSION['id'])
                ->update([
                    'phone_number' => $request->input('phone_number'),
                    'address' => $request->input('address'),
                ]);

            return redirect('index')->with('status-success', 'Cập nhật thành công!');
        }
    }
}

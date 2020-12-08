<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

session_start();

class CustomerController extends Controller
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

        $staff_ID = $_SESSION['staff_ID'];

        $cate_customer = DB::table('cate_customer')->get();
        $customers_admin = DB::table('customers')->paginate(8);
        $customers = DB::table('customers')
            ->where('staff_ID', '=', $staff_ID)
            ->get();
        $staff = DB::table('staff')->get();

        return view('customer/customer', [
            'customers_admin' => $customers_admin,
            'customers' => $customers,
            'cate_customer' => $cate_customer,
            'staff' => $staff,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = $_SESSION['staff'];
        $cate_customer = DB::table('cate_customer')->get();
        return view('customer/customer-create', [
            'cate_customer' => $cate_customer,
            'staff' => $staff,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff_ID = $_SESSION['staff_ID'];
        DB::table('customers')->insert([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'cate_customer_ID' => $request->input('cate_customer_ID'),
            'staff_ID' => $staff_ID,
        ]);

        return redirect('customer')->with('success', 'Cập nhật thành công');
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
    public function edit($customer_ID)
    {
        $staff = DB::table('staff')->get();
        $cate_customer = DB::table('cate_customer')->get();
        $customers = DB::table('customers')
            ->where('customer_ID', '=', $customer_ID)
            ->get();
        return view('customer/customer-edit', [
            'customers' => $customers,
            'cate_customer' => $cate_customer,
            'staff' => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer_ID)
    {
        DB::table('customers')
            ->where('customer_ID', '=', $customer_ID)
            ->update([
               
       
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'cate_customer_ID' => $request->input('cate_customer_ID'),

            ]);

        return redirect('customer')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer_ID)
    {
        // $customer_name = DB::table('customers')
        //     ->where('customer_ID', '=', $customer_ID)
        //     ->value('first_name');
        // $customer = DB::table('customer')
        // ->where('cate_customer_ID', '=', $cate_customer_ID)
        //     ->exists();
        // if ($customer) {
        //     return redirect('customer')->with('error', 'Không thể xóa nhóm khách hàng ' . $customer_name);
        // } else {
        //     DB::delete('delete from customers where customer_ID = ?', [$customer_ID]);
        //     return redirect('customer')->with('success', 'Cập nhật thành công');
        }
//}



    public function searchCustomer(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $staff = DB::table('staff')->get();
            $cate_customer = DB::table('cate_customer')->get();
            $customers = DB::table('customers')
                ->where('customer_ID', 'LIKE', '%' . $request->search . '%')
                ->orWhere('first_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('phone_number', 'LIKE', '%' . $request->search . '%')
                ->orWhere('address', 'LIKE', '%' . $request->search . '%')
                ->get();
            if ($customers) {
                $i = 1;
                foreach ($customers as $customer) {
                    foreach ($cate_customer as $cate_cus) {
                        if ($cate_cus->cate_customer_ID === $customer->cate_customer_ID) {
                            $cate_cus_name = $cate_cus->name;
                        }
                    }
                    if ($customer->gender == 0) {
                        $gender = 'Nam';
                    } else if ($customer->gender == 1) {
                        $gender = 'Nữ';
                    } else if ($customer->gender == 2) {
                        $gender = 'Khác';
                    }
                    foreach ($staff as $sta) {
                        if ($sta->staff_ID == $customer->staff_ID) {
                            $staff_username=$sta->username;
                        }
                    }
                    $output .=
                        "<tr>
                        <td>" . $i++ . "</td>
                        <td>" . $customer->customer_ID . "</td>
                        <td>" . $customer->first_name . "</td>
                        <td>" . $customer->last_name . "</td>
                        <td>" . $gender . "</td>
                        <td>" . $customer->phone_number . "</td>
                        <td>" . $customer->address . "</td>
                        <td>" . $cate_cus_name . "</td>
                        <td>" . $staff_username . "</td>


                        <td class='text-right'>
                        <a href=" . url('customer/' . $customer->customer_ID . '/edit') . "
                            class=''>
                            <i class='fa fa-edit action-icon'></i>
                        </a>

                    </td>
                    <td>
                        <form method='POST'
                        action=" . url('customer/' . $customer->customer_ID) . "
                        onsubmit='return deleteAction();'>
                        <input type='hidden' name='_method' value='DELETE'>
                        <input type='hidden' name='_token' value='PDV0qgo8Gu2LzvZZYc6QniRpGB6aAKo62pEEBpSB'>
                        <button style='padding: 0; border:none; background: none;'
                            type='submit'>
                            <i class='fa fa-trash action-icon'></i>
                        </button>
                    </form>

                    </td>

                     </tr>";
                }
            }

            return Response($output);
        }
    }
}
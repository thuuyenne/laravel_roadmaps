<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

session_start();
class StaffController extends Controller
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

        $staff = DB::table('staff')->paginate(8);

        return view('staff/staff', ['staff' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/staff-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('staff')->insert([
            'username' => $request->input('username'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'date_of_birth' => $request->input('date_of_birth'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'position' => $request->input('position'),
        ]);

        return redirect('staff')->with('success', 'Cập nhật thành công');
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
    public function edit($staff_ID)
    {

        $staff = DB::table('staff')
            ->where('staff_ID', '=', $staff_ID)
            ->get();
        return view('staff/staff-edit', ['staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $staff_ID)
    {
        DB::table('staff')
            ->where('staff_ID', '=', $staff_ID)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'gender' => $request->input('gender'),
                'phone_number' => $request->input('phone_number'),
                'date_of_birth' => $request->input('date_of_birth'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'position' => $request->input('position'),

            ]);

        return redirect('staff')->with('success', 'Cập nhật thành công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($staff_ID)
    {
        $staff_name = DB::table('staff')
            ->where('staff_ID', '=', $staff_ID)
            ->value('first_name');
        $orders = DB::table('orders')
            ->where('staff_ID', '=', $staff_ID)
            ->exists();
        $customers = DB::table('customers')
            ->where('staff_ID', '=', $staff_ID)
            ->exists();

        if ($orders || $customers) {
            return redirect('staff')->with('error', 'Không thể xóa nhân viên ' . $staff_name);
        } else {
            DB::delete('delete from staff where staff_ID = ?', [$staff_ID]);
            return redirect('staff')->with('success', 'Cập nhật thành công');
        }
    }

    public function searchStaff(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $staff = DB::table('staff')
                ->where('staff_ID', 'LIKE', '%' . $request->search . '%')
                ->orWhere('username', 'LIKE', '%' . $request->search . '%')
                ->orWhere('first_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('phone_number', 'LIKE', '%' . $request->search . '%')
                ->orWhere('address', 'LIKE', '%' . $request->search . '%')
                ->get();
            if ($staff) {
                $i = 1;
                foreach ($staff as $sta) {

                    if ($sta->gender == 0) {
                        $gender = 'Nam';
                    } else if ($sta->gender == 1) {
                        $gender = 'Nữ';
                    } else if ($sta->gender == 2) {
                        $gender = 'Khác';
                    }
                    if ($sta->position == 0) {
                        $position = 'Quản trị viên';
                    } elseif ($sta->position == 1) {
                        $position = 'Nhân viên';
                    }

                    $output .=
                        "<tr>
                        <td>" . $i++ . "</td>
                        <td>" . $sta->staff_ID . "</td>
                        <td>" . $sta->first_name . "</td>
                        <td>" . $sta->last_name . "</td>
                        <td>" . $gender . "</td>
                        <td>" . $sta->phone_number . "</td>
                        <td>" . $sta->date_of_birth . "</td>
                        <td>" . $sta->email . "</td>
                        <td>" . $sta->address . "</td>
                        <td>" . $position . "</td>


                        <td class='text-right'>
                        <a href=" . url('staff/' . $sta->staff_ID . '/edit') . "
                            class=''>
                            <i class='fa fa-edit action-icon'></i>
                        </a>

                    </td>
                    <td>
                        <form method='POST'
                        action=" . url('staff/' . $sta->staff_ID) . "
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

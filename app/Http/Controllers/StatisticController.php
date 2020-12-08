<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();
class StatisticController extends Controller
{
    public function index()
    {

        if (!isset($_SESSION['staff'])) {
            return redirect('login');
        }
        unset($_SESSION['cart']);
        unset($_SESSION['customer_ID']);
        unset($_SESSION['cus-promotion']);

        // count
        $count_staff = DB::table('staff')->count();
        $count_customer = DB::table('customers')->count();
        // $count_order = DB::table('orders')->count();
        $count_roadmap = DB::table('roadmaps')->count();
        $count_choose = DB::table('choose')->count();
        // $count_area = DB::table('areas')->count();


        // statistic

        //revenue
        // $price = array();
        // $date = array();

        // $date_now = date('Y-m-d');
        // for ($i = date('Y-m-01'); $i <= $date_now; $i++) {
        //     $statistic_revenue = DB::table('orders')
        //         ->where('order_date', '=', $i)
        //         ->get();
        //     $total_price = 0;
        //     $price_to_pay = 0;
        //     $create = date_create($i);
        //     $order_date = date_format($create, "d");
        //     foreach ($statistic_revenue as $sta_rev) {
        //         $total_price1 = $sta_rev->total_price;
        //         $price_to_pay1 = $sta_rev->price_to_pay;

        //         $total_price += $total_price1;
        //         $price_to_pay += $price_to_pay1;
        //     }
        //     $date[] = $order_date;
        //     $price[] = $price_to_pay;
        //}

        //roadmap
        $roadmap_name = array();
        $roadmap_quantity = array();
        $roadmap = DB::table('roadmaps')->get();

        foreach ($roadmap as $sta_road) {
            $roadmap_ID = $sta_road->roadmap_ID;
            $usevehi = $sta_road->usevehi;
            $usecate = 0;
        //     $order_product = DB::table('order_product')
        //         ->where('product_ID', '=', $product_ID)
        //         ->get();
        //     foreach ($order_product as $ord_pro) {
        //         $quantity1 = $ord_pro->quantity;
        //         $quantity += $quantity1;
        //     }
        //     $product_name[] = $name;
        //     $product_quantity[] = $quantity;
        }

        //choose
        $staff_username = array();
        $staff_quantity = array();
        //   $orders=DB::table('orders')->get();
        $staff = DB::table('staff')->get();

        // foreach ($staff as $sta) {
        //     $staff_ID = $sta->staff_ID;
        //     $username = $sta->username;


        //     $quantity = DB::table('orders')
        //         ->where('staff_ID', '=', $staff_ID)
        //         ->count();

        //     $staff_username[] = $username;
        //     $staff_quantity[] = $quantity;
        // }
        // echo json_encode($staff_username);
        // echo json_encode($staff_quantity);

        return view('statistic', [
            'count_staff' => $count_staff,
            'count_customer' => $count_customer,
            // 'count_order' => $count_order,
            'count_roadmap' => $count_roadmap,
            // 'count_delivery' => $count_delivery,
            // 'count_area' => $count_area,

        ])
            // ->with('date', json_encode($date, JSON_NUMERIC_CHECK))
            // ->with('price', json_encode($price, JSON_NUMERIC_CHECK));
            ->with('roadmap_name', json_encode($roadmap_name, JSON_NUMERIC_CHECK))
            ->with('roadmap_quantity', json_encode($roadmap_quantity, JSON_NUMERIC_CHECK))
            ->with('staff_username', json_encode($staff_username, JSON_NUMERIC_CHECK))
            ->with('staff_quantity', json_encode($staff_quantity, JSON_NUMERIC_CHECK));

    }
}
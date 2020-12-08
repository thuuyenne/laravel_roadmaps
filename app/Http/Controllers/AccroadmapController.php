<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Slider;
Use Carbon\Carbon;
session_start();

class AccroadmapController extends Controller
{

    public function index(){

        $ID = DB::table('roadmaps')->get();

        $arrID = array();
        foreach ($ID as $value) {
            # code...
            $id = $value->ID;
            array_push($arrID, $id);

            $start_time = DB::table('roadmaps')
                                ->select('start_time')
                                ->where('roadmap_ID', $id)
                                ->get();
            $arr = array();
        // var_dump($start_time);

            foreach ($start_time as $value) {
            # code...
                $date = $value->start_time;
                array_push($arr, $date);
            }

            $ngay_bat_dau = implode(" ", $arr);;  
            $ngay_ket_thuc = Carbon::now();

            $hieu_so = abs(strtotime($ngay_ket_thuc) - strtotime($ngay_bat_dau));  
            $nam = floor($hieu_so / (365*60*60*24));  
            $thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));  
            $ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));

            if($thang > 0){//trạng thái đang đợi = 0
                DB::update('update roadmaps set status = ? where ID = ?', [0,  $id]);
            }else if ($ngay > 2) {
                # code...
                DB::update('update roadmaps set status = ? where ID = ?', [0,  $id]);
            }else if ($ngay <= 2 && $ngay >= 0) {// trạng thái cbi khởi hành
                # code...
                DB::update('update roadmaps set status = ? where ID = ?', [1,  $id]);
            }else if($ngay < 0){//trạng thái đang khởi hành
                DB::update('update roadmaps set status = ? where ID = ?', [2,  $id]);
            }

        }
        // $roadmap = DB::table('roadmaps')->get();
        //return view('index')->with('roadmap', $roadmap);
        // $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        return view('account/acc-roadmap/where');
    }

    // public function getroadmap(){

    //     return view('account.acc-roadmap.where');
    // }
    public function postroadmap(){
 
        if(!isset($_SESSION['user'])){
            $roadmap = DB::table('roadmaps')
                        ->orderBy('start_time')
                        ->get();
             $_SESSION['error'] = 'Bạn vui lòng đăng nhập để có thể đăng lộ trình';
            return redirect('/')->with('roadmap', $roadmap);
        }else{
            $_SESSION['error'] = null;
            return view('account/acc-roadmap/where');
        }

    }
    public function getvehicle(){

        return view('account.acc-roadmap.vehicle');
    }
    public function postvehicle(){
        
        // view('account.acc-roadmap.vehicle')
        return "nghia";
        }
    //submit form where
//     public function whereroadmap(Request $request){
//         // dd(());
//         $customer_ID=$_SESSION['ID'];
//         $start_point = $request->get("start_point");
//         $end_point = $request->get("end_point");
//         $distance = $request->get("distance");
//         str_replace(',', '', $distance);
//         str_replace(' km', '', $distance);
//         $distance = (int)$distance;

//         $createDate = Carbon::now();
//          $createDate->format('s:i:H dd-mm-yyyy');
//         if($start_point != null && $end_point != null){
//             DB::insert('insert into roadmaps (customer_ID,start_point, end_point, distance, created_at) values (?,?, ?, ?, ?)', [$customer_ID,$start_point, $end_point, $distance, $createDate]);
//             return  view('account/acc-roadmap/vehicle');
//         }
//     }

//     public function vehicle_roadmap(){
//         return view('account/acc-roadmap/vehicle');
//     }
   


//     public function vehicleroadmap(Request $request){
//         $usevehi = $request->get("usevehi");
//         $start_time = $request->get("start_time");
//         $usercate = $request->get("usercate");
//         $status = 0;
//         $ID = DB::table('roadmaps')->max('ID');
//         if($usevehi != null && $start_time != null){
//             DB::update('update roadmaps set usevehi = ?, start_time = ?, usercate = ?, status = ? where ID = ?', [$usevehi, $start_time, $usercate, $status, $ID]);
//             $distance = DB::table('roadmaps')
//                             ->select('distance')
//                             ->where('ID', $ID)
//                             ->get();
//         if($usevehi == "Xe máy"){
//             $veh = DB::table('vehicles')
//                         ->where('category', 'xe mô tô')
//                         ->get();
//         }else{
//             $veh = DB::table('vehicles')
//                         ->where('category', '!=', 'xe mô tô')
//                         ->get();
//         }
//             preg_match_all('!\d+\.*\d*!', $distance, $matches);

//             return view("price")->with([
//                 'distance' => implode("",$matches[0]),
//                 'veh' => $veh,
//                 'usercate' => $usercate
//                ]);
//             // return redirect('/gia.html?data=' . implode("",$matches[0]));
//         }
//     }
//     public function priceroadmap(Request $request){

//         $price = $request->get("price");
//         $howprice = $request->get("howprice");
//         $rule = $request->get("rule");
//         $usevehi = $request->get("usevehi");
//         $trans = $request->get("trans");
        

//         $ID = DB::table('roadmaps')->max('ID');           
//         if($price != null){
//             DB::update('update roadmaps set price = ?, trans = ?, howprice = ?, rule = ?, usevehi = ? where ID = ?', [$price, $trans, $howprice,  $rule, $usevehi, $ID]);

//         }
//         return view('account/acc-roadmap/complete');

//     }

//     public function finish(){
//         return view('account/acc-roadmap/complete');
//     }

//     public function detailRoadmaps($roadmap_ID){
//         if(isset($_SESSION['customer_ID'])){
//         $roadmap = DB::table('roadmaps')->join('customers','customers.roadmap_ID','roadmaps.customer_ID')
//         ->select('roadmaps.*','customer.username')->where('roadmaps.roadmap_ID',$roadmap_ID)->first();
//         return view('account.acc-profile.profile')->with(compact('roadmap'));
//     }
//     else{
//         // dd($ID);
//         $roadmap = DB::table('roadmaps')->join('customers','customers.customer_ID','roadmaps.customer_ID')
//         ->select('roadmaps.*','customers.username')->where('roadmaps.customer_ID',$roadmap_ID)->first();
//         $_SESSION['error'] = 'Bạn vui lòng đăng nhập để truy cập trang user';
//         $_SESSION['success'] = null;
//         return view('account.acc-profile.profile')->with(compact('roadmap'));
//     }
// }

//     public function chooseroadmap(Request $request){
//         $ID = $request->get("ID");

//         $choosed = DB::table('roadmaps')
//         ->select('choosed')
//         ->where('ID', $ID)
//         ->get();
//         preg_match_all('!\d+\.*\d*!', $choosed, $matches);
//         foreach ($matches as $value) {
//             # code...
//             $str = $value;
//         }
//         $count =  implode("",$str);
//         $count = (int)$count + 1;                   
//         DB::table('choose')->insert([
//             'roadmap_ID'=>$ID,
//             'customer_ID'=>$_SESSION['ID']
//         ]);
//         DB::update('update roadmaps set choosed = ? where ID = ?', [$count, $ID]);
//         return view('success');
//     }
 

    public function error(){
        return view("error");
    }

    // public function getprofile(){

    //     return view('account.acc-roadmap.profile');

    // }
    // public function postprofile(Request $request){

       

    // }
    public function show($id){

    }
}

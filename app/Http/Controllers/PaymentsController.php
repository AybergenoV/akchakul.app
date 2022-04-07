<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    private $price = 
    ['SAMARQAND'=>395000,
    'BUXORO'=>230000,
    'ARAL'=>90000,
    'XIVA'=>100000,
    'TURCIYA'=>5400000,
'MUYNAK'=>75000];
    private $merchant_id = 14411;
    private $merchant_user_id = 22947;
    private $service_id = 19865;
    private $card_type = 'humo';

    public function payment(Request $request){
        $all_price = $request->amount;
        $return_url = $request->return_url;
        $data = [
            'amount'=>$all_price,
            'merchant_id'=>$this->merchant_id,
            'merchant_user_id'=>$this->merchant_user_id,
            'service_id'=>$this->service_id,
            'transaction_param'=>rand(10000,100000),
            'return_url'=>$return_url,
            'card_type'=>$this->card_type
        ];
        $data = http_build_query($data);
        return redirect("https://my.click.uz/services/pay?".$data);
        
    }
    
    public function getMe(Request $request){
        $name = $request->name;
        $date = $request->date;
        $phone = $request->phone;
        $number = $request->number;
        $place = $request->place;
        $return_url = $request->return_url;
        $data = [
            'name'=>$name,
            'phone'=>$phone,
            'price'=>$this->price[$place],
            'count'=>$number,
            'all_price'=>$number*$this->price[$place],
            'place'=>$place,
            'return_url'=> $request->return_url
        ];
        // $data = http_build_query($data);
        return view('payment', ['data'=>$data]);
        

    }
}

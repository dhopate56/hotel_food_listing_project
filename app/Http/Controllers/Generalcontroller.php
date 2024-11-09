<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\hotel;
use Carbon\Carbon;


class Generalcontroller extends Controller
{
    public function homepage(){
        $food=food::all()->count();
        $hotel=hotel::all()->count();

        // $data=compact('food','hotel');
        // return view('home.index')->with($data);
        return view('home.index',compact('food','hotel'));
    }
    public function add_food(){
        return view('home.add_food');
    }
    public function store_food(Request $request){

        $food= new food;
        $food->dish_name=$request['dish_name'];
        $food->price=$request['price'];
        $food->category=$request['category'];
        $food->hotel_name=$request['hotel_name'];

        $food->save();
        return redirect()->route('show_food');



    }
    public function show_food(Request $request){
        // $food=food::all();
        // $data=compact('food');
        // return view('home.show_food')->with($data);

        $query = food::query();
$date = $request->date_filter;
switch($date) {
case 'today':
$query->whereDate('created_at', Carbon::today());
break;
case 'yesterday':
$query->wheredate('created_at', Carbon::yesterday());
break;
case 'this_week':
$query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endofWeek()]);
break;
case 'last_week':
$query->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()]);
break;
case 'this_month':
$query->whereMonth('created_at', Carbon::now()->month);
break;
case 'last_month':
$query->whereMonth('created_at', Carbon::now()->subMonth()->month);
break;
case 'this_year':
$query->whereYear('created_at', Carbon::now()->year);
break;
case 'last_year':
$query->whereYear('created_at', Carbon::now()->subYear()->year);
break;
}

if(isset($request->min) && ($request->min != null))
{
$query->where( column: 'price', operator: '>=', value: $request->min);
}
if (isset($request->max) && ($request->max != null))
{
$query->where( column: 'price', operator: '<=', value: $request->max);

}
$food = $query->get();
return response()->view('home.show_food',compact('food'));


    }
    public function add_hotel(){
        return view('home.add_hotel');
    }
    public function store_hotel(Request $request){

        $hotel= new hotel;
        $hotel->name=$request['name'];
        $hotel->location=$request['location'];
        $hotel->speciality=$request['speciality'];

        $hotel->save();
        return redirect()->route('show_hotel');



    }
    public function show_hotel(Request $request){
        // $hotel=hotel::all();
        // $data=compact('hotel');
        // return view('home.show_hotel')->with($data);

$query = hotel::query();
$date = $request->date_filter;
switch($date) {
case 'today':
$query->whereDate('created_at', Carbon::today());
break;
case 'yesterday':
$query->wheredate('created_at', Carbon::yesterday());
break;
case 'this_week':
$query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endofWeek()]);
break;
case 'last_week':
$query->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()]);
break;
case 'this_month':
$query->whereMonth('created_at', Carbon::now()->month);
break;
case 'last_month':
$query->whereMonth('created_at', Carbon::now()->subMonth()->month);
break;
case 'this_year':
$query->whereYear('created_at', Carbon::now()->year);
break;
case 'last_year':
$query->whereYear('created_at', Carbon::now()->subYear()->year);
break;
}
$hotel = $query->get();
return response()->view('home.show_hotel',compact('hotel'));




    }
   public function search_hotel(Request $request){
        $hotel= hotel::where('name', 'like', "%$request->search%")->get();
        $data=compact('hotel');
        return view('home.show_hotel')->with($data);    
        }
        public function search_food(Request $request){
            $food= food::where('dish_name', 'like', "%$request->search%")->get();
            $data=compact('food');
            return view('home.show_food')->with($data);    
            }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.adminPanel');
    }
    public function quantity(Request $request,$medicine_id,$medicine_quantity)
    {
      //if(Medicine::find($medicine_id)->medicine_quantity->$medicine_quantity)
//Medicine::find($medicine_id)->medicine_quantity >= $medicine_quantity
  if(Medicine::find($medicine_id)->medicine_quantity >= $medicine_quantity){
    Medicine::find($medicine_id)->decrement('medicine_quantity',$medicine_quantity);
    return back();
  }
  if(Medicine::find($medicine_id)->medicine_quantity < $medicine_quantity){

    return back();
  }


      //return view('backend.sells.sells');
    }
    public function sells()
    {
        $medicines = Medicine::all();
        return view('backend.sells.sells',compact('medicines'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Company;
use App\Disease;

class MedicineController extends Controller
{
  public function medicine_add(Request $request)
  {
      $companies = Company::all();
        $diseases = Disease::all();
    return view('backend.medicine.medicine_add',compact('companies','diseases'));
  }
  public function medicine_show(Request $request)
  {
    $medicines = Medicine::all();
    return view('backend.medicine.medicine_show',compact('medicines'));
  }
  public function medicine_create(Request $request)
  {

      if($request->hasFile('medicine_image')){
        $medicine_id =  Medicine::insertGetId([
          'medicine_name'    =>$request->medicine_name,
          'medicine_quantity'    =>$request->medicine_quantity,
          'medicine_description'    =>$request->medicine_description,
          'company_id'    =>$request->company_id,
          'disease_id'    =>$request->disease_id,
          ]);
          $path = $request->file('medicine_image')->store('medicine_image');
           Medicine::find($medicine_id)->update([
             'medicine_image'=> $path
           ]);
             return back()->with('faysal','This is profitably over');
        }
        else{
          Medicine::insert([
            'medicine_name'    =>$request->medicine_name,
            'medicine_quantity'    =>$request->medicine_quantity,
            'medicine_description'    =>$request->medicine_description,
            'company_id'    =>$request->company_id,
            'disease_id'    =>$request->disease_id,
          ]);
            return back();
        }
  }
}

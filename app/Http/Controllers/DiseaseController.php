<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;

class DiseaseController extends Controller
{
  public function disease_add()
  {
    return view('backend.disease.disease_add');
  }
  public function disease_show()
  {
    $diseases = Disease::all();
    // foreach ($diseases as $diseases) {
    // echo $diseases;
    //}
    return view('backend.disease.disease_show',compact('diseases'));
  }
  public function disease_create(Request $request)
  {
    // $disease = $request->disease_name;
    // echo $disease;
    Disease::insert([
      'disease_name'=> $request->disease_name,
    ]);
    return back();
  }
}

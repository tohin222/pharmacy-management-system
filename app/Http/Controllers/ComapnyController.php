<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Disease;

class ComapnyController extends Controller
{
    public function company_add()
    {
      return view('backend.company.company_add');
    }
    public function company_as_disease()
    {

      return view('backend.company.company_as_disease');
    }
    public function company_show()
    {
      $companies = Company::all();
      return view('backend.company.company_show',compact('companies'));
    }
    public function company_create(Request $request)
    {
      Company::insert([
        'company_name'=> $request->company_name,
      ]);
      return back();
    }
}

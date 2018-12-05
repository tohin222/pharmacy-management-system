<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
  protected $fillable = [
      'medicine_name', 'medicine_description', 'company_id','disease_id','medicine_image',
  ];
  public function companies()
  {
    return $this->hasOne(Company::class);
  }
}

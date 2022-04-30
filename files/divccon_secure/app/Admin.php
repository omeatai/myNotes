<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //Table Name
  protected $table = "admin";
  //Primary Key
  public $primaryKey = "id";
  //Timestamps
  public $timestamps = true;
}

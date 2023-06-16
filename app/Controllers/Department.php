<?php

namespace App\Controllers;

class Department extends BaseController
{
   public function index()
   {
      return view('pages/Department/tampilDepartment');
   }
}

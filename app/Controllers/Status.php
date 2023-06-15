<?php

namespace App\Controllers;

class Status extends BaseController
{
   public function index()
   {
      return view('pages/StatusProject/tampilStatus');
   }
}

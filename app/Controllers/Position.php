<?php

namespace App\Controllers;

class Position extends BaseController
{
   public function index()
   {
      return view('pages/Position/tampilPosition.php');
   }
}

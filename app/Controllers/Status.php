<?php

namespace App\Controllers;

use App\Models\Status_m;

class Status extends BaseController
{
   protected $statusModel;

   public function __construct()
   {
      $this->statusModel = new Status_m();
   }

   public function index()
   {
      return view('pages/StatusProject/tampilStatus');
   }

   public function getDataStatus()
   {
      return json_encode($this->statusModel->findAll());
   }

   public function sendDataStatus()
   {
      $id = $this->generateRandomStr(4);
      $status = $this->request->getPost();

      $data = [
         'id_status' => $id,
         'status' => $status
      ];
      $response = $this->statusModel->save($data);

      return json_encode($response);
   }
}

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

   public function index($id = null)
   {
      if ($id === null) {
         return view('pages/StatusProject/tampilStatus');
      } else {
         $data = $this->statusModel->find($id);
         $result = [
            'data' => $data
         ];

         return view('pages/StatusProject/formUbah', $result);
      }
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
         'id' => $id,
         'status' => $status
      ];
      $response = $this->statusModel->insert($data);

      return json_encode($response);
   }

   public function editDataStatus($id)
   {
      $id = $this->request->getPost('id');
      $data = [
         'status' => $this->request->getPost('status')
      ];

      $this->statusModel->update($id, $data);

      $response = [
         'status' => 'success',
         'message' => 'Data updated successfully'
      ];

      return $this->response->setJSON($response);
   }

   public function deleteDataStatus($id)
   {
      $result = $this->statusModel->delete($id);

      $response = [
         'success' => $result
      ];

      return json_encode($response);
   }
}

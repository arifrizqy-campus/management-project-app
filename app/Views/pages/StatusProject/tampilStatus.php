<?= $this->extend('layout/template'); ?>

<?= $this->section('main-content'); ?>
<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Data Status Project</h5>
         </div>
         <div class="modal-body">
            <form action="#" method="post" onsubmit="Submit(event)">
               <label for="sStatus">Status Name</label> <br />
               <input type="text" id="sStatus" class="field" placeholder="Type Status Name" />
               <button type="submit">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- END OF MODAL -->

<!-- MAIN -->
<main>
   <div class="table-data">
      <div class="order">
         <div class="head">
            <h3>Status Project</h3>
            <button type="button" class="add-btn" data-toggle="modal" data-target="#modalForm">Add Data</button>
         </div>
         <table>
            <thead>
               <tr>
                  <th class="column-no">No</th>
                  <th class="column-name">Status Name</th>
                  <th class="column-act">Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>01</td>
                  <td>Name 1</td>
                  <td>
                     <button class="edit-btn">Edit</button>
                     <button class="delete-btn">Delete</button>
                  </td>
               </tr>
               <tr>
                  <td>02</td>
                  <td>Name 2</td>
                  <td>
                     <button class="edit-btn">Edit</button>
                     <button class="delete-btn">Delete</button>
                  </td>
               </tr>
               <tr>
                  <td>03</td>
                  <td>Name 3</td>
                  <td>
                     <button class="edit-btn">Edit</button>
                     <button class="delete-btn">Delete</button>
                  </td>
               </tr>
               <tr>
                  <td>04</td>
                  <td>Name 4</td>
                  <td>
                     <button class="edit-btn">Edit</button>
                     <button class="delete-btn">Delete</button>
                  </td>
               </tr>
               <tr>
                  <td>05</td>
                  <td>Name 5</td>
                  <td>
                     <button class="edit-btn">Edit</button>
                     <button class="delete-btn">Delete</button>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</main>
<!-- MAIN -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- JavaScript -->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script>
   function Submit(event) {
      event.preventDefault(); // Agar halaman tidak ter-reload pada klik submit form
      const dataStatus = document.getElementById("sStatus").value;
      if (dataStatus === "") {
         swalWarn();
      } else {
         swalSuccess();
      }
   }
</script>
<!-- JavaScript -->
<?= $this->endSection(); ?>
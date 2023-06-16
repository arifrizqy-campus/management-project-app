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
            <div class="form">
               <label for="status">Status Name</label> <br />
               <input type="text" id="status" class="field" placeholder="Type Status Name" required />
               <button type="submit" onclick="sendDataStatus()">Submit</button>
            </div>
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
            <tbody id="list_status"></tbody>
         </table>
      </div>
   </div>
</main>
<!-- MAIN -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- JavaScript -->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript">
   const getDataStatus = () => {
      $.ajax({
         url: "<?= base_url('/list-status/getDataStatus'); ?>",
         method: "get",
         success: function(response) {
            let listStatus = JSON.parse(response);
            let content = '';
            let nomor = 0;
            listStatus.forEach(dataStatus => {
               nomor++;
               content += `
                  <tr>
                     <td>${nomor}</td>
                     <td>${dataStatus.status}</td>
                     <td>
                        <a href="#" class="edit-btn">Edit</a>
                        <a href="#" class="delete-btn">Delete</a>
                     </td>
                  </tr>
               `;
            });
            $("#list_status").append(content);
         }
      })
   };

   const sendDataStatus = () => {
      let dataStatus = $('#status').val();
      $.ajax({
         url: "<?= base_url('/list-status'); ?>",
         method: 'POST',
         dataType: 'json',
         data: {
            status: dataStatus
         },
         success: function(response) {
            $('#list_status').val('');
            swalSuccess();
            getDataStatus();
         },
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            alert('An error occurred.');
         }
      })
   };

   $(document).ready(function() {
      getDataStatus();
   })
</script>
<!-- JavaScript -->
<?= $this->endSection(); ?>
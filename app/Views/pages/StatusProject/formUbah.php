<?= $this->extend('layout/template'); ?>

<?= $this->section('main-content'); ?>
<!-- MAIN -->
<main>
   <div class="table-data">
      <div class="order">
         <div class="head">
            <h3>Update Status Project</h3>
         </div>
         <div>
            <label for="status">Status Name</label> <br />
            <input type="text" id="id" class="field" value="<?= isset($data) ? $data['id'] : ''; ?>" style="display: hidden;" readonly />
            <input type="text" id="status" class="field" value="<?= isset($data) ? $data['status'] : ''; ?>" placeholder="Type Status Name" required />
            <button type="submit" onclick="sendDataStatus()" style="display: block;">Submit</button>
         </div>
      </div>
   </div>
</main>
<!-- MAIN -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- JavaScript -->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript">
   const sendDataStatus = () => {
      let dataID = $('#id').val();
      let dataStatus = $('#status').val();
      $.ajax({
         url: `<?= base_url('/list-status'); ?>/${id}`,
         method: 'POST',
         dataType: 'json',
         data: {
            id: dataID,
            status: dataStatus
         },
         success: function(response) {
            swalSuccess("Data has been update");
         }
      });

   };
</script>
<!-- JavaScript -->
<?= $this->endSection(); ?>
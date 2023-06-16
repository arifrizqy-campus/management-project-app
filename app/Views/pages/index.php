<?= $this->extend('layout/template'); ?>

<?= $this->section('main-content'); ?>
<!-- MAIN -->
<main>
   <div class="head-title">
      <div class="left">
         <h1>Dashboard</h1>
         <ul class="breadcrumb">
            <li>
               <a href="/">Dashboard</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
               <a class="active" href="/">Home</a>
            </li>
         </ul>
      </div>
   </div>

   <div class="table-data">
      <div class="order">
         <div class="head">
            <h3>Welcome</h3>
         </div>
      </div>
   </div>
</main>
<!-- MAIN -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- JavaScript -->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<!-- JavaScript -->
<?= $this->endSection(); ?>
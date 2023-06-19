<!DOCTYPE html>
<html lang="en">

<head>
   <!-- link style css -->
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />

   <!-- Link style icon font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Dashboard Management Project App</title>
</head>

<body>
   <!-- SIDEBAR -->
   <section id="sidebar">
      <a href="/" class="brand">
         <i class="fa-solid fa-people-roof"></i>
         <span class="text">Management Project App</span>
      </a>
      <ul class="side-menu top">
         <li class="-">
            <a href="/">
               <i class="fa-solid fa-house"></i>
               <span class="text">Dashboard</span>
            </a>
         </li>
         <li class="kalau mau aktifin ini tulisan activee pindah sini">
            <a href="#">
               <i class="fa-solid fa-diagram-project"></i>
               <span class="text">Project</span>
            </a>
         </li>
         <li class="-">
            <a href="#">
               <i class="fa-solid fa-people-group"></i>
               <span class="text">Team</span>
            </a>
         </li>
         <li class="-">
            <a href="#">
               <i class="fa-solid fa-user"></i>
               <span class="text">Employee</span>
            </a>
         </li>
         <li class="-">
            <a href="#">
               <i class="fa-solid fa-building"></i>
               <span class="text">Client company</span>
            </a>
         </li>
         <li class="active">
            <a href="<?= base_url("/list-status"); ?>">
               <i class="fa-solid fa-list-check"></i>
               <span class="text">Status project</span>
            </a>
         </li>
         <li class="-">
            <a href="<?= base_url("/list-position"); ?>">
               <i class="fa-sharp fa-solid fa-user-tie"></i>
               <span class="text">Position</span>
            </a>
         </li>
         <li class="-">
            <a href="<?= base_url("/list-department"); ?>">
               <i class="fa-solid fa-users"></i>
               <span class="text">Department</span>
            </a>
         </li>
         <li class="-">
            <a href="<?= base_url("/list-role"); ?>">
               <i class="fa-solid fa-address-book"></i>
               <span class="text">Role</span>
            </a>
         </li>
      </ul>
      <ul class="side-menu">
         <li>
            <a href="#">
               <i class="fa-solid fa-phone"></i>
               <span class="text">Contact us</span>
            </a>
         </li>
      </ul>
   </section>
   <!-- SIDEBAR -->

   <!-- CONTENT -->
   <section id="content">
      <!-- NAVBAR -->
      <nav>
         <i class="fa-solid fa-bars"></i>
         <a class="btn-log" href="#">
            <button>Logout <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></button></a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN CONTENT -->
      <?= $this->renderSection('main-content'); ?>
      <!-- MAIN CONTENT -->

   </section>
   <!-- CONTENT -->

   <!-- JavaScript -->
   <!-- Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!-- SweetAlert - JS -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- jQuery - JS -->
   <script src="<?= base_url('assets/js/jquery-3.7.0.js'); ?>"></script>

   <!-- MY JS -->
   <?= $this->renderSection('js'); ?>
   <!-- MY JS -->

</body>

</html>
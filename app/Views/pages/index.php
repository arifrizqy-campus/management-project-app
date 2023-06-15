<!DOCTYPE html>
<html lang="en">

<head>
   <!-- link style css -->
   <link rel="stylesheet" href="assets/css/styledashboard.css" />

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
      <a href="#" class="brand">
         <i class="fa-solid fa-people-roof"></i>
         <span class="text">Management Project App</span>
      </a>
      <ul class="side-menu top">
         <li class="active">
            <a href="#">
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
         <li class="-">
            <a href="<?= base_url("/list-status"); ?>">
               <i class="fa-solid fa-list-check"></i>
               <span class="text">Status project</span>
            </a>
         </li>
         <li class="-">
            <a href="pages/Position/tampilPosition.html">
               <i class="fa-sharp fa-solid fa-user-tie"></i>
               <span class="text">Position</span>
            </a>
         </li>
         <li class="-">
            <a href="pages/Division/tampilDivision.html">
               <i class="fa-solid fa-users"></i>
               <span class="text">Division</span>
            </a>
         </li>
         <li class="-">
            <a href="pages/Role/tampilRole.html">
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

      <!-- MAIN -->
      <main>
         <div class="head-title">
            <div class="left">
               <h1>Dashboard</h1>
               <ul class="breadcrumb">
                  <li>
                     <a href="#">Dashboard</a>
                  </li>
                  <li><i class="bx bx-chevron-right"></i></li>
                  <li>
                     <a class="active" href="#">Home</a>
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
   </section>
   <!-- CONTENT -->

   <!-- link javascript -->
   <script src="/assets/js/scriptdashboard.js"></script>
</body>

</html>
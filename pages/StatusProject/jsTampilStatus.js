const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .fa-solid.fa-bars");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

function swalSuccess() {
  swal("Success!", "Data has been added !", "success");
  setTimeout(function () {
    location.reload(); // Reload halaman setelah 1,7 detik menjalankan fungsi
  }, 1700);
}

function swalWarn() {
  swal("Warning!", "Make sure all fields are filled in !", "warning");
}

function Submit(event) {
  event.preventDefault(); // Agar halaman tidak ter-reload pada klik submit form
  const dataStatus = document.getElementById("sStatus").value;
  if (dataStatus === "") {
    swalWarn();
  } else {
    swalSuccess();
  }
}

function Submit(event) {
   event.preventDefault(); // Agar halaman tidak ter-reload pada klik submit form
   const dataStatus = document.getElementById("sStatus").value;
   if (dataStatus === "") {
      swalWarn();
   } else {
      swalSuccess();
   }
}

<?php
include 'templates/header.php';

?>      
  <h1 class="display-5">Anda ingin melakukan </h1>
  <h2 class="display-5">pengaduan?</h2>
<p class="lead">Pilih pengaduan/informasi untuk mengajukan pengaduan</p>

<div class="option-buttons">
    <a href="dashboard.php" class="option-button btn btn-primary">Pengaduan/Informasi</a>
    
   
    <a href="auth/login.php" class="option-button btn btn-primary">Admin</a>
    </a>
    <style>
.button-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.option-button {
    margin: 10px 0; /* Memberikan jarak atas dan bawah pada tombol */
    padding: 20px 30px;
    text-decoration: none;
    border: 1px solid #007BFF;
    border-radius: 25px;
}

.display-5 {
    margin: 10px 0; /* Memberikan jarak atas dan bawah pada elemen dengan class "display-5" */
}

.lead {
    margin: 10px 0; /* Memberikan jarak atas dan bawah pada elemen dengan class "lead" */
}





</style>


</div>

<?php
include 'templates/footer.php';
?>

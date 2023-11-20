<?php
include 'templates/header2.php';
require 'function.php';
if (isset($_POST['submit'])) {
    if (insertPengaduan($_POST) > 0) {
        echo "<script>alert('Data pengaduan Anda berhasil terkirim.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data pengaduan Anda gagal terkirim.'); window.location='form-pengaduan.php';</script>";
    }
    $nb = $_POST['layanan'];
    $ks = $_POST['sifat'];
    $pp = $_POST['petugas'];
}
$query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM pengaduan");
$r = mysqli_fetch_array($query);
$kodeBarang = $r['kodeTerbesar'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 4, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "NP";
$kodeBarang = $huruf . sprintf("%04s", $urutan);
?>      
      <h1 style="margin-top: -40px;">Form Pengaduan Masyarakat</h1>
      <form action="" method="POST">
        <div class="form-row p-3">
          <div class="form-group">
              <label for="id">Nomor Pengaduan</label>
              <input type="text" name="id" id="id" class="form-control" value="<?= $kodeBarang; ?>" style="cursor: default;" readonly>
              <p class="text-sm"><span style="color: red;">*</span>Harap catat kode ini untuk melakukan pengecekan sendiri melalui kolom pencarian.</p>
          <div>
          <div class="form-group">
              <label for="nama">Nama Pemohon</label>
              <input type="text" name="nama" id="nama" class="form-control"  required>
          <div>
          <div class="form-group">
              <label for="nik"> NIK Pemohon</label>
              <input type="number" name="nik" id="nik" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="no">No telp/akun medsos</label>
              <input type="text" name="no" id="no" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="layanan">Jenis Permohonan</label>
              <select name="layanan" id="layanan" class="form-control" required>
              <option value="Layanan Informasi">Layanan Informasi</option>
              <option value="Layanan Aduan">Layanan Aduan</option>
            </select>
          <div>
          <div class="form-group">
              <label for="sifat">Klasifikasi sifat</label>
              <select name="sifat" id="sifat" class="form-control" required>
              <option value="Keterangan Rencana Kota">Keterangan Rencana Kota</option>
              <option value="KKPR">KKPR</option>
              <option value="PKPR">PKKPR</option>
              <option value="PBG">PBG</option>
              <option value="Pemakaman">Pemakaman</option>
              <option value="Pengawasan">Pengawasan</option>
              <option value="Surat Masuk">Surat Masuk</option>
              <option value="IRK">IRK</option>
              <option value="SLF">SLF</option>
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="Permohona Informasi Publik (via PPID)">Permohonan Informasi Publik (via PPID)</option>
              <option value="Lowongan Kerja">Lowongan Kerja</option>
              <option value="Magang">Magang</option>
              <option value="Salah Info Dinas">Salah Info Dinas</option>
              <option value="Salinan IMB">Salinan IMB</option>
              <option value="Layanan Loket MPP">Layanan Loket MPP</option>
              <option value="Penomoran Rumah/Bangunan">Penomoran Rumah/Bangunan</option>
              <option value="Reset Akun">Reset Akun</option>
            </select>
          <div>
          <div class="form-group">
              <label for="informasi">Informasi/Aduan</label>
              <input type="text" name="informasi" id="informasi" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="aduan">Gambaran singkat aduan</label>
              <input type="text" name="aduan" id="aduan" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="petugas">Petugas Pelayanan</label>
              <select name="petugas" id="petugas" class="form-control" required>
              <option value="Putri Rahmaniar">Putri Rahmaniar</option>
              <option value="Dwi Puteri Gumilar">Dwi Puteri Gumilar</option>
              <option value="Albar">Albar</option>
              <option value="Dika">Dika</option>
              <option value="Iman Stabit">Iman Stabit</option>
              <option value="Ahmad Maurits">Ahmad Maurits</option>
              <option value="Arif Priyo">Arif Priyo</option>
              <option value="Dandan Soleh Mulyana">Dandan Soleh Mulyana</option>
              <option value="Muhammad Febrianto">Muhammad Febrianto</option>
              <option value="Muhammad Iqbal Zulfikar">Muhammad Iqbal Zulfikar</option>
              <option value="Lely Romauli">Lely Romauli</option>
              <option value="Shaila Khuzaimah">Shaila Khuzaimah</option>
              <option value="Annisa Namira">Annisa Namira</option>
            </select>
          <div>
          <div class="form-group">
              <label for="ket">Keterangan</label>
              <textarea name="ket" id="ket" class="form-control" required></textarea>
          <div>
          <button class="btn btn-outline-success mt-3 mr-3" type="submit" name="submit" style="width: 100px;"><span class="fas fa-paper-plane mr-2"></span>Kirim</button>
          <button class="btn btn-outline-danger mt-3" type="reset" name="reset" style="width: 130px;"><span class="fas fa-undo mr-2"></span>Reset Form</button>
        </div>
      </form>
      
<?php
include 'templates/footer.php';
?>

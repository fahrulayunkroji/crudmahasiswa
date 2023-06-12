<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputNis" class="form-label">Nim</label>
          <input type="number" class="form-control" id="inputNis" name="nis" placeholder="Masukan Nim mahasiswa">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukan Nama">
        </div>
         <div class="mb-3">
          <label for="inputalamat" class="form-label">alamat</label>
          <input type="text" class="form-control" id="inputalamat" name="alamat" placeholder="Masukan alamat">
        </div>
        <div class="mb-3">
          <label for="inputprodi" class="form-label">prodi</label>
          <select class="form-control" name="kelas" id="inputprodi">
          <option value="">Pilih Prodi</option>
          <option value="D3-MI">D3-MI</option>
          <option value="S1-SI">S1-SI</option>
          <option value="S1-TI">S1-TI</option>
          </select>
          <!-- <input type="text" class="form-control" id="inputprodi" name="kelas" placeholder="Masukan prodi"> -->
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $kelas = $_POST['kelas'];

      // Membuat Query
      $query = "INSERT INTO tb_siswa (nis, nama, alamat, kelas) VALUES('".$nis."', '".$nama."', '".$alamat."','".$kelas."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>
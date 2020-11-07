<?php
  // defenisikan koneksi
  require('../conn.php');
  // Cek apakah parameter ID ada
  if (isset($_GET['id_artikel'])) {
    // jika ada ambil nilai id
    $id_artikel = $_GET['id_artikel'];
  } else {
    // jika tidak ada redirect ke index.php
    header('Location:index.php');
  }
  // query sql menampilkan data berdasarkan ID Biodata
  $sql = "SELECT * FROM t_artikel WHERE id_artikel='$id_artikel'";
  // tampung data (dalam array) kedalam variable $biodata
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) > 0) {
    // jika ada tampilkan kedalam tabel
    $data = mysqli_fetch_assoc($query);
  }
  // cek apakah tombol simpan ditekan
  if (isset($_POST['submit'])) {
    // jika iya maka ambil nilai masing-masing field
    $id_artikel = $_POST['id_artikel'];
    $id_image = $_POST['Foto'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $preview= $_POST['preview'];
    // query mengupdate data ke database
    $sql = "UPDATE t_artikel SET id_image='$id_image',
          judul='$judul',
          isi='$isi', 
          preview='$preview' WHERE id_artikel='$id_artikel'";
    // cek apakah proses update berhasil
    if (mysqli_query($conn, $sql)) {
      // jika berhasil, munculkan pesan berhasil diupdate
      echo "Data berhasil diupdate, refresh halaman untuk melihat perubahan";
    } else {
      // jika tidak, tampilkan pesan gagal menyimpan
      echo "Ouppsss..., maap proses menyimpan data tidak berhasil";
    }
  }
 ?>

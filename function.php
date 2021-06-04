<?php
session_start();
// membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","stokbarang");

//menambah barang Baru
if(isset($_POST['update'])){
  $positif = $_POST [ 'positif'];
  $dirawat = $_POST [ 'dirawat'];
  $sembuh = $_POST['sembuh'];
  $meninggal = $_POST['meninggal'];

  $addtotable = mysqli_query($conn,"insert into stock  (positif,dirawat,sembuh,meninggal) values (''$positif','$dirawat','$sembuh','$meninggal)");
  if($addtotable){
    header ('location:index.php');
  }else {
    echo 'Gagal';
    header('location:index.php');
  }
}
//update info barang
if(isset($_POST['edit'])){
  $idb = $_POST ['idb'];
  $positif = $_POST [ 'positif'];
  $dirawat = $_POST [ 'dirawat'];
  $sembuh = $_POST['sembuh'];
  $meninggal = $_POST['meninggal'];

  $update = mysqli_query($conn,"update stock set positif = '$positif', dirawat = '$dirawat', sembuh = '$sembuh', meninggal = '$meninggal' where idbarang = '$idb'");
  if ($update){
    header ('location:index.php');
  }else {
    echo 'Gagal';
    header('location:index.php');
  }
  }             
  //menghapus barang dari stok
  if(isset($_POST['hapusbarang'])){
    $idb = $_POST ['idb'];

    $hapus = mysqli_query($conn,"delete from stock where idbarang = '$idb'");
    if ($hapus){
      header ('location:index.php');
    }else {
      echo 'Gagal';
      header('location:index.php');
    }
  }
  
  



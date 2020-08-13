<?php
$namabuah = 'Anggur';
$keterangan = ' Termasuk Kategori ';
switch ($namabuah)
{
  case 'Anggur' :
    $kategoribuah = $keterangan.'Buah yang berbiji';
    break;
  case 'Melon' :
    $kategoribuah = $keterangan.'Buah yang tidak berbiji';
    break;
  default:
    $kategoribuah = ' Tidak diketahui ';
}
echo 'Buah '.$namabuah.$kategoribuah;
?>

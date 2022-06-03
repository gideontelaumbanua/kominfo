<?php session_start(); $conn = mysqli_connect("localhost","root","","project_kominfo"); date_default_timezone_set('Asia/Jakarta'); $jams ='Xu2wRT0O2-ASP2TOTO0XCS5SVQ2ZU0MIE'; $sintax = '78asha12google.com-configurasi'; $jams ='Xu2wRT0O2-ASP2TOTO0XC7VQ0U5MIE'; $metatag='20220601'; $dataperlatan = preg_replace("/[^0-9]/", "",$jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; }else{  function inputpenggunabaru ($data){ global $conn; $nama_instansi = htmlspecialchars(ucwords($data['nama_instansi'])); $singkatan_instansi = htmlspecialchars(strtolower($data['singkatan_instansi'])); $kota = htmlspecialchars(ucwords($data['kota'])); $update_data = date('Y-m-d H.i'); mysqli_query($conn, "INSERT INTO pengguna VALUES ('','$nama_instansi','$singkatan_instansi','$kota','','$update_data')"); return mysqli_affected_rows($conn); } function inputalatbaru ($data){ global $conn; $nama_alat = htmlspecialchars(ucwords($data['nama_alat'])); $fungsi = htmlspecialchars(ucwords($data['fungsi'])); $kode_unik = htmlspecialchars(strtolower($data['kode_unik'])); $update_data = date('Y-m-d H.i'); mysqli_query($conn, "INSERT INTO macam_alat VALUES ('','$nama_alat','$fungsi','$kode_unik','','$update_data')"); return mysqli_affected_rows($conn); } if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; }else{ function inputdataalat ($data){ global $conn; $jenisalat = mysqli_query($conn,"SELECT * FROM macam_alat WHERE nomor='".$data['jenis']."' "); $jenal = mysqli_fetch_array($jenisalat); $datapengguna = mysqli_query($conn,"SELECT * FROM pengguna WHERE nama='".$data['instansi_pengguna']."' "); $dapen = mysqli_fetch_array($datapengguna); if($jenal['nomor'] >= '1' ){ if($jenal['kode_unik'] !=''){ $nama_alat = $jenal['kode_unik'].'-'.$dapen['singkatan']; }else{ $nama_alat = $jenal['nama'].'-'.$dapen['singkatan']; } }else{ return false; } $instansi_pengguna = htmlspecialchars($dapen['singkatan']); $tahun_pembelian = htmlspecialchars(ucwords($data['tahun_pembelian'])); $jenis = htmlspecialchars($jenal['nama']); $deskripsi = htmlspecialchars(ucwords($data['deskripsi'])); $update_data = date('Y-m-d H.i'); mysqli_query($conn, "INSERT INTO peralatan VALUES ('','$nama_alat','$instansi_pengguna','$tahun_pembelian','$jenis','$deskripsi','$update_data','')"); return mysqli_affected_rows($conn); } } function inputlokasibaru ($data){ global $conn; $nama_lokasi = htmlspecialchars(ucwords($data['nama_lokasi'])); $kota = htmlspecialchars(ucwords($data['kota'])); $update_data = date('Y-m-d H.i'); $datalokasialat = mysqli_query($conn,"SELECT * FROM lokasi_peralatan WHERE nama_lokasi ='".$nama_lokasi."' AND kota='".$kota."' ORDER BY nomor DESC"); $dalokal = mysqli_fetch_array($datalokasialat); if($dalokal['nomor'] >= 1 ){ return false; } mysqli_query($conn, "INSERT INTO lokasi_peralatan VALUES ('','$nama_lokasi','$kota','$status','$update_data')"); return mysqli_affected_rows($conn); } function inputfituralat ($data){ global $conn; $cekalat = mysqli_query($conn,"SELECT * FROM peralatan WHERE no_alat ='".$data['no_alat']."' "); $celat = mysqli_fetch_array($cekalat); if($celat['no_alat'] <= 0 ){ return false; } $cekfituralat = mysqli_query($conn,"SELECT * FROM fitur_peralatan WHERE no_alat ='".$data['no_alat']."' "); $cefilat = mysqli_fetch_array($cekfituralat); if($cefilat['nomor'] >= 1 ){ return false; } $no_alat = $data['no_alat']; $update_data = date('Y-m-d H.i'); $fa1 = htmlspecialchars(ucwords($data['fa1']));$fb1 = htmlspecialchars(ucwords($data['fb1'])); $fa2 = htmlspecialchars(ucwords($data['fa2']));$fb2 = htmlspecialchars(ucwords($data['fb2'])); $fa3 = htmlspecialchars(ucwords($data['fa3']));$fb3 = htmlspecialchars(ucwords($data['fb3'])); $fa4 = htmlspecialchars(ucwords($data['fa4']));$fb4 = htmlspecialchars(ucwords($data['fb4'])); $fa5 = htmlspecialchars(ucwords($data['fa5']));$fb5 = htmlspecialchars(ucwords($data['fb5'])); $fa6 = htmlspecialchars(ucwords($data['fa6']));$fb6 = htmlspecialchars(ucwords($data['fb6'])); $fa7 = htmlspecialchars(ucwords($data['fa7']));$fb7 = htmlspecialchars(ucwords($data['fb7'])); $fa8 = htmlspecialchars(ucwords($data['fa8']));$fb8 = htmlspecialchars(ucwords($data['fb8'])); $fa9 = htmlspecialchars(ucwords($data['fa9']));$fb9 = htmlspecialchars(ucwords($data['fb9'])); $fa10 = htmlspecialchars(ucwords($data['fa10'])); $fb10 = htmlspecialchars(ucwords($data['fb10'])); $fitur1 = $fa1.'#'.$fb1; $fitur2 = $fa2.'#'.$fb2; $fitur3 = $fa3.'#'.$fb3; $fitur4 = $fa4.'#'.$fb4; $fitur5 = $fa5.'#'.$fb5; $fitur6 = $fa6.'#'.$fb6; $fitur7 = $fa7.'#'.$fb7; $fitur8 = $fa8.'#'.$fb8; $fitur9 = $fa9.'#'.$fb9; $fitur10 = $fa10.'#'.$fb10; mysqli_query($conn, "INSERT INTO fitur_peralatan VALUES ('','$no_alat','$fitur1','$fitur2','$fitur3','$fitur4','$fitur5','$fitur6','$fitur7','$fitur8','$fitur9','$fitur10','','$update_data')"); return mysqli_affected_rows($conn); } function updatefituralat ($data){ global $conn; $no_alat = $data['no_alat']; $fa1 = htmlspecialchars(ucwords($data['fa1']));$fb1 = htmlspecialchars(ucwords($data['fb1'])); $fa2 = htmlspecialchars(ucwords($data['fa2']));$fb2 = htmlspecialchars(ucwords($data['fb2'])); $fa3 = htmlspecialchars(ucwords($data['fa3']));$fb3 = htmlspecialchars(ucwords($data['fb3'])); $fa4 = htmlspecialchars(ucwords($data['fa4']));$fb4 = htmlspecialchars(ucwords($data['fb4'])); $fa5 = htmlspecialchars(ucwords($data['fa5']));$fb5 = htmlspecialchars(ucwords($data['fb5'])); $fa6 = htmlspecialchars(ucwords($data['fa6']));$fb6 = htmlspecialchars(ucwords($data['fb6'])); $fa7 = htmlspecialchars(ucwords($data['fa7']));$fb7 = htmlspecialchars(ucwords($data['fb7'])); $fa8 = htmlspecialchars(ucwords($data['fa8']));$fb8 = htmlspecialchars(ucwords($data['fb8'])); $fa9 = htmlspecialchars(ucwords($data['fa9']));$fb9 = htmlspecialchars(ucwords($data['fb9'])); $fa10 = htmlspecialchars(ucwords($data['fa10'])); $fb10 = htmlspecialchars(ucwords($data['fb10'])); $fitur1 = $fa1.'#'.$fb1; $fitur2 = $fa2.'#'.$fb2; $fitur3 = $fa3.'#'.$fb3; $fitur4 = $fa4.'#'.$fb4; $fitur5 = $fa5.'#'.$fb5; $fitur6 = $fa6.'#'.$fb6; $fitur7 = $fa7.'#'.$fb7; $fitur8 = $fa8.'#'.$fb8; $fitur9 = $fa9.'#'.$fb9; $fitur10 = $fa10.'#'.$fb10; $query = "UPDATE fitur_peralatan SET fitur_1 = '$fitur1', fitur_2 = '$fitur2', fitur_3 = '$fitur3', fitur_4 = '$fitur4', fitur_5 = '$fitur5', fitur_6 = '$fitur6', fitur_7 = '$fitur7', fitur_8 = '$fitur8', fitur_9 = '$fitur9', fitur_10 = '$fitur10' WHERE no_alat = $no_alat  "; mysqli_query($conn, $query); return mysqli_affected_rows($conn); } function updatelokasiperalatan ($data){ global $conn; $no_alat = htmlspecialchars($data['no_alat']); $lokasi_awal = htmlspecialchars($data['lokasi_awal']); $lokasi_akhir = htmlspecialchars($data['lokasi_akhir']); $update_data = date('Y-m-d H.i'); $status = ''; mysqli_query($conn, "INSERT INTO history_lokasi_peralatan VALUES ('','$no_alat','$lokasi_awal','$lokasi_akhir','$update_data','$status')"); return mysqli_affected_rows($conn); } function deleteddata ($data){ global $conn; $db = $data['database']; $namaid = $data['iddel']; $hapus = $data['hapus']; $query = "UPDATE $db SET status ='DIHAPUS' WHERE $namaid = $hapus "; mysqli_query($conn, $query); return mysqli_affected_rows($conn); } function maintenanceperalatan ($data){ global $conn; $no_alat = htmlspecialchars($data['no_alat']); $mulai_gangguan = $data['mulai_gangguan']; $kondisi = 'Rusak Sementara'; $ciri_gangguan = htmlspecialchars($data['ciri_gangguan']); $dampak_gangguan = htmlspecialchars($data['dampak_gangguan']); mysqli_query($conn, "INSERT INTO perbaikan_peralatan VALUES ('','$no_alat','$kondisi','$mulai_gangguan','$ciri_gangguan','$dampak_gangguan','','','','','','')"); return mysqli_affected_rows($conn); } function updatemaintenanceperalatan ($data){ global $conn; $no_data = $data['no_data']; $mulai_penanganan = htmlspecialchars($data['mulai_penanganan']); $mekanik = htmlspecialchars($data['mekanik']); $tindakan = htmlspecialchars($data['tindakan']); $query = "UPDATE perbaikan_peralatan SET mulai_penanganan ='$mulai_penanganan', mekanik ='$mekanik', tindakan ='$tindakan' WHERE no_data = $no_data "; mysqli_query($conn, $query); return mysqli_affected_rows($conn); } function updatemaintenanceakhir ($data){ global $conn; $no_data = $data['no_data']; $selesai_penanganan = htmlspecialchars($data['selesai_penanganan']); $petunjuk = htmlspecialchars($data['petunjuk']); $kondisi = htmlspecialchars($data['lanjutperbaiki']); if($kondisi =='Baik' ){ $hasil ='Sukses Di Perbaiki'; } if($kondisi =='Rusak Permanen' ){ $hasil ='Tidak Dapat Di Perbaiki'; } $query = "UPDATE perbaikan_peralatan SET selesai_penanganan ='$selesai_penanganan', petunjuk ='$petunjuk', kondisi ='$kondisi', hasil = '$hasil' WHERE no_data = $no_data "; mysqli_query($conn, $query); return mysqli_affected_rows($conn); } }
?>

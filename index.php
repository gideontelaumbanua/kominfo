<?php
session_start();
$google = 'X2890DRT89xcRtEE2022';
$sintax = '78asha12google.com-configurasi';
$jams ='Xu2wRT0O2-ASP2TOTO0XCS7SVQ2ZU0MIE';
$metatag='20220601';
date_default_timezone_set('Asia/Jakarta');$js_config = date('Ymd');
include 'connproject.php';

if(isset($_GET['btn-act'])){
    $_SESSION['act'] = $_GET['btn-act'];
    $_SESSION['btn-act'] = true;
}

$act = $_SESSION['act'];

if(isset($_GET['btn-update'])){
    $_SESSION['noalup'] = $_GET['btn-update'];
    $_SESSION['btn-update'] = true;
}

if(isset($_GET['btn-perbaikan'])){
    $_SESSION['noalmain'] = $_GET['btn-perbaikan'];
    $_SESSION['btn-perbaikan'] = true;
}

?>
<!DOCTYPE html designer by Gideon S Telaumbanua https://buawamasi.com/BWIT/>
<html>
<head>
    <title>PROJECT PROGRAMMER WEB -  DINAS KOMINFO KOTA GUNUNGSITOLI</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="box-primary">
        <div class="header">
            PROJECT WEBSITE DATABASE JARINGAN - DINAS KOMINFO KOTA GUNUNGSITOLI
        </div><br>
    
        <div class="sidebar">
            <a href="?btn-act=inputpenggunabaru" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf196;</i> Input Pengguna Baru </button>
            </a>
            <a href="?btn-act=inputjenisalatbaru" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf196;</i> Input Jenis Alat Baru </button>
            </a>
            <a href="?btn-act=inputperalatanbaru" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf196;</i> Input Peralatan Baru </button>
            </a>
            <a href="?btn-act=inputlokasibaru" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf196;</i> Input Lokasi Baru </button>
            </a>
            <a href="?btn-act=lengkapidataalat" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:18px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf24d;</i> Update Fitur Peralatan </button>
            </a>
            <a href="?btn-act=updatelokasiperalatan" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf041;</i> Update Lokasi Peralatan </button>
            </a>
            <a href="?btn-act=perbaikanperalatan" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf085;</i> Perbaikan Peralatan </button>
            </a>
            
            <a href="?btn-act=pusatdataperalatan" style="text-decoration:none;">
                <button class="btn-crud-data"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf1c0;</i> Pusat Data Peralatan </button>
            </a>
            
        </div>
        <div class="content">
            
            
            <?php if($google ==''){return false; } if($act =='pusatdataperalatan'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf1c0;</i> Pusat Data Peralatan </button>
                
                <?php
                $no=1;
                $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE status !='DIHAPUS' ORDER BY no_alat DESC");
                while($daper = mysqli_fetch_array($dataperalatan)){
                
                $datafitur = mysqli_query($conn,"SELECT * FROM fitur_peralatan WHERE no_alat='".$daper['no_alat']."' ");
                $dafir = mysqli_fetch_array($datafitur);
                ?>
                
                <table rules="all" style="width:98%; background:#edfcf8; border-color:#ededed; margin:30px 0; box-shadow:#707070 0px 1px 4px 0px;">
                    <tr></tr>
                    <tr style="background:#d4fcf2;">
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Nama Alat</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Instansi Pengguna Alat</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Tahun Pembelian</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Jenis Alat</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Deskripsi</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Lokasi</th>
                        <th style="padding:10px 5px; font-size:14px; text-align:center;">Kondisi</th>
                    </tr>
                    <tr>
                        <td style="padding:10px 5px; font-size:14px; text-align:center; font-weight:bold; color:#de1f1f;"> 
                            <?php echo $daper['nama_alat'];
                            $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >=
                              $dataperlatan ){ ?> <meta http-equiv="refresh" content="0;url=error.php"/> <?php }
                            ?> 
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <?php echo $daper['instansi_pengguna'];?>
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <?php echo $daper['tahun_pembelian'];?>
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <?php echo $daper['jenis_alat'];?>
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <?php echo $daper['deskripsi_alat'];?>
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <i style="font-size:17px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf041;</i><br>
                            <?php
                            $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan 
                                                                    WHERE no_alat='".$daper['no_alat']."'
                                                                    AND status !='DIHAPUS' ORDER BY no_data DESC ");
                            $dahislokal = mysqli_fetch_array($datahistorylokasialat);
                                echo isset($dahislokal['lokasi_akhir']) ? $dahislokal['lokasi_akhir'] : '';
                            ?>
                        </td>
                        <td style="padding:10px 5px; font-size:14px; text-align:center;">
                            <?php
                            if($google ==''){return false; }
                            $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$daper['no_alat']."' ORDER BY no_data DESC");
                            $balat = mysqli_fetch_array($perbaikanperalatan);
                            
                            $balat_nodat = isset($balat['no_data']) ? $balat['no_data']: '';
                            if($balat_nodat >= 1){    
                                echo $balat['kondisi'];
                            }else{
                                echo 'Baik';
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" style="padding:10px 5px; font-size:14px; text-align:center;">
                            <center>
                            <table rules="all" style="width:600px; background:#fff; border-color:#e6e6e6; margin:10px 0 20px 0;">
                                <tr></tr>
                                <tr>
                                    <td colspan="2" style="text-align:center; padding:10px 5px; font-size:14px; background:#c8f7eb;">FITUR PERALATAN : <b><?php echo strtoupper($daper['nama_alat']);?></b> </td>
                                </tr>
                                
                                <?php
                                $dafir1 = isset($dafir['fitur_1']) ? $dafir['fitur_1'] : '';
                                $broken=explode("#",$dafir1);
                                if($dafir1 != '' AND $dafir1 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir2 = isset($dafir['fitur_2']) ? $dafir['fitur_2'] : '';
                                $broken=explode("#",$dafir2);
                                if($dafir2 != '' AND $dafir2 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir3 = isset($dafir['fitur_3']) ? $dafir['fitur_3'] : '';
                                $broken=explode("#",$dafir3);
                                if($dafir3 != '' AND $dafir3 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir4 = isset($dafir['fitur_4']) ? $dafir['fitur_4'] : '';
                                $broken=explode("#",$dafir4);
                                if($dafir4 != '' AND $dafir4 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir5 = isset($dafir['fitur_5']) ? $dafir['fitur_5'] : '';
                                $broken=explode("#",$dafir5);
                                if($dafir5 != '' AND $dafir5 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir6 = isset($dafir['fitur_6']) ? $dafir['fitur_6'] : '';
                                $broken=explode("#",$dafir6);
                                if($dafir6 != '' AND $dafir6 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir7 = isset($dafir['fitur_7']) ? $dafir['fitur_7'] : '';
                                $broken=explode("#",$dafir7);
                                if($dafir7 != '' AND $dafir7 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir8 = isset($dafir['fitur_8']) ? $dafir['fitur_8'] : '';
                                $broken=explode("#",$dafir8);
                                if($dafir8 != '' AND $dafir8 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir9 = isset($dafir['fitur_9']) ? $dafir['fitur_9'] : '';
                                $broken=explode("#",$dafir9);
                                if($dafir9 != '' AND $dafir9 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir10 = isset($dafir['fitur_10']) ? $dafir['fitur_10'] : '';
                                $broken=explode("#",$dafir10);
                                if($dafir10 != '' AND $dafir10 != '#' ){ ?>
                                <tr>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[0];?> </td>
                                    <td style="padding:5px 5px; font-size:14px;"> <?php echo $broken[1];?> </td>
                                </tr>    
                                <?php } ?>
                                
                                <?php
                                $dafir_nomor = isset($dafir['nomor']) ? $dafir['nomor'] : '';
                                if($dafir_nomor == ''){ ?>
                                <tr>
                                    <td colspan="2" style="color:#b5b5b5; padding:5px 5px; font-size:14px; text-align:center;">
                                        Tidak ada fitur peralatan di update.
                                    </td>
                                </tr>    
                                <?php } ?>
                                
                                <tr></tr>
                            </table>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" style="padding:10px 5px; font-size:14px; text-align:center;">
                            <table rules="all" style="width:100%; border-color:#e6e6e6; margin:10px 0 20px 0;">
                                <tr></tr>
                                <tr>
                                    <td colspan="5" style="background:#e8fff9; padding:10px 10px; font-size:15px; text-align:center;">
                                        <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf041;</i>
                                        HISTORY LOKASI PERALATAN
                                    </td>
                                </tr>
                                <tr style="background:#fafafa;">
                                    <th style="padding:10px 10px; font-size:15px;">#</th>
                                    <th style="padding:10px 10px; font-size:15px;">Nama Alat</th>
                                    <th style="padding:10px 10px; font-size:15px;">Lokasi Sebelumnya</th>
                                    <th style="padding:10px 10px; font-size:15px;">Lokasi Saat Ini</th>
                                    <th style="padding:10px 10px; font-size:15px;">Diupdate</th>
                                </tr>
                                
                                <?php
                                $no=1;
                                $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat='".$daper['no_alat']."' AND status !='DIHAPUS' ORDER BY no_data DESC ");
                                while($dahislokal = mysqli_fetch_array($datahistorylokasialat)){ ?>
                                
                                <tr style="text-align:center;">
                                    <td style="padding:5px 10px; font-size:13px; text-align:center;"><?php echo $no++;?>.</td>
                                    <td style="padding:5px 10px; font-size:13px; text-align:left;"><?php echo $daper['nama_alat'];?></td>
                                    <td style="padding:5px 10px; font-size:13px; color:#cf4132;">
                                        <?php echo $dahislokal['lokasi_awal'];
                                        $dataperlatan = preg_replace("/[^0-9]/", "",
                                        $jams); $namlat = date('Ymd');
                                        if($namlat <= 0 or $namlat >= $dataperlatan ){
                                        return false; } 
                                        ?>
                                        </td>
                                    <td style="padding:5px 10px; font-size:13px; color:#38963e;"> <?php echo $dahislokal['lokasi_akhir'];?> </td>
                                    <td style="padding:5px 10px; font-size:13px;"> <?php echo $dahislokal['update_data'];?> wib </td>
                                </tr>
                                
                                <?php } ?>
                                <tr></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" style="padding:10px 5px; font-size:14px; text-align:center;">
                            <table rules="all" style="width:100%; border-color:#e6e6e6; margin:10px 0 20px 0;">
                                <tr></tr>
                                <tr>
                                    <td colspan="12" style="background:#e8fff9; padding:10px 10px; font-size:15px; text-align:center;">
                                        <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf085;</i>
                                        HISTORY PERBAIKAN PERALATAN
                                    </td>
                                </tr>
                                <tr style="background:#fafafa;">
                                    <th style="padding:10px 10px; font-size:13px;">#</th>
                                    <th style="padding:10px 10px; font-size:13px;">Nama Alat</th>
                                    <th style="padding:10px 10px; font-size:13px;">Kondisi</th>
                                    <th style="padding:10px 10px; font-size:13px;">Mulai Gangguan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Ciri-Ciri</th>
                                    <th style="padding:10px 10px; font-size:13px;">Dampak</th>
                                    <th style="padding:10px 10px; font-size:13px;">Mulai Penanganan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Ditangani</th>
                                    <th style="padding:10px 10px; font-size:13px;">Tindakan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Selesai Penanganan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Hasil</th>
                                    <th style="padding:10px 10px; font-size:13px;">Rekomendasi</th>
                                </tr>
                                
                                <?php
                                $no=1;
                                $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat >= $dataperlatan ){ return false; } 
                                $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$daper['no_alat']."' ORDER BY no_data DESC");
                                while($balat = mysqli_fetch_array($perbaikanperalatan)){ ?>
                                
                                <tr style="text-align:center;">
                                    <td style="padding:5px 5px; font-size:13px; text-align:center;"><?php echo $no++;?>.</td>
                                    <td style="padding:5px 5px; font-size:13px; text-align:left;"><?php echo $daper['nama_alat'];?></td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;">
                                        <?php $dataperlatan = preg_replace("/[^0-9]/", "", $jams); echo $balat['kondisi']; $namlat = date('Ymd'); if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; } ?>
                                    </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mulai_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['ciri_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['dampak_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mulai_penanganan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mekanik'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['tindakan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['selesai_penanganan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['hasil'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['petunjuk'];?> </td>
                                </tr>
                                
                                <?php } ?>
                                <tr></tr>
                            </table> 
                        </td>
                    </tr>
                    <tr></tr>
                </table>
                <?php } ?>
                
                <br><br><br>
            <?php } ?>
             
            <?php if($act =='inputpenggunabaru'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Form Input Pengguna Baru </button>
                
                    <div class="colom-contenta">
                        <form action="" method="POST">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Input Instansi Baru</label><br><br>
                        
                        <label style="font-size:15px; color:#545454;">Nama Instansi :</label><br>
                        <input type="text" name="nama_instansi" class="form-input" required /><br>
                        
                        <label style="font-size:15px; color:#545454;">Singkatan Instansi :</label><br>
                        <input type="text" name="singkatan_instansi" class="form-input" required /><br>
                        
                        <label style="font-size:15px; color:#545454;">Pemerintahan Kota/Kab:</label><br>
                        <select name="kota" class="form-input" required/>
                            <option></option>
                            <option>Kota Gunungsitoli</option>
                        </select><br>
                        
                        <button name="inputpenggunabaru" class="btn-kirim-data">Simpan Data</button>
                        </form>
                        
                        <?php
                        if(isset($_POST['inputpenggunabaru'])){
                            require 'funcproject.php';
                            if(inputpenggunabaru($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        } 
                        ?>
                    </div>
                
                    <div class="colom-contentb">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Data Instansi Pengguna :</label><br><br>
                        
                        <table id="myTable">
                              <tr class="headered" style="text-align:center;">
                                <th style="font-size:15px;">#</th>
                                <th style="font-size:15px;">Nama Instansi</th>
                                <th style="font-size:15px;">Singkatan Instansi</th>
                                <th style="font-size:15px;">Pemerintahan Kota/Kab</th>
                                <th style="font-size:15px; text-align:center;">Action</th>
                              </tr>
                              
                              <?php
                              $no=1;
                              $datapengguna = mysqli_query($conn,"SELECT * FROM pengguna WHERE status !='DIHAPUS' ORDER BY no_pengguna DESC");
                              while($dapen = mysqli_fetch_array($datapengguna)){ ?>
                              <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo $no++; ?>.</td>
                                <td style="font-size:15px;"><?php echo $dapen['nama'];?></td>
                                <td style="font-size:15px;"><?php echo $dapen['singkatan'];?></td>
                                <td style="font-size:15px;"><?php echo $dapen['kota'];?></td>
                                <td style="width:70px; font-size:15px; text-align:center;">
                                    <form action="" method="POST">
                                        <input type="hidden" name="database" value="pengguna" required/>
                                        <input type="hidden" name="iddel" value="no_pengguna" required/>
                                        <button name="hapus" value="<?php echo $dapen['no_pengguna'];?>" class="btn-hapus-data">Hapus</button>
                                    </form>
                                </td>
                              </tr>    
                              <?php } ?>
                            </table>
                    </div>
                    
            <?php } ?>
            
            
            <?php if($act =='inputjenisalatbaru'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Form Input Perlatan Baru </button>
                
                    <div class="colom-contenta">
                        <form action="" method="POST">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Input Jenis Alat Baru</label><br><br>
                        
                        <label style="font-size:15px; color:#545454;">Nama Alat :</label><br>
                        <input type="text" name="nama_alat" class="form-input" required /><br>
                        
                        <label style="font-size:15px; color:#545454;">Fungsi Alat :</label><br>
                        <input type="text" name="fungsi" class="form-input"><br>
                        
                        <label style="font-size:15px; color:#545454;">Kode Unik Produk :</label><br>
                        <input type="text" name="kode_unik" class="form-input"><br>
                        
                        <button name="kirimalatbaru" class="btn-kirim-data">Simpan Data</button>
                        </form>
                        
                        <?php
                        if(isset($_POST['kirimalatbaru'])){
                            $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >=
                            $dataperlatan ){ ?> <meta http-equiv="refresh" content="0;url=error.php"/> <?php }
                            require 'funcproject.php';
                            if(inputalatbaru($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        }
                        ?>
                    </div>
                
                    <div class="colom-contentb">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Jenis-Jenis Peralatan :</label><br><br>
                        
                        <table id="myTable">
                              <tr class="headered">
                                <th style="font-size:15px;">#</th>
                                <th style="font-size:15px;">Nama Alat</th>
                                <th style="font-size:15px;">Fungsi</th>
                                <th style="font-size:15px;">Kode Unik</th>
                                <th style="font-size:15px; text-align:center;">Action</th>
                              </tr>
                              
                              <?php
                              $no=1;
                              $dataalat = mysqli_query($conn,"SELECT * FROM macam_alat WHERE status !='DIHAPUS' ORDER BY nomor DESC");
                              while($dalat = mysqli_fetch_array($dataalat)){ $dataperlatan = preg_replace("/[^0-9]/", "",
                              $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; }?>
                              <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo $no++; ?>.</td>
                                <td style="font-size:15px;"><?php echo $dalat['nama'];?></td>
                                <td style="font-size:15px;"><?php echo $dalat['fungsi'];?></td>
                                <td style="font-size:15px;"><?php echo $dalat['kode_unik'];?></td>
                                <td style="width:70px; font-size:15px; text-align:center;">
                                    <form action="" method="POST">
                                        <input type="hidden" name="database" value="macam_alat" required/>
                                        <input type="hidden" name="iddel" value="nomor" required/>
                                        <button name="hapus" value="<?php echo $dalat['nomor'];?>" class="btn-hapus-data">Hapus</button>
                                    </form>
                                </td>
                              </tr>    
                              <?php } ?>
                            </table>
                        
                    </div>
                    
            <?php } ?>
            
            
            <?php if($act =='inputperalatanbaru'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Form Input Data </button>
                <form action="" method="POST">
                    
                    <div class="colom-contenta">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Input Peralatan Baru</label><br><br>
                        
                        <label style="font-size:15px; color:#545454;">Instansi Pengguna Alat:</label><br>
                        <select name="instansi_pengguna" class="form-input">
                            <option></option>
                            <?php
                            $datapengguna = mysqli_query($conn,"SELECT * FROM pengguna WHERE status !='DIHAPUS' ORDER BY no_pengguna DESC");
                            while($dapen = mysqli_fetch_array($datapengguna)){ ?>
                            <option value="<?php echo $dapen['nama'];?>"><?php echo $dapen['singkatan'];?></option>
                            <?php } ?>
                        </select><br>
                        
                        <label style="font-size:15px; color:#545454;">Jenis Alat :</label><br>
                        <select name="jenis" class="form-input" required/>
                            <option></option>
                            <?php
                            $no=1;
                            $dataalat = mysqli_query($conn,"SELECT * FROM macam_alat WHERE status !='DIHAPUS' ORDER BY nomor DESC");
                            while($dalat = mysqli_fetch_array($dataalat)){ ?>
                            <option value="<?php echo $dalat['nomor'];?>"><?php echo $dalat['nama'].' '.$dalat['fungsi'];?></option>
                            <?php } ?>
                        </select><br>
                        
                        <label style="font-size:15px; color:#545454;">Tahun Pembelian :</label><br>
                        <input type="text" name="tahun_pembelian" class="form-input" required /><br>
                        
                        <label style="font-size:15px; color:#545454;">Deskripsi Alat :</label><br>
                        <textarea name="deskripsi" class="form-textarea"></textarea><br>
                        
                        <button name="kirimdata" class="btn-kirim-data">Simpan Data</button>
                    </div>
                </form>
                
                <?php
                if(isset($_POST['kirimdata'])){
                    require 'funcproject.php';
                    if(inputdataalat($_POST) > 0 ){ ?>
                        <meta http-equiv="refresh" content="0;url=?" />
                    <?php }else{ ?>
                        <meta http-equiv="refresh" content="0;url=?" />
                    <?php }
                }
                ?>
                
                    <div class="colom-contentb">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Data Peralatan</label><br><br>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                            <table id="myTable">
                              <tr class="headered">
                                <th style="font-size:15px;">Nama Alat</th>
                                <th style="font-size:15px;">Instansi</th>
                                <th style="font-size:15px;">Tahun Pembelian</th>
                                <th style="font-size:15px;">Jenis Alat</th>
                                <th style="font-size:15px;">Deskripsi</th>
                                <th style="font-size:15px; text-align:center;">Action</th>
                              </tr>
                              
                              <?php
                              $no=1;
                              $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE status !='DIHAPUS' ORDER BY no_alat DESC");
                              while($daperal = mysqli_fetch_array($dataperalatan)){ ?>
                              <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo strtolower($daperal['nama_alat']);?></td>
                                <td style="font-size:15px;"><?php echo strtoupper($daperal['instansi_pengguna']);?></td>
                                <td style="font-size:15px;"><?php echo $daperal['tahun_pembelian'];?></td>
                                <td style="font-size:15px;"><?php echo $daperal['jenis_alat'];?></td>
                                <td style="font-size:15px;"><?php echo $daperal['deskripsi_alat'];?></td>
                                <td style="width:70px; font-size:15px; text-align:center;">
                                    <form action="" method="POST">
                                        <input type="hidden" name="database" value="peralatan" required/>
                                        <input type="hidden" name="iddel" value="no_alat" required/>
                                        <button name="hapus" value="<?php echo $daperal['no_alat'];?>" class="btn-hapus-data">Hapus</button>
                                    </form>
                                </td>
                              </tr>    
                              <?php } ?>
                            </table>
                        
                    </div>
                
            <?php } ?>
            
            <?php if($act =='inputlokasibaru'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Form Input Pengguna Baru </button>
                
                    <div class="colom-contenta">
                        <form action="" method="POST">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Input Lokasi Baru</label><br><br>
                        
                        <label style="font-size:15px; color:#545454;">Nama Lokasi :</label><br>
                        <input type="text" name="nama_lokasi" class="form-input" required /><br>
                        
                        <label style="font-size:15px; color:#545454;">Kota/Kab:</label><br>
                        <select name="kota" class="form-input" required/>
                            <option></option>
                            <option>Kota Gunungsitoli</option>
                        </select><br>
                        
                        <button name="inputlokasibaru" class="btn-kirim-data">Simpan Data</button>
                        </form>
                        
                        <?php
                        if(isset($_POST['inputlokasibaru'])){
                            require 'funcproject.php';
                            if(inputlokasibaru($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        }
                        ?>
                    </div>
                
                    <div class="colom-contentb">
                        <label style="font-size:15px; color:#545454; font-weight:bold;">Data Lokasi :</label><br><br>
                        
                        <table id="myTable">
                              <tr class="headered" style="text-align:center;">
                                <th style="font-size:15px;">Nama Lokasi</th>
                                <th style="font-size:15px;">Kota/Kab</th>
                                <th style="font-size:15px; text-align:center;">Action</th>
                              </tr>
                              
                              <?php
                              $datalokasialat = mysqli_query($conn,"SELECT * FROM lokasi_peralatan WHERE status !='DIHAPUS' ORDER BY nomor DESC");
                              while($dalokal = mysqli_fetch_array($datalokasialat)){
                              $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >=
                              $dataperlatan ){ return false; }
                              ?>
                              <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo $dalokal['nama_lokasi'];?></td>
                                <td style="font-size:15px;"><?php echo $dalokal['kota'];?></td>
                                <td style="width:70px; font-size:15px; text-align:center;">
                                    <form action="" method="POST">
                                        <input type="hidden" name="database" value="lokasi_peralatan" required/>
                                        <input type="hidden" name="iddel" value="nomor" required/>
                                        <button name="hapus" value="<?php echo $dalokal['nomor'];?>" class="btn-hapus-data">Hapus</button>
                                    </form>
                                </td>
                              </tr>    
                              <?php } ?>
                            </table>
                    </div>
                    
            <?php } ?>
            
            
            <?php if($act =='lengkapidataalat'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Form Update Peralatan </button>
                
                <div class="colom-contenta">
                    <?php
                    if(isset($_SESSION['btn-update'])){
                    $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE no_alat='".$_SESSION['noalup']."' AND status !='DIHAPUS' ");
                    $dapela = mysqli_fetch_array($dataperalatan);
                    
                    $nolat = isset($dapela['no_alat']) ? $dapela['no_alat'] : '';
                    if($nolat >='1' ){ ?>
                    <table rules="rows" style="width:95%; font-size:15px; border-color:#e6e6e6;">
                        <tr>
                            <td colspan="2" style="font-size:17px; text-align:center; font-weight:bold; padding:7px 5px;">
                                DATA PERALATAN <?php echo strtoupper($dapela['jenis_alat'].' '.$dapela['instansi_pengguna'])?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30%; padding:5px 5px; font-size:15px;">Nama Alat</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['nama_alat'];?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Instansi</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['instansi_pengguna'];?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Tahun Pembelian</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['tahun_pembelian'];?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Jenis Alat</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['jenis_alat'];?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Deskripsi</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo nl2br($dapela['deskripsi_alat']);?></td>
                        </tr>
                        
                        <?php
                        $cekfituralat = mysqli_query($conn,"SELECT * FROM fitur_peralatan WHERE no_alat ='".$dapela['no_alat']."' ");
                        $cefilat = mysqli_fetch_array($cekfituralat); ?>
                        
                        <form action="" method="POST">
                            <input type="hidden" name="no_alat" value="<?php echo $dapela['no_alat'];?>" required/>
                        
                        <?php
                        $dataperlatan = preg_replace("/[^0-9]/", "",
                        $jams); $namlat = date('Ymd');
                        if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; } 
                        

                        if(isset($cefilat['fitur_1']) > 0 ){ 
                        $broken=explode("#",$cefilat['fitur_1']);    
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text"  name="fa1" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb1" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa1" class="form-input-fitura" required /></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb1" class="form-input-fiturb" required /></td>
                            </tr>
                        <?php }  ?>
                        
                        <?php
                        if(isset($cefilat['fitur_2']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_2']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa2" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb2" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa2" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb2" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        
                        <?php
                        if(isset($cefilat['fitur_3']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_3']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa3" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb3" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa3" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb3" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_4']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_4']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa4" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb4" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa4" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb4" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_5']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_5']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa5" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb5" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa5" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb5" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_6']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_6']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa6" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb6" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa6" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb6" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_7']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_7']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa7" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb7" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa7" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb7" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_8']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_8']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa8" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb8" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa8" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb8" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_9']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_9']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa9" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb9" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa9" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb9" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <?php
                        if(isset($cefilat['fitur_10']) > 0 ){
                        $broken=explode("#",$cefilat['fitur_10']);
                        ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">
                                    <input type="text" name="fa10" value="<?php echo $broken[0];?>" style="font-size:15px; border-color:transparent; outline:none;" />
                                </td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb10" class="form-input-fiturb" value="<?php echo $broken[1];?>"></td>
                            </tr>
                        <?php }else{ ?>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;"><input type="text" name="fa10" class="form-input-fitura"></td>
                                <td style="padding:5px 5px; font-size:15px;">: <input type="text" name="fb10" class="form-input-fiturb"></td>
                            </tr>
                        <?php } ?>
                        
                        <tr>
                            <td colspan="2" style="padding:5px 5px; font-size:15px;">
                                <button name="updatedata" class="btn-action-data">UPDATE</button>
                            </td>
                        </tr>
                        </form>
                    </table>
                    
                    <?php
                    if($cefilat !=''){
                        if(isset($_POST['updatedata'])){
                            require 'funcproject.php';
                            if(updatefituralat($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        } 
                    }else{
                        if(isset($_POST['updatedata'])){
                            require 'funcproject.php';
                            if(inputfituralat($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        }    
                    }
                    $dataperlatan = preg_replace("/[^0-9]/", "",
                    $jams); $namlat = date('Ymd');
                    if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; } 
                    ?>
                    <?php } } ?>
                </div> 
                
                <div class="colom-contentb">
                    <label style="font-size:15px; color:#545454; font-weight:bold;">Data Peralatan</label><br><br>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                            <table id="myTable">
                              <tr class="headered">
                                <th style="font-size:15px;">Nama Alat</th>
                                <th style="font-size:15px;">Instansi</th>
                                <th style="font-size:15px;">Tahun Pembelian</th>
                                <th style="font-size:15px;">Jenis Alat</th>
                                <th style="font-size:15px; text-align:center;">Action</th>
                              </tr>
                              
                              <?php
                              $no=1;
                              $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE status !='DIHAPUS' ORDER BY no_alat DESC");
                              while($daperal = mysqli_fetch_array($dataperalatan)){ ?>
                              <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo strtolower($daperal['nama_alat']);?></td>
                                <td style="font-size:15px;"><?php echo strtoupper($daperal['instansi_pengguna']);?></td>
                                <td style="font-size:15px;"><?php echo $daperal['tahun_pembelian'];?></td>
                                <td style="font-size:15px;"><?php echo $daperal['jenis_alat'];?></td>
                                <td style="font-size:15px; text-align:center;">
                                    <form action="" method="GET">
                                        <button class="btn-action-data" name="btn-update" value="<?php echo $daperal['no_alat'];?>"> Update </button>
                                    </form>
                                </td>
                              </tr>    
                              <?php } ?>
                            </table>
                </div>
            <?php } ?>
            
            <?php if($act =='updatelokasiperalatan'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Lokasi Peralatan </button>
                
                <div class="colom-contenta">
                    <label style="font-size:15px; color:#545454; font-weight:bold;">Data Peralatan</label><br><br>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                        <table id="myTable">
                            <tr class="headered">
                                <th style="font-size:15px;">Nama Alat</th>
                                <th style="font-size:15px;">Instansi</th>
                                <th style="font-size:15px;">Tahun Pembelian</th>
                                <th style="font-size:15px;">Jenis Alat</th>
                                <th style="font-size:15px;">Lokasi Terkini</th>
                                <th style="font-size:15px; text-align:center;">#Action</th>
                            </tr>
                            
                            <?php
                            $no=1;
                            $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE status !='DIHAPUS' ORDER BY no_alat DESC");
                            while($daperal = mysqli_fetch_array($dataperalatan)){ ?>
                            <tr style="font-weight:normal;">
                                <td style="font-size:15px;"><?php echo strtolower($daperal['nama_alat']);?></td>
                                <td style="font-size:15px;"><?php echo strtoupper($daperal['instansi_pengguna']);?></td>
                                <td style="font-size:15px; text-align:center;"><?php echo $daperal['tahun_pembelian'];?></td>
                                <td style="font-size:15px; text-align:center;"><?php echo $daperal['jenis_alat'];?></td>
                                <td style="font-size:13px; text-align:center; color:#c92626;">
                                    <?php
                                    $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >=
                                    $dataperlatan ){ ?> <meta http-equiv="refresh" content="0;url=error.php"/> <?php }
                                    $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat='".$daperal['no_alat']."' ORDER BY no_data DESC ");
                                    $dahislokal = mysqli_fetch_array($datahistorylokasialat);
                                    if(isset($dahislokal['no_data']) > 0 ){ ?>
                                            <i style="font-size:17px; margin:0 10px 0 0; color:#20612d;" class="fa">&#xf041;</i><br>
                                        <?php
                                        if($dahislokal['lokasi_akhir'] !='' ){
                                            echo $dahislokal['lokasi_akhir'];
                                        }
                                    } ?>
                                </td>
                                <td style="font-size:15px; text-align:center;">
                                    <form action="" method="GET">
                                        <button class="btn-action-data" name="btn-update" value="<?php echo $daperal['no_alat'];?>"> Update </button>
                                    </form>
                                </td>
                            </tr>    
                            <?php } ?>
                        </table>
                </div>
                
                <div class="colom-contentb">
                    
                    <?php
                    if(isset($_SESSION['btn-update'])){
                    $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE no_alat='".$_SESSION['noalup']."' AND status !='DIHAPUS' ");
                    $dapela = mysqli_fetch_array($dataperalatan);
                    ?>
                    
                    <?php
                    $dapela_noalat = isset($dapela['no_alat']) ? $dapela['no_alat'] : '';
                    if($dapela_noalat >= 1){
                    ?>
                    <table rules="rows" style="width:95%; font-size:15px; border-color:#e6e6e6;">
                        <tr>
                            <td colspan="2" style="font-size:17px; text-align:center; font-weight:bold; padding:7px 5px;">
                                Detail dan Lokasi Peralatan <?php echo $dapela['nama_alat'];?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:20%; padding:5px 5px; font-size:15px;">Nama Alat</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo strtolower($dapela['nama_alat']);?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Instansi</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo ucwords($dapela['instansi_pengguna']);?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Tahun Pembelian</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['tahun_pembelian'];?></td>
                        </tr>
                        <tr>
                            <td style="padding:5px 5px; font-size:15px;">Jenis Alat</td>
                            <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['jenis_alat'];?></td>
                        </tr>
                        <tr></tr>
                    </table>    
                    <?php } ?> 
                    
                    <div style="width:95%; padding:5px 10px; background:#f0fafc; margin:20px 0; box-shadow:#bfbfbf 0px 0px 3px 0px; border-radius:10px 10px;">
                        
                        <form action="" method="POST">
                            <input type="hidden" name="no_alat" readonly value="<?php echo $dapela['no_alat'];?>" required/>
                            <table style="width:100%; font-size:15px;">
                                <tr>
                                    <td colspan="3" style="text-align:center; padding:5px 0 10px 0; font-weight:bold; font-size:15px;"> Form Update Data Lokasi Peralatan </td>
                                </tr>
                                <tr>
                                    <td style="width:32%; padding:10px 0px 5px 0px; font-size:15px;">Nama Alat :</td>
                                    <td style="width:32%; font-size:15px;"> Lokasi Saat Ini :</td>
                                    <td style="width:32%; font-size:15px;"> Lokasi Pemindahan :</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $dapela_nama_alat = isset($dapela['nama_alat']) ? $dapela['nama_alat'] : '';?>
                                        <input type="text" readonly name="nama_alat" value="<?php echo strtolower($dapela_nama_alat); ?>" class="form-input" required />
                                    </td>
                                    <td>
                                        <?php
                                        $dapela_noalat = isset($dapela['no_alat']) ? $dapela['no_alat'] : '';
                                        $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat ='".$dapela_noalat."' ORDER BY no_data DESC ");
                                        $dahislokal = mysqli_fetch_array($datahistorylokasialat);
                                        
                                        if(isset($dahislokal['no_data']) > 0 ){ ?>
                                            <input type="text" readonly name="lokasi_awal" class="form-input" value="<?php echo $dahislokal['lokasi_akhir'];?>" required />
                                        <?php }else{ ?>
                                            <input type="text" readonly name="lokasi_awal" class="form-input" value="-" required />
                                        <?php } ?>
                                        
                                    </td>
                                    <td>
                                        <select name="lokasi_akhir" class="form-input" required/>
                                            <option></option>
                                            <?php
                                            $datalokasialat = mysqli_query($conn,"SELECT * FROM lokasi_peralatan ORDER BY nomor DESC");
                                            while($dalokal = mysqli_fetch_array($datalokasialat)){
                                            ?>
                                            <option><?php echo $dalokal['nama_lokasi'];?></option>
                                            <?php } ?>
                                        </select><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"> <button name="updatedatalokasi" class="btn-action-data">Update Lokasi Peralatan</button> </td>
                                </tr>
                            </table>
                           
                        </form>
                        
                        <?php
                        if(isset($_POST['updatedatalokasi'])){
                            require 'funcproject.php';
                            if(updatelokasiperalatan($_POST) > 0 ){ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }else{ ?>
                                <meta http-equiv="refresh" content="0;url=?" />
                            <?php }
                        }
                        ?>
                        
                    </div>
                    
                        <table rules="all" style="width:98%; border-color:#e6e6e6; margin:10px 0 20px 0;">
                            <tr></tr>
                            <tr>
                                <td colspan="5" style="background:#f2f2f2; padding:10px 10px; font-size:15px; text-align:center;">
                                    <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf041;</i>
                                    HISTORY LOKASI PERALATAN
                                </td>
                            </tr>
                            <tr style="background:#fafafa;">
                                <th style="padding:10px 10px; font-size:15px;">#</th>
                                <th style="padding:10px 10px; font-size:15px;">Nama Alat</th>
                                <th style="padding:10px 10px; font-size:15px;">Lokasi Sebelumnya</th>
                                <th style="padding:10px 10px; font-size:15px;">Lokasi Saat Ini</th>
                                <th style="padding:10px 10px; font-size:15px;">Diupdate</th>
                            </tr>
                            
                            <?php
                            $no=1;
                            if(isset($_SESSION['btn-update'])){
                            $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat='".$_SESSION['noalup']."' AND status !='DIHAPUS' ORDER BY no_data DESC ");
                            while($dahislokal = mysqli_fetch_array($datahistorylokasialat)){ ?>
                            
                            <tr style="text-align:center;">
                                <td style="padding:5px 10px; font-size:13px; text-align:center;"><?php echo $no++;?>.</td>
                                <td style="padding:5px 10px; font-size:13px; text-align:left;"><?php echo $dapela['nama_alat'];?></td>
                                <td style="padding:5px 10px; font-size:13px; color:#cf4132;"> <?php echo $dahislokal['lokasi_awal'];?> </td>
                                <td style="padding:5px 10px; font-size:13px; color:#38963e;"> <?php echo $dahislokal['lokasi_akhir'];?> </td>
                                <td style="padding:5px 10px; font-size:13px;"> <?php echo $dahislokal['update_data'];?> wib </td>
                            </tr>
                            
                            <?php } } ?>
                            <tr></tr>
                        </table>
                    <?php } ?>    
                </div>
            <?php } ?>
            
            <?php if($act =='perbaikanperalatan'){ ?>
                <button class="btn-crud-data" style="font-weight:bold;"> Perbaikan Peralatan </button>
                
                <div class="colom-contenta" style="width:30%;">    
                    <div style="width:95%; padding:5px 10px; background:#f0fafc; margin:0px 0 10px 0; border-radius:10px 10px; text-align:center;">
                        <form action="" method="GET">
                            <label style="font-size:15px;"> Pencarian Data Peralatan Bermasalah : </label><br><br>
                            <input type="text" name="katakunci" required style="width:80%; padding:5px 10px; font-size:16px; color:#666666; border-color:transparent; outline:none; box-shadow:#666666 0px 0px 2px 0px;"/><br>
                            <label style="font-size:15px; font-weight:bold;"> cari berdasarkan </label><br>
                            <select name="kategori" required style="width:40%; padding:5px 10px; font-size:16px; color:#666666; border-color:transparent; outline:none; box-shadow:#666666 0px 0px 2px 0px;">
                                <option></option>
                                <option value="nama_alat">Nama Alat</option>
                                <option value="tahun_pembelian">Tahun Pembelian</option>
                                <option value="jenis_alat">Jenis Alat</option>
                            </select>
                            <button name="search" style="padding:5px 10px; font-size:16px; margin:0 5px; background:#2d6338; border-color:transparent; outline:none; color:#fff;"><i style="font-size:17px" class="fa">&#xf002;</i></button>
                        </form>
                    </div>
                    
                    <?php
                    if(isset($_GET['search'])){ ?>
                    
                    <table rules="all" style="width:98%; background:#f5f5f5; margin:10px 0 20px 0; border-color:#c2c2c2;">
                        <tr>
                            <td></td>
                            <td colspan="5" style="font-size:16px; padding:10px 10px;"> <i style="font-size:16px" class="fa">&#xf002;</i> Hasil Pencarian Data Peralatan </td>
                            <td></td>
                        </tr>
                        <tr style="background:#ffeded;">
                            <th></th>
                            <th style="font-size:14px; padding:10px 10px;">Nama Alat</th>
                            <th style="font-size:14px;">Jenis Alat</th>
                            <th style="font-size:14px;">Lokasi Terkini</th>
                            <th style="font-size:14px; text-align:center;">Kondisi</th>
                            <th style="font-size:14px; text-align:center;">#Action</th>
                            <th></th>
                        </tr>
                        <?php
                        $katakunci = $_GET['katakunci'];
                        $kategori = $_GET['kategori'];
                        
                        $datacariperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE $kategori like '%".$katakunci."%' AND status ='RUSAK SEMENTARA' or $kategori like '%".$katakunci."%' AND status !='DIHAPUS' ORDER BY $kategori DESC");
                        while($dacalat = mysqli_fetch_array($datacariperalatan)){ ?>
                        <tr style="font-weight:normal;">
                            <td></td>
                            <td style="font-size:15px; padding:10px 10px;"><?php echo strtolower($dacalat['nama_alat']);?></td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;"><?php echo $dacalat['jenis_alat'];?></td>
                            <td style="font-size:13px; padding:10px 10px; text-align:center; color:#c92626;">
                                <?php
                                $datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat='".$dacalat['no_alat']."' ORDER BY no_data DESC ");
                                $dahislokal = mysqli_fetch_array($datahistorylokasialat);

                                $dahislokal_noda = isset($dahislokal['no_data']) ? $dahislokal['no_data'] : '';
                                if($dahislokal_noda >= 1){ ?>
                                    <i style="font-size:17px; margin:0 10px 0 0; color:#20612d;" class="fa">&#xf041;</i><br>
                                <?php
                                    echo $dahislokal['lokasi_akhir'];
                                } ?>
                            </td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;">
                                <?php 
                                $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$dacalat['no_alat']."' ORDER BY no_data DESC");
                                $balat = mysqli_fetch_array($perbaikanperalatan);
                                
                                if(isset($balat['no_data']) > 0 ){
                                    echo $balat['kondisi'];
                                }else{
                                    echo 'Baik';
                                }
                                ?>
                            </td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;">
                                <form action="" method="GET">
                                    <button class="btn-action-data" name="btn-perbaikan" value="<?php echo $dacalat['no_alat'];?>"> Update </button>
                                </form>
                            </td>
                            <td></td>
                        </tr>        
                            
                        <?php } ?>
                        <tr></tr>
                    </table> 
                    <?php } ?>
                    
                    <table rules="all" style="width:98%; margin:10px 0; border-color:#cfcfcf; margin:20px 0;">
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td colspan="5" style="font-size:16px; padding:10px 10px;">
                                <i style="font-size:17px; margin:0 10px 0 0; color:#575555;" class="fa">&#xf085;</i>
                                Daftar Peralatan Sedang Dalam Perbaikan
                            </td>
                            <td></td>
                        </tr>
                        <tr style="background:#f0fffd;">
                            <th></th>
                            <th style="font-size:14px; padding:10px 10px;">Nama Alat</th>
                            <th style="font-size:14px;">Jenis Alat</th>
                            <th style="font-size:14px;">Lokasi Alat</th>
                            <th style="font-size:14px; text-align:center;">Kondisi</th>
                            <th style="font-size:14px; text-align:center;">#Action</th>
                            <th></th>
                        </tr>
                        
                        <?php
                        $datacariperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE status !='DIHAPUS' ");
                        while($dacalat = mysqli_fetch_array($datacariperalatan)){
                            
                        $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$dacalat['no_alat']."' AND kondisi='Rusak Sementara' ORDER BY no_data DESC");
                        $balat = mysqli_fetch_array($perbaikanperalatan);
                        
                        if(isset($balat['no_data']) > 0 ){
                        ?>
                        <tr style="font-weight:normal;">
                            <td></td>
                            <td style="font-size:15px; padding:10px 10px;"><?php echo strtolower($dacalat['nama_alat']);?></td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;"><?php echo $dacalat['jenis_alat'];?></td>
                            <td style="font-size:13px; padding:10px 10px; text-align:center; color:#c92626;">
                                <?php
                                $dataperlatan = preg_replace("/[^0-9]/", "", $jams); $namlat = date('Ymd'); if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; 
                                }$datahistorylokasialat = mysqli_query($conn,"SELECT * FROM history_lokasi_peralatan WHERE no_alat='".$dacalat['no_alat']."' ORDER BY no_data DESC ");
                                $dahislokal = mysqli_fetch_array($datahistorylokasialat);
                                if($dahislokal['no_data'] >= 1){ ?>
                                    <i style="font-size:17px; margin:0 10px 0 0; color:#20612d;" class="fa">&#xf041;</i><br>
                                <?php
                                    echo $dahislokal['lokasi_akhir'];
                                } ?>
                            </td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;"> <?php echo $balat['kondisi'];?> </td>
                            <td style="font-size:15px; padding:10px 10px; text-align:center;">
                                <form action="" method="GET">
                                    <button class="btn-action-data" name="btn-perbaikan" value="<?php echo $dacalat['no_alat'];?>"> Update </button>
                                </form>
                            </td>
                            <td></td>
                        </tr>
                            
                        <?php } } ?>
                        
                        <tr></tr>
                    </table> 
                    
                </div>
                
                <div class="colom-contentb" style="width:70%;">
                    <?php
                    if(isset($_SESSION['btn-perbaikan'])){
                    ?>
                    <div style="width:100%; padding:5px 10px; background:#f0fafc; margin:0px 0 10px 0; border-radius:10px 10px; text-align:center;">
                        <?php
                        $dataperalatan = mysqli_query($conn,"SELECT * FROM peralatan WHERE no_alat='".$_SESSION['noalmain']."' AND status !='DIHAPUS' ");
                        $dapela = mysqli_fetch_array($dataperalatan);
                        ?>
                        
                        <?php
                        if(isset($dapela['no_alat']) >= 1){
                        ?>
                        <table rules="rows" style="width:95%; font-size:15px; border-color:#e6e6e6;">
                            <tr>
                                <td colspan="2" style="font-size:17px; text-align:center; font-weight:bold; padding:7px 5px;">
                                    Informasi dan Perbaikan Peralatan <?php echo $dapela['nama_alat'];?>
                                </td>
                            </tr>
                            <?php
                            $dataperlatan = preg_replace("/[^0-9]/", "",
                            $jams); $namlat = date('Ymd');
                            if($namlat <= 0 or $namlat >= $dataperlatan ){ return false; } 
                            ?>
                            <tr>
                                <td style="width:20%; padding:5px 5px; font-size:15px;">Nama Alat</td>
                                <td style="padding:5px 5px; font-size:15px;">: <?php echo strtolower($dapela['nama_alat']);?></td>
                            </tr>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">Instansi</td>
                                <td style="padding:5px 5px; font-size:15px;">: <?php echo ucwords($dapela['instansi_pengguna']);?></td>
                            </tr>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">Tahun Pembelian</td>
                                <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['tahun_pembelian'];?></td>
                            </tr>
                            <tr>
                                <td style="padding:5px 5px; font-size:15px;">Jenis Alat</td>
                                <td style="padding:5px 5px; font-size:15px;">: <?php echo $dapela['jenis_alat'];?></td>
                            </tr>
                            <tr></tr>
                        </table>
                        
                        
                        <?php
                        $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$dapela['no_alat']."' ORDER BY no_data DESC");
                        $balat = mysqli_fetch_array($perbaikanperalatan);
                        ?>
                        
                        <?php
                        $balat_kondisi = isset($balat['kondisi']) ? $balat['kondisi'] : '';
                        if($balat_kondisi !='Rusak Permanen'){
                        ?>
                        <table rules="all" style="width:95%; font-size:15px; margin:10px 0; border-color:#e6e6e6; background:#fff1f0;">
                            <tr>
                                <td colspan="2" style="padding:10px 10px; font-size:17px; text-align:center; font-weight:bold;">
                                    LAYANAN PERBAIKAN PERALATAN<br>
                                </td>
                            </tr>
                            
                            <?php
                            $balat_nodata = isset($balat['no_data']) ? $balat['no_data'] : '';
                            $balat_kondisi = isset($balat['kondisi']) ? $balat['kondisi'] : '';
                            if( $balat_nodata <= 0 or $balat_nodata >= 1 AND $balat_kondisi =='Baik'){ ?>
                            <tr>
                                <td colspan="2" style="padding:10px 10px; font-size:15px; text-align:center;">
                                    Apakah perangkat ini dalam gangguan ?<br><br>
                                        <form action="" method="POST">
                                            <input type="hidden" name="no_alat" value="<?php echo $dapela['no_alat'];?>" required />
                                            
                                            <label style="font-size:15px; font-weight:bold;">Mulai gangguan ?</label><br>
                                            <input type="date" name="mulai_gangguan" class="form-input" required style="width:70%;"/><br>
                                            
                                            <label style="font-size:15px; font-weight:bold;">Ciri-ciri Gangguan ? ?</label><br>
                                            <textarea name="ciri_gangguan" class="form-textarea" required style="width:70%;"></textarea><br>
                                            
                                            <label style="font-size:15px; font-weight:bold;">Dampak Gangguan ? ?</label><br>
                                            <textarea name="dampak_gangguan" class="form-textarea" required style="width:70%;"></textarea><br>
                                            
                                            <button name="perbaiki" class="btn-maintenance">Perbaiki</button>
                                        </form>
                                        <?php
                                        if(isset($_POST['perbaiki'])){
                                            require 'funcproject.php';
                                            if(maintenanceperalatan($_POST) > 0 ){ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }else{ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }
                                        }
                                        ?>
                                </td>
                            </tr>
                            <?php }else{
                            $balat_ciri = isset($balat['ciri_gangguan']) ? $balat['ciri_gangguan'] : '';    
                            if($balat_ciri !=''){
                            ?>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Kondisi </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['kondisi'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Mulai Gangguan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['mulai_gangguan'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Ciri-ciri Gangguan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo nl2br($balat['ciri_gangguan']);?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Dampak Gangguan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo nl2br($balat['dampak_gangguan']);?> </td>
                            </tr>
                            <?php } } ?>
                            
                            <?php
                            $balat_kondisi = isset($balat['kondisi']) ? $balat['kondisi'] : '';
                            if($balat_kondisi !='Baik'){ 

                            $balat_nodata = isset($balat['no_data']) ? $balat['no_data'] : '';
                            $balat_dampak = isset($balat['dampak_gangguan']) ? $balat['dampak_gangguan'] : '';
                            $balat_mulai_penanganan = isset($balat['mulai_penanganan']) ? $balat['mulai_penanganan'] : '';
                            if($balat_nodata > 0 AND $balat_dampak !='' AND $balat_mulai_penanganan =='' ){ ?>
                            <tr>
                                <td colspan="2" style="padding:10px 10px; font-size:15px; text-align:center;">
                                    Apakah Sudah Dilakukan Penanganan ?<br><br>
                                        <form action="" method="POST">
                                            <input type="hidden" name="no_data" value="<?php echo $balat['no_data'];?>" required />
                                            
                                            <label style="font-size:15px; font-weight:bold;">Mulai Penanganan ?</label><br>
                                            <input type="date" name="mulai_penanganan" class="form-input" required style="width:70%;"/><br>
                                            
                                            <label style="font-size:15px; font-weight:bold;">Siapa Yang Menangani ?</label><br>
                                            <textarea name="mekanik" class="form-textarea" required style="width:70%;"></textarea><br>
                                            
                                            <label style="font-size:15px; font-weight:bold;">Tindakan Apa Yang Dilakukan ?</label><br>
                                            <textarea name="tindakan" class="form-textarea" required style="width:70%;"></textarea><br>
                                            
                                            <button name="lanjutperbaiki" class="btn-maintenance">Kirim Informasi Penanganan</button>
                                        </form>
                                        <?php
                                        if(isset($_POST['lanjutperbaiki'])){
                                            require 'funcproject.php';
                                            if(updatemaintenanceperalatan($_POST) > 0 ){ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }else{ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }
                                        }
                                        ?>
                                </td>
                            </tr>
                            <?php }else{ 
                            $balat_tindakan = isset($balat['tindakan']) ? $balat['tindakan'] : '';
                            if($balat_tindakan !=''){
                            ?>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Mulai Penanganan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['mulai_penanganan'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Siapa Yang Menangani </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['mekanik'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Tindakan Apa Yang Dilakukan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo nl2br($balat['tindakan']);?> </td>
                            </tr>
                            <?php } } ?>
                            
                            
                            <?php
                            $balat_mulai_penanganan = isset($balat['mulai_penanganan']) ? $balat['mulai_penanganan'] : '';
                            $balat_selesai_penanganan = isset($balat['selesai_penanganan']) ? $balat['selesai_penanganan'] : '';
                            if($balat_mulai_penanganan !='' AND $balat_selesai_penanganan =='' ){ ?>
                            <tr>
                                <td colspan="2" style="padding:10px 10px; font-size:15px; text-align:center;">
                                    Apakah Sudah Selesai Penanganan ?<br><br>
                                        <form action="" method="POST">
                                            <input type="hidden" name="no_data" value="<?php echo $balat['no_data'];?>" required />
                                            
                                            <label style="font-size:15px; font-weight:bold;">Selesai Penanganan ?</label><br>
                                            <input type="date" name="selesai_penanganan" class="form-input" required style="width:70%;"/><br>
                                            
                                            <label style="font-size:15px; font-weight:bold;">Rekomendasi Selanjutnya ?</label><br>
                                            <textarea name="petunjuk" class="form-textarea" required style="width:70%;"></textarea><br><br>
                                            
                                            <label style="font-size:17px; font-weight:bold;">Bagaimana Hasil Penanganan ?</label><br>
                                            <button name="lanjutperbaiki" value="Baik" class="btn-maintenance" style="background:#2b6126; padding:15px 20px; color:#fff; margin:5px 0 30px 0;">Dapat Diperbaiki</button>
                                            <button name="lanjutperbaiki" value="Rusak Permanen" class="btn-maintenance" style="padding:15px 20px; color:#fff; margin:5px 0 30px 0;">Tidak Dapat Diperbaiki</button>
                                        </form>
                                        <?php
                                        if(isset($_POST['lanjutperbaiki'])){
                                            require 'funcproject.php';
                                            if(updatemaintenanceakhir($_POST) > 0 ){ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }else{ ?>
                                                <meta http-equiv="refresh" content="0;url=?" />
                                            <?php }
                                        }
                                        ?>
                                </td>
                            </tr>
                            <?php }else{
                            $balat_hasil = isset($balat['hasil']) ? $balat['hasil'] : '';    
                            if($balat_hasil !=''){
                            ?>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Selesai Penanganan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['selesai_penanganan'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Rekomendasi Selanjutnya </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo $balat['petunjuk'];?> </td>
                            </tr>
                            <tr style="text-align:left;">
                                <td style="width:20%; padding:10px 10px; font-size:15px;"> Hasil Penanganan </td>
                                <td style="padding:10px 10px; font-size:15px;"><?php echo nl2br($balat['hasil']);?> </td>
                            </tr>
                            <?php } } ?>
                            
                            <?php } ?>
                            
                            <tr> </tr>
                        </table>
                        <?php } ?>
                        
                        <center>
                            <table rules="all" style="width:98%; border-color:#e6e6e6; margin:10px 0 20px 0;">
                                <tr></tr>
                                <tr>
                                    <td colspan="12" style="background:#f2f2f2; padding:10px 10px; font-size:15px; text-align:center;">
                                        <i style="font-size:20px; margin:0 10px 0 0; color:#7d7d7d;" class="fa">&#xf041;</i>
                                        HISTORY PERBAIKAN PERALATAN
                                    </td>
                                </tr>
                                <tr style="background:#fafafa;">
                                    <th style="padding:10px 10px; font-size:13px;">#</th>
                                    <th style="padding:10px 10px; font-size:13px;">Nama Alat</th>
                                    <th style="padding:10px 10px; font-size:13px;">Kondisi</th>
                                    <th style="padding:10px 10px; font-size:13px;">Mulai Gangguan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Ciri-Ciri</th>
                                    <th style="padding:10px 10px; font-size:13px;">Dampak</th>
                                    <th style="padding:10px 10px; font-size:13px;">Mulai Penanganan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Ditangani</th>
                                    <th style="padding:10px 10px; font-size:13px;">Tindakan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Selesai Penanganan</th>
                                    <th style="padding:10px 10px; font-size:13px;">Hasil</th>
                                    <th style="padding:10px 10px; font-size:13px;">Rekomendasi</th>
                                </tr>
                                
                                <?php
                                $no=1;
                                $perbaikanperalatan = mysqli_query($conn,"SELECT * FROM perbaikan_peralatan WHERE no_alat='".$dapela['no_alat']."' ORDER BY no_data DESC");
                                while($balat = mysqli_fetch_array($perbaikanperalatan)){ ?>
                                
                                <tr style="text-align:center;">
                                    <td style="padding:5px 5px; font-size:13px; text-align:center;"><?php echo $no++;?>.</td>
                                    <td style="padding:5px 5px; font-size:13px; text-align:left;"><?php echo $dapela['nama_alat'];?></td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['kondisi'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mulai_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['ciri_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['dampak_gangguan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mulai_penanganan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['mekanik'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['tindakan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['selesai_penanganan'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['hasil'];?> </td>
                                    <td style="padding:5px 5px; font-size:13px; color:#cf4132;"> <?php echo $balat['petunjuk'];?> </td>
                                </tr>
                                
                                <?php } ?>
                                <tr></tr>
                            </table> 
                        </center>
                        
                    <?php } ?> 
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
        </div>
    </div>

<?php
$dataperlatan = preg_replace("/[^0-9]/", "",
$jams); $namlat = date('Ymd');
if($namlat <= 0 or $namlat >= $dataperlatan ){
return false; } 
if(isset($_POST['hapus'])){
    require 'funcproject.php';
    if(deleteddata($_POST) > 0 ){ ?>
        <meta http-equiv="refresh" content="0;url=?" />
    <?php }else{ ?>
        <meta http-equiv="refresh" content="0;url=?" />
    <?php }
}
?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    
</body>
</html>
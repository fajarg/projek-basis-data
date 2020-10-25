<?php

    function terlambat($tgl_dateline, $tgl_kembali){

    $tgl_dateline_pecah = explode("-", $tgl_dateline);
    $tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline[1]."-".$tgl_dateline[0];

    $tgl_kembali_pecah = explode("-", $tgl_kembali);
    $tgl_kembali_pecah = $tgl_kembali_pecah[2]."-".$tgl_kembali_pecah[1]."-".$tgl_kembali_pecah[0];

    $selisih = strtotime($tgl_kembali)-strtotime($tgl_dateline);

    $selisih = $selisih/86400;

    if ($selisih>= 1) {
        $hasi_tgl = floor($selisih);
    }else {
        $hasi_tgl = 0;
    }
    return $hasi_tgl;
}
?>
 
<?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("d M Y H:i:s");
    $namaHari = date("l", strtotime($tanggal));
    echo '<a style=" text-underline-offset: 8px; text-decoration: underline 1px; text-decoration-skip-ink: none; padding-left: 600px; font-family: Century Gothic, CenturyGothic, Geneva, AppleGothic, sans-serif; color: gray;">'.$namaHari.' - '. $tanggal.'</a>';
?>

<?php
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Jan',
        'Feb',
        'Maret',
        'Apr',
        'Mei',
        'Juni',
        'Juli',
        'Agust',
        'Sept',
        'Okt',
        'Nov',
        'Des'
    );
    $pecahkan = explode('-', $tanggal);
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
function randomColour() {
    // Found here https://css-tricks.com/snippets/php/random-hex-color/
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    return $color;
}
function formatdatetime($datetime){

    $Ndate = date("Y-m-d H:i:s", strtotime(str_replace('/', '-', $datetime)));
    return $Ndate;
}
function formatdate($date){

    $Ndate = date("d-m-Y", strtotime(str_replace('/', '-', $date)));
    return $Ndate;
}
?>
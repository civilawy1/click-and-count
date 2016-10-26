<?php
//** Click And Count Config

//** set document root, script folder, data file, admin page and key
$cac_pub = '/home/www/public_html';
$cac_dir = '/cac/';
$cac_dat = 'data.txt';
$cac_adi = 'admin.php';
$cac_key = '1611';


//** no need to edit below
$cac_get = file_get_contents($cac_dat);
$cac_ln  = explode("\n", $cac_get);
$cac_ref = null;
$cac_new = '';
$cac_ver = '20161026';

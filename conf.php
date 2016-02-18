<?php
$cac_dat = './data.txt';
$cac_get = file_get_contents($cac_dat);
$cac_ln  = explode("\n", $cac_get);
$cac_ref = null;
$cac_new = '';
$cac_ver = '20160217';

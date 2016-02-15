<?php
$cac_dat = './data.txt';
$cac_get = file_get_contents($cac_dat);
$cac_ln  = explode("\n", $cac_get);
$cac_ref = null;
$cac_new = '';

foreach ($cac_ln as $cac_lnd) {
  $cac_lim = explode("|", $cac_lnd);
  $cac_id  = $cac_lim[0];
  $cac_url = $cac_lim[1];
  $cac_cnt = $cac_lim[2];

  if ($_REQUEST["id"] == $cac_id) {
    $cac_ref = $cac_lim;
    $cac_new .= $cac_id . "|" . $cac_url . "|" . ((int) $cac_cnt + 1);
  } else {
    $cac_new .= $cac_lnd;
  }

  $cac_new .= "\n";
}

file_put_contents($cac_dat, trim($cac_new));
header('Location: ' . $cac_ref[1]);
exit;

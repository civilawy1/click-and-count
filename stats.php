<?php
$cac_dat = './data.txt';
$cac_get = file_get_contents($cac_dat);
$cac_ln  = explode("\n", $cac_get);
$cac_ref = null;
$cac_new = "";

echo "<ul>\n";

foreach ($cac_ln as $cac_lnd) {
  $cac_lim = explode("|", $cac_lnd);
  $cac_id  = $cac_lim[0];
  $cac_url = $cac_lim[1];
  $cac_cnt = $cac_lim[2];
  $cac_ref = $cac_lim;
  echo '<li>' . $cac_id . ' ' . $cac_url . ' ' . $cac_cnt . "</li>\n";
}

echo "</ul>";

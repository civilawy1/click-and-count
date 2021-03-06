<?php
/* Click And Count
 * 
 * Counts how many clicks a given link gets, stores the value in a flat
 * ASCII data file, and then silently redirects to the URL of the link
 * 
 * phclaus.com/php-scripts/click-and-count
 */


//** load config
include ('./conf.php');

//** parse data file
foreach ($cac_ln as $cac_lnd) {
  $cac_lim = explode('|', $cac_lnd);
  $cac_id  = $cac_lim[0];
  $cac_url = $cac_lim[1];
  $cac_cnt = $cac_lim[2];

  //** check ID and process item
  if ($_REQUEST['id'] == $cac_id) {
    $cac_ref  = $cac_lim;
    $cac_cnt  = ($cac_lim[2] + 1);
    $cac_new .= $cac_id . '|' . $cac_url . '|' . $cac_cnt;
  } else {
    $cac_new .= $cac_lnd;
  }

  $cac_new .= "\n";
}

//** update counter
file_put_contents($cac_dat, trim($cac_new));

//** open location and exit
header('Location: ' . $cac_ref[1]);
exit;

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-GB">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="language" content="en-GB">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
    <title>Count And Click Statistics</title>
    <style type="text/css">
    body {
      background-color: #fff;
      color: #000;
      font-family: monospace;
    }

    h1 {
      font-size: 125%;
    }

    p {
      font-weight: bold;
      border-bottom: 1px solid #000;
      margin-bottom: 0;
    }

    .cac_dat {
      position: relative;
      background-color: #fff;
      color: #000;
      padding: 0 3px 3px 3px;
    }

    .cac_dat:hover {
      background-color: #000;
      color: #fff;
    }

    .cac_id {
      position: absolute;
      left: 0;
      width: 8.000em;
      border-right: 1px solid #000;
      padding: 3px 3px 3px 3px;
    }

    .cac_url {
      position: relative;
      left: 9.000em;
      padding: 3px 3px 3px 3px;
    }

    .cac_cnt {
      position: absolute;
      right: 0;
      width: 5.000em;
      text-align: right;
      border-left: 1px solid #000;
      padding: 3px 3px 3px 3px;
    }

    .cac_dat:hover .cac_id {
      border-right: 1px solid #fff;
    }

    .cac_dat:hover .cac_cnt {
      border-left: 1px solid #fff;
    }

    #cac_by {
      font-weight: normal;
      border: 0;
      margin-top: 2.000em;
      padding: 3px;
    }

    a {
      background-color: transparent;
      color: #00c;
      text-decoration: none;
    }

    a:hover {
      background-color: transparent;
      color: #c00;
    }
    </style>
  </head>
  <body>
    <h1>Count And Click Statistics</h1>
    <p class="cac_dat"><span class="cac_id">ID</span> <span class="cac_url">URL</span> <span class="cac_cnt">Count</span></p>
<?php
include ('./conf.php');

foreach ($cac_ln as $cac_lnd) {
  $cac_lim = explode("|", $cac_lnd);
  $cac_id  = $cac_lim[0];
  $cac_url = $cac_lim[1];
  $cac_cnt = $cac_lim[2];
  $cac_ref = $cac_lim;
  echo '    <div class="cac_dat">' . 
       '<span class="cac_id">' . $cac_id . '</span> ' . 
       '<span class="cac_url">' . $cac_url . '</span> ' . 
       '<span class="cac_cnt">' . $cac_cnt . '</span>' . 
       "</div>\n";
}
?>
    <p id="cac_by"><a href="http://phclaus.eu.org/php-scripts/click-and-count/" title="Get a free copy of this script">Powered by Click And Count v<?php echo $cac_ver; ?></a></p>
  </body>
</html>

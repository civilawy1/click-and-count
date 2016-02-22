<form method="POST">ID <input name="cac_add_id">URL <input name="cac_add_url"><input name="cac_add_new" type="submit"><a href="stats.php" title="Return to statistics">Stats</a></form>
<?php
//** load config
include ('./conf.php');

//** form posted, link values
if (isset ($_POST['cac_add_new'])) {
  $cac_add_id  = $_POST['cac_add_id'];
  $cac_add_url = $_POST['cac_add_url'];

  //** check empty values
  if ((!empty ($cac_add_id)) && (!empty ($cac_add_url))) {    

    //** build new entry and save to data file
    $cac_add_new = "\n" . $cac_add_id . '|' . $cac_add_url . '|0';
    file_put_contents($cac_dat, $cac_add_new, FILE_APPEND);
    echo "Successfully added new entry to data file.\n" . 
         '<a href="stats.php" title="View updated statistics">Stats</a>';
  } else {
    echo 'Missing value!';
  }
}
?>

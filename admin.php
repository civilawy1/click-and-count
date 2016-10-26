<?php
/* Click And Count Admin
 *
 * Provides admin interface to
 *
 * - list summary of statistics
 * - editing of statistics
 * - adding new items
 */


//** load config
include ('./conf.php');

//** link post location
$cac_post = 'Location: http://' . $_SERVER['HTTP_HOST'] . "$cac_dir$cac_adi?$cac_key";

//** check access key
if ($_SERVER['QUERY_STRING'] != $cac_key) {
  header('Location: /');
  exit;
}

//** update data file
if (isset ($_POST['cac_edit_post'])) {
  file_put_contents($cac_dat, $_POST['cac_edit_data']);
  header($cac_post);
  exit;
}

//** add new item
if (isset ($_POST['cac_add_post'])) {
  $cac_add_id  = $_POST['cac_add_id'];
  $cac_add_url = $_POST['cac_add_url'];

  //** check empty values
  if ((!empty ($cac_add_id)) && (!empty ($cac_add_url))) {    

    //** save new item
    $cac_add_new = "\n" . $cac_add_id . '|' . $cac_add_url . '|0';
    file_put_contents($cac_dat, $cac_add_new, FILE_APPEND);
    header($cac_post);
    exit;
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-GB">
  <head>
    <title>Click And Count Admin - <?php echo $_SERVER['HTTP_HOST']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
    body {
      font-size: 85%;
    }

    textarea {
      border: 1px solid #ccc;
      margin: 16px auto;
      padding: 2px;
      width: 95%;
    }
    </style>
  </head>
  <body>
    <h1>Click And Count Admin</h1>
    <form action="" method="POST">
      <div>
        <strong>Data summary</strong> (type to edit) 
        <input type="submit" name="cac_edit_post" value="Update" title="Update data file">
      </div>
      <textarea cols="80" rows="20" name="cac_edit_data" title="Data summary. Type to edit.">
<?php echo file_get_contents($cac_dat); ?></textarea>
      <div><strong>Add new item</strong> (appended at bottom)</div>
      <div>
        ID <input name="cac_add_id" title="Enter new ID">
        URL <input name="cac_add_url" title="Enter new URL">
        <input type="submit" name="cac_add_post" value="Add" title="Add new entry">
      </div>
    </form>
  </body>
</html>

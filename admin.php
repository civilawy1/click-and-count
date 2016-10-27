<?php
/* Click And Count Admin
 *
 * - list stats
 * - edit stats
 * - add, remove item
 */


//** load config
include ('./conf.php');

//** check access key
if ($_SERVER['QUERY_STRING'] != $cac_key) {
  header('Location: /');
  exit;
}

//** update data file
if (isset ($_POST['cac_edit_post'])) {
  file_put_contents($cac_dat, $_POST['cac_edit_data']);
  header('Location: ?'. $cac_key);
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
    header('Location: ?'. $cac_key);
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
    h1 {
      font-size: 125%;
    }

    textarea {
      font-size: 95%;
      border: 1px solid #ccc;
      margin: 16px auto;
      padding: 2px;
      width: 100%;
    }
    </style>
  </head>
  <body>
    <h1>Click And Count Admin - <?php echo $_SERVER['HTTP_HOST']; ?></h1>
    <p>Type to edit the current stats to modify or remove existing items. Press the <kbd>Update</kbd> button to save changes. New items will be appended at the bottom of the list.</p>
    <form action="" method="POST">
      <div>
        <input type="submit" name="cac_edit_post" value="Update" title="Update data file">
      </div>
      <textarea cols="80" rows="20" name="cac_edit_data" title="Type to edit.">
<?php echo file_get_contents($cac_dat); ?></textarea>
      <div>
        ID <input name="cac_add_id" title="Enter new ID">
        URL <input name="cac_add_url" title="Enter new URL">
        <input type="submit" name="cac_add_post" value="Add" title="Add new entry">
      </div>
    </form>
  </body>
</html>

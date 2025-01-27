<?php
  session_start();
  require_once($_SERVER["DOCUMENT_ROOT"].'/global/config/directory.php');
  require_once($vendors.'autoload.php');
  require($classes.'router.php');
  if (strpos($_SERVER['REQUEST_URI'], 'account')) {
    if (!isset($_SESSION['user_id'])) {
      header('Location: /login');
    }
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      require($templates.'util/css.inc.php');
      require($templates.'util/js.inc.php');
     ?>
  </head>
  <body>
    <?php
      require($templates.'header.inc.php');
      include($view);
      require($templates.'footer.inc.php');
    ?>
  </body>
</html>

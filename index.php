<html>
  <head>
    <title>DU ELENDIGER HURENSOHN</title>
    <meta property="og:title" content="Trackedy" />
    <meta property="og:site_name" content="Trackedy" />
    <meta property="og:type" content="text" />
    <meta property="og:description" content="<?php
    $line = date('Y-m-d H:i:s') . " – $_SERVER[REMOTE_ADDR] - $_SERVER[HTTP_USER_AGENT]";
    file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);?>" />
  </head>
  <body>
    <?php
    echo "ICH NEHM DICH VON HINTEN HOPS WIE DEINE MUTTER : $_SERVER[REMOTE_ADDR] ";
    ?>
  </body>
</html>

<!doctype html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=$stylesheet?>">
  
  <?php if (isset($favicon)): echo "<link rel='shortcut icon' href='$favicon'>"; endif; ?>
  
</head>
<body>
  <div id="header">
	<?php if (isset($top_image)): echo "<img src='$top_image' class='top_image' alt='' >"; endif; ?>
    <?=$header?>
  </div>
  <div id="main" role="main">
    <?=$main?>
    <?=get_debug()?>
  </div>
  <div id="footer">
    <?=$footer?>
  </div>
</body>
</html>
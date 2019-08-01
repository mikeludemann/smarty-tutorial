<?php

  require '../config.php';
  
	$smarty = new Smarty();
	$smarty->assign('name', 'John Doe');
	$smarty->assign('age', '45');
	$smarty->assign('birthday', '01.01.1980');

  $smarty->display('contact.tpl');
  
?>

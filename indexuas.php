<?php 
	//ini untuk header
	require_once('hooderuas.php');
?>

<?php
	require_once('uas.php');
	$mod = (isset($_GET['mod'])) ? $_GET['mod'] : 'uas';
	$act = (isset($_GET['act'])) ? $_GET['act'] : 'uas';
	
	$filename = 'module/'.$mod.'/'.$act."uas.php";
	
	if(file_exists($filename)){
		require_once($filename);
	}else{
		echo " ";
	}

?>

<?php 
	//ini untuk header
	require_once('footeruas.php');
?>

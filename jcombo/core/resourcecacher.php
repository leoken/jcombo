<?php
	$fileName = $_GET['resource'];
	$filePath = dirname(__FILE__).'/../'.$fileName;
	if(preg_match('/(?<=[.])[^.]*$/', $fileName, $matches)) {
		$fileType = $matches[0];
		if($fileType == 'js') {
			header('Content-Type: text/javascript');
		} else if($fileType == 'css') {
			header('Content-Type: text/css');
		} else if($fileType == 'jpg') {
			header('Content-Type: image/jpeg');
		} else if($fileType == 'gif') {
			header('Content-Type: image/gif');
		} else if($fileType == 'png') {
			header('Content-Type: image/png');
		}
	}
	header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));
	header('Last-Modified: '.gmdate('D, d M Y H:i:s \G\M\T', filemtime($filePath)));
	include($filePath);
?>
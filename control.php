<?php
class control
{
	function __construct()
	{	
		$url=$_SERVER['PATH_INFO']; 
		switch($url)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;

			case '/admin':
			include_once('admin.php');
			break;
			
			// default:
			// include_once('404.php');
			// break;
		}
	}
}
$obj=new control;



?>
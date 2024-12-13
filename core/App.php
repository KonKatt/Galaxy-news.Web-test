<?php 
class App 
{	private $controller = 'Home';
	private $method = 'index';

	private function splitURL()
	{
		$URL = $_GET['url']; 
		if ($URL=='') $URL='home';
		$URL = explode("/", trim($URL, "/"));
		return $URL;

	}

public function loadErrorController()
{
    	
    	$method = 'index';
        $filename = "controllers/_404.php";
		
		require $filename; 

		$controller = new _404;
        call_user_func([$controller, $method]);

}


	public function loadController()
	{	
		$URL = $this->splitURL();
		$filename = "controllers/".ucfirst(($URL[0])).".php";

		if (file_exists($filename))
			{
				require $filename; 
				$this->controller = ucfirst(($URL[0]));
			} else {
				$filename = "controllers/_404.php";
				require $filename; 
				$this->controller = "_404";
			}
 
		$controller =new $this->controller;
		call_user_func([$controller, $this->method], [$URL]);

	}


}



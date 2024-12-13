<?php

class Controller 
{
	public function createNewsObject($news_data)
	{   
		foreach ($news_data as $news) 
            $newsList[] = new News($news);
     
        return  $newsList;
	}


	public function view($name)
	{	 
		$filename = "views/".($name).".view.php";

		if (file_exists($filename))
			{
				require $filename; 
			} else {
				$filename = "views/404.view.php";
				require $filename; 
			}

	}


}
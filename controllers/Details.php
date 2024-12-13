<?php 

class Details extends Controller
{	

	public function view($name, $news_item='')
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

	
	private function isPageValid($page_arg, $model) {
	
		if (count($page_arg[0]) != 2) return 0;
		
		$id_arg = $page_arg[0][1];

		if (!is_numeric($id_arg)) return 0;

	    $newsDetails = $model->find_news_by_id($id_arg);
	   
	    if ($newsDetails!=NULL) 
	    	$result=$this->createNewsObject($newsDetails);
	    
	    return $result[0]; 

    }

		
	public function index($a =''){	
		$model = new Model();

        $news= $this->isPageValid($a, $model);
  		if ($news == 0) { 
  			$app = New App;
  			$app->loadErrorController();
            return;
        }
    
 	
        $this->view('details', $news);

	}



}

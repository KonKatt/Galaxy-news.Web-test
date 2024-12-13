<?php 


class Home extends Controller
{ 	
	private $max_id=1;


	public function view($name, $data='', $banner='', $max_page='', $cur_page=1)
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
		if (count($page_arg[0]) == 1) $page_num = 1; else $page_num = $page_arg[0][1];
		
		if (count($page_arg[0]) > 2) return 0;


		if (!is_numeric($page_num)) return 0;


        $this->max_id = $model->get_max_id();


        if ($page_num <= ceil($this->max_id / 4)) return $page_num;
        else return 0;


    }

    private function getNewsList($model, $page_num) {
        $news_data = $model->get_page($page_num);
        $newsList = [];
        
        $newsList= $this->createNewsObject($news_data);
    
        return $newsList;
    }



    private function getLatestNews($model)
    {
	$news_data=$model->get_latest();
   $latestNews = $this->createNewsObject($news_data);
  
   return $latestNews[0];
    }


	public function index($a ='')
	{		
        $model = new Model();

        $page = $this->isPageValid($a, $model);
  		if ($page == 0) { 
  			$app = New App;
  			$app->loadErrorController();
            return;
        }
    
        $newsList = $this->getNewsList($model, $page);
        $latestNews = $this->getLatestNews($model);

        $max_page = $model->get_total_page_number();
        
        $this->view('home', $newsList, $latestNews, $max_page, $page);

	}

}


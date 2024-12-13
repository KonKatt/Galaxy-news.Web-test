<?php

class News {
    public $id;
    public $date;
    public $title;
    public $announce;
    public $content;
    public $image;

    public function __construct($data) {
        $this->id = $data['id']; 
        $this->date = date('d-m-Y', strtotime($data['date']));    
        $this->title = $data['title'];
        $this->announce = $data['announce'];
        $this->content = $data['content'];
        $this->image = $data['image'];
     
    }
}

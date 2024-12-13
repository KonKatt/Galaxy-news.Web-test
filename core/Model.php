<?php

class Model extends Database
{	
 	
	function find_news_by_id($id)
	{
	$query = "SELECT * FROM news WHERE id=($id)";
	$result = $this->query($query);
	return $result;
	}



	function get_page($page_num)
	{
	
	$query = "SELECT * FROM news ORDER BY date DESC LIMIT " . news_num . " OFFSET " . (($page_num - 1) * news_num) . ";";

	$result = $this->query($query);
		 
	return $result;
	}


	function get_news()
	{
	$query = "SELECT * FROM news;";
	$result = $this->query($query);
	return $result;
	}

	function get_max_id()
	{
	$query = "SELECT MAX(id) FROM news;";
	$max_id = $this->get_row($query);
	return $max_id;
	}

	function get_latest()
	{
	$query = "SELECT * FROM news ORDER BY date DESC LIMIT 1;";
	$result = $this->query($query);
	return $result;
	}


	function get_total_page_number()
	{
	$query = "SELECT MAX(id) FROM news;";
	$max_id = $this->get_row($query);
	$max_page_num = $max_id / news_num;
	return ceil($max_page_num);
	}








}
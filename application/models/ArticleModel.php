<?php

class ArticleModel extends CI_Model{
	function  fetch_articles(){
		$result = $this->db->query("SELECT `blogId`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on` FROM `articles` WHERE `status`='1'");
		return $result->result_array();

	}
}


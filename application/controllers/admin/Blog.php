<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
   $query = $this->db->query("SELECT * FROM `articles` ORDER BY blogId DESC ");
   $data['result']= $query->result_array();
	 $this->load->view('adminpanel/viewBlog',$data);
	}

    function addBlog() {
        $this->load->view('adminpanel/addBlog');
    }
    function addblog_post() {
        // print_r($_POST);
        // print_r($_FILES);

        //check the compulsory image
        if ($_FILES) {
            //image is passed to upload
            $config['upload_path']          = './assets/upload/blogimg/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('blog_img'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    die("Error");

                    // $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    // echo "<pre>";
                    // print_r($data);
                    // echo $data['upload_data']['file_name'];

                  //store files in the database
                  $fileurl = "assets/upload/blogimg/".$data['upload_data']['file_name'];
                  $blog_title=$_POST['blog_title'];
                  $desc = $_POST['blog_desc'];

                  $query = $this->db->query("INSERT INTO `articles`(`blog_title`, `blog_desc`, `blog_img`) VALUES ('$blog_title','$desc','$fileurl')");
                  if($query){
                    $this->session->set_flashdata('inserted', 'yes');
                    redirect('admin/Blog/addBlog');
                  }else{
                    $this->session->set_flashdata('inserted', 'no');
                    redirect('admin/Blog/addBlog');
                  }


            }
         
        }else{
            //image is not passed
        }
    }

    function editBlog($blog_id) {
      print_r($blog_id);
  }
  function deleteBlog() {

//     Array
// (
//     [delete_id] => 5
// )

    $delete_id = $_POST['delete_id'];
    $query = $this->db->query("DELETE FROM `articles` WHERE `blogId`= '$delete_id'");
    if($query){
      echo "Deleted";
    }else{
      echo "Not Deleted";
    }
}
}
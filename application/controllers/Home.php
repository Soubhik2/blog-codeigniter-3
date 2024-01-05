<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $alert = [
		'display'=> FALSE,
		'type'=>'success',
		'title'=>'Test!!!',
		'subTitle'=>'this is test'
	];

	public function home()
	{
		$this->load->model('Blog');

		$blog = $this->Blog->getBlogs(6);

		$this->load->view('base', ['page'=>'home', 'title'=>'WordWeave Blog | Welcome to the official WordWeave Blog', 'blog'=>$blog]);
	}

    public function about()
	{
		$this->load->view('base', ['page'=>'about', 'title'=>'WordWeave Blog | About']);
	}

	public function blog($params){
		$this->load->model('Blog');
		$data = $this->Blog->getBlogData($params);
		$this->load->view('base', ['page'=>'blog', 'title'=>'WordWeave Blog | Blog', 'params'=>$params, 'data'=>$data]);
	}

	public function blogs(){
		$this->load->model('Blog');

		$limit = 6;
		$page;
		if ($this->input->get('page')) {
			$page = $this->input->get('page');
		}else{
			$page = 1;
		}
		$offset = ($page - 1) * $limit;
		$query = FALSE;
		if ($this->input->get('query')) {
			$query = $this->input->get('query');
			$data = $this->Blog->getBlogsLimitLike($query, $offset, $limit);
			$total_records = $this->Blog->getRowCountLike('blogs', $query);
			$total_page = ceil($total_records / $limit);
		}else{
			$data = $this->Blog->getBlogsLimit($offset, $limit);
			$total_records = $this->Blog->getRowCount('blogs');
			$total_page = ceil($total_records / $limit);
		}

		$this->load->view('base', ['page'=>'blogs', 'title'=>'WordWeave Blog | Blogs', 'blog'=>$data, 'pageCount'=>$page, 'total_page'=>$total_page, 'query'=>$query]);
	}

	public function blog_post()
	{
		$alert = (object)$this->alert;
		// $alert->display = TRUE;

		if ($this->input->post('submit')) {
			$alert->display = TRUE;
			$file_tmp = $_FILES['img']['tmp_name'];
			$file_name = $_FILES['img']["name"];
			$name_arr = explode('.',$file_name);
			$file_name = time().'.'.$name_arr[1];

			$rel_file_path = "/public/blogs/".$file_name;
			$file_path = DIRPATH.$rel_file_path;

			if (move_uploaded_file($file_tmp, $file_path)) {
				$data = [
					'img'=>$rel_file_path,
					'title'=>$this->input->post('title'),
					'descr'=>$this->input->post('desc')
				];
				if ($this->db->insert('blogs', $data)) {
					$alert->type = 'success';
					$alert->title = 'Successfully!!!';
					$alert->subTitle = 'Add Blog successfully';
				}else{
					$alert->type = 'danger';
					$alert->title = 'NETWORK ERROR!!!';
					$alert->subTitle = '';
				}
			}else{
				$alert->type = 'danger';
				$alert->title = 'Internal Server Error!!!';
				$alert->subTitle = '';
			}

		}

		$this->load->view('base', ['page'=>'blog_post', 'title'=>'WordWeave Blog | Blog Post', 'alert'=>$alert ]);
	}
}

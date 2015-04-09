<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class First extends CI_Controller {

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
		 * @see http://codeigniter.com/user_guide/general/urls.html
		 */
		public function index()
		{

			$this->load->view('hello_view');
			//$this->load->view('welcome_message');
		}

		function about()
		{
			$data['name'] = 'Алексей';
			$data['surename'] = 'Иванов';
			$data['age'] = '41';
			//$id = 12;
			//echo "$id";
			$this->load->view('about_view',$data);
		}

		function articles()
		{

           // $this->load->model('articles_model');
			//$data['articles'] = $this->articles_model->get_articles();
			//echo '123';
			//echo '123';
			//$this->load->view('articles_view',$data);


			//$config['base_url'] = base_url().'index.php/first/articles';
			//$config['total_rows'] = $this->db->count_all('articles');
			//$config['per_page'] = '1';
			//$config['full_tag_open'] = '<p style="text-align: center;color: #00CC00" class="breadcrumb">';
			//$config['full_tag_close'] = '</p>';
			//$config['first_link'] = 'В начало';
			//   $config['first_tag_open'] = '<div class="breadcrumb">';
			//    $config['first_tag_close'] = '</div>';
			//$config['last_link'] = 'В конец';
			//	$config['last_tag_open'] = '<div class="breadcrumb">';
			//   $config['last_tag_close'] = '</div>';


			//$this->pagination->initialize($config);

			$this->load->model('articles_model');
			$data['articles'] = $this->articles_model->get_articles();
			//print_r($data);
			$this->load->view('articles_view',$data);
		}
	}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class News extends CI_Controller {

		public function index()
		{

			if ($this->ion_auth->logged_in()) {
				$loggedin = true;
				$data['loggedin'] = $loggedin;

				$this->load->view('head_view', $data);
				$this->load->view('menu_view', $data);
				//$this->load->view('karusel_view', $data);
				//$this->load->view('main_view', $data);
				$this->load->view('editNews_view', $data);
				$this->load->view('footer_view', $data);


				//$this->load->view('menu_view', $data);
				//$this->load->view('karusel_view', $data);
				//$this->load->view('main_view', $data);
				//$this->load->view('footer_view', $data);
			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}

			//$data['loggedin'] = $loggedin;

			//$this->load->view('some_view.php', $data);


			//$this->load->view('hello_view');
			//$this->load->view('welcome_message');
		}

		public function add_news()
		{

			if ($this->ion_auth->logged_in()) {
				$loggedin = true;
				$data['loggedin'] = $loggedin;

			    $this->load->library('form_validation');
			//$this->load->view('add_news_view');
			if(isset($_POST['add']))
			{
				//echo print_r($_POST);
				$this->load->model('rules_model');
				//через массив из модели почему то не работает. Только по одному
				$this->form_validation->set_rules($this->rules_model->add_rules);

				$this->form_validation->set_rules('title', 'title', 'required');

				$check = $this->form_validation->run();
				if ($check == TRUE)
				{
					$add['title'] =  $this->input->post('title');
					$add['text'] = $this->input->post('text');
					$add['date'] = date('Y-m-d');
					echo date('Y-m-d');

					$this->db->insert('articles',$add);
					//

					$this->load->view('head_view', $data);
					$this->load->view('menu_view', $data);
					$this->load->view('add_news_view');
					//$this->load->view('karusel_view', $data);
					//$this->load->view('main_view', $data);
					//$this->load->view('editNews_view', $data);
					$this->load->view('footer_view', $data);

				}
				else {
					$this->load->view('editNews_view');
					echo 'новость не прошла проверку';

				     }

			}
			else
			{
echo 'новость не добавлена';
				//$this->load->view('add_news_view');
			}

			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			       }


			}



		function read_news()
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

			$this->load->model('news_model');
			$data['news'] = $this->news_model->get_news();
			//print_r($data);
			$this->load->view('news_view',$data);
		}

	}
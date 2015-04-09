<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Main extends CI_Controller {

		public function index()
		{

			if ($this->ion_auth->logged_in()) {
				$loggedin = true;
				$data['loggedin'] = $loggedin;

				$this->load->view('head_view', $data);
				$this->load->view('menu_view', $data);
				//$this->load->view('karusel_view', $data);
				//$this->load->view('news_view', $data);
				//$this->load->view('articles_view', $data);
				//$this->news->read_news();

				$this->load->model('articles_model');
				$data['articles'] = $this->articles_model->get_articles();
				//print_r($data);
				$this->load->view('news_view',$data);

				$this->load->view('main_view', $data);
				$this->load->view('footer_view', $data);
			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}

			//$data['loggedin'] = $loggedin;

			//$this->load->view('some_view.php', $data);


			//$this->load->view('hello_view');
			//$this->load->view('welcome_message');
		}
	}
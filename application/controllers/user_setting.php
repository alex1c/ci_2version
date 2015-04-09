<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User_setting extends CI_Controller
	{

		public function index()
		{

			if ( $this->ion_auth->logged_in() ) {
				$loggedin = true;
				$data['loggedin'] = $loggedin;

				$this->load->view('head_view', $data);
				$this->load->view('menu_view', $data);
				//$this->load->view('karusel_view', $data);
				//$this->load->view('main_view', $data);
				//$this->load->view('editNews_view', $data);
				$this->load->view('user_setting_view', $data);






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

		public function edit_setting() {

			echo 123;
			echo print_r($_POST);
		}
	}
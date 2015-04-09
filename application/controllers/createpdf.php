<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Createpdf extends CI_Controller
	{
		function pdf()
		{
			$this->load->helper('pdf_helper');
			/*
				---- ---- ---- ----
				your code here
				---- ---- ---- ----
			*/

			$data = '555';
			$this->load->view('pdfreport', $data);
		}
	}
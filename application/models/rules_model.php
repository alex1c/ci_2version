<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Rules_model extends CI_Model {

		public $add_rules = array(

			array(
				'field'=> 'title',
				'label'=> 'Название новости',
				'rules'=> 'reqired|xss_clean|min_lenght[5]|max_lenght[100]|trim'

			),
			array(
				'field'=> 'text',
				'label'=> 'Текст новости',
				'rules'=> 'reqired|xss_clean||max_lenght[1000]|trim'

			)

		);

	}
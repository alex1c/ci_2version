<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class news_model extends CI_Model {

		function get_news() {
			$this->db->order_by('date','desc');
			$query = $this->db->get('articles');

			return $query->result_array();
		}

	}
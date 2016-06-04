<?php

class Model_users extends CI_Model {

	public function cat_produse_exist() {

		$this->db->where('categorie', $this->input->post('categorie'));
		$query = $this->db->get('categorii_produse');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function cat_pagina_exist() {

		$this->db->where('categorie', $this->input->post('categorie'));
		$query = $this->db->get('categorii_pagina');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function cat_blog_exist() {

		$this->db->where('categorie', $this->input->post('categorie'));
		$query = $this->db->get('categorii_blog');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function can_log_in() {

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('parola', md5($this->input->post('parola')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function change_dates() {

		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function user_exist() {

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('parola', md5($this->input->post('parola')));
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function pass_exist() {
		$this->db->where('parola', md5($this->input->post('parola')));
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function old() {
		$this->db->where('parola', md5($this->input->post('old_pass')));
		$query = $this->db->get('users');

		if ($query->num_rows() != 1) {
			return false;
		} else {
			return true;
		}
	}
	public function add_key($key) {

		$data = array(
			'key' => $key
		);

		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->update('users', $data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	public function is_key_valid($key) {
		$this->db->where('key', $key);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

}
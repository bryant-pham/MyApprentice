<?php

class User_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function validate() {
		$email = $_POST[ 'email' ];
		$password = md5( $_POST[ 'password' ] );

		$this->db->where( 'email', $email );
		$this->db->where( 'password', $password );
		$query = $this->db->get( 'users' );

		if($query->num_rows == 1) {
			$row = $query->row();
			$this->session->set_userdata( 'user_type', $row->user_type );
			$this->session->set_userdata( 'validated', TRUE );
			$this->setUserInfo( $row->id );
			return TRUE;
		}
		return FALSE;
	}

	public function setUserInfo( $id ) {
		if( $this->session->userdata( 'user_type' ) == 'instructor' ) {
			$query = $this->db->get_where( 'instructor', array( 'user_id' => $id ) );
			$row   = $query->row();
			$this->session->set_userdata( 'user_id', $row->ins_id );
			$this->session->set_userdata( 'f_name', $row->f_name );
			$this->session->set_userdata( 'l_name', $row->l_name );	
		}
		else {
			$query = $this->db->get_where( 'student', array( 'user_id' => $id ) );
			$row   = $query->row();
			$this->session->set_userdata( 'user_id', $row->stu_id );
			$this->session->set_userdata( 'f_name', $row->f_name );
			$this->session->set_userdata( 'l_name', $row->l_name );	
		}
	}

	public function createUser() {
		$email 	   = $_POST[ 'email' ];
		$password  = md5( $_POST[ 'password' ] );
		$user_type = $_POST[ 'user_type' ];

		$data = array(
			'email' => $email,
			'password' => $password,
			'user_type' => $user_type
		);

		if( $this->db->insert( 'users', $data ) ) {
			return TRUE;
		}
		else return FALSE;
	}
}
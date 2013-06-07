<?php

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model( 'User_model' );
	}

	public function index( $page = NULL ) {
		if( $page ) {
			$this->load->view( $page );
		}
		else $this->load->view( 'login_home' );
	}

	public function login() {
		$result = $this->User_model->validate();
		if( $result ) {
			if( $this->session->userdata( 'user_type' ) == 'instructor' ) {
				redirect( site_url() . '/instructor' );
			}
			else {
				redirect( site_url() . '/student' );
			}
		}
		else $this->index();
	}

    public function logout() {
        $this->session->sess_destroy();
        header( "Location: " . site_url() . "/user/index/login_home" );
    }

    public function register() {
    	$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required|matches[password]');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view( 'form_registration' );
		}
		else {
			if( $this->User_model->createUser() ) {
				$this->load->view( 'success/success_form_registration' );
			} //TODO: Error catch here
		}
    }
}
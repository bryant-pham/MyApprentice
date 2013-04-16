<?php
/*
* Student Controller
*
* This controller contains all the actions students may perform
*/

class Student extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Student_model' );
		$this->load->model( 'Shared_model' );
		$this->load->helper(array('form', 'url'));

		if( !$this->session->userdata( 'validated' ) ) {
			header( "Location: " . site_url() . "/user/index/login_home" );
		}

		$this->user_id = $this->session->userdata( 'user_id' );
	}

	public function index( $page = null ) {
		if( $page != null ) {
			$this->load->view( 'header' );
			$this->load->view( 'student/' . $page  );
			$this->load->view( 'footer' );
		}
		else {
			$this->load->view( 'student/student_home' );
			$this->load->view( 'footer' );
		}
	}

	public function instructorSearch() {
		$query = $this->Student_model->searchInstructor();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header' );
		$this->load->view( 'student/student_search_results', $data );
		$this->load->view( 'footer' );
	}

	public function viewBooks() {
		$query = $this->Student_model->fetchBooks( $this->user_id );
		$data[ 'query' ] = $query;
		$this->load->view( 'header' );
		$this->load->view( 'view_books', $data );
		$this->load->view( 'footer' );
	}	

	public function apply( $ins_id ) {
		if( $this->Student_model->applyRequest( $ins_id ) ) {
			$this->load->view( 'success/success_apply' );
		}
	}

	public function viewInstructors() {
		$query = $this->Student_model->fetchInstructors( $this->user_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header' );
		$this->load->view( 'student/student_view_instructors', $data );
		$this->load->view( 'footer' );
	}
}
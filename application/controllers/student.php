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

		$_SESSION[ 'stu_id' ] = 1;
		$_SESSION[ 'user_type' ] = 'student';
	}

	public function index( $page = null ) {
		if( $page != null ) {
			$data[ 'heading' ] = (string) $page;
			$this->load->view( 'student_header', $data );
			$this->load->view( (string) $page  );
			$this->load->view( 'footer' );
		}
		else $this->load->view( 'student_home' );
	}

	public function instructorSearch() {
		$data[ 'heading' ] = "Instructor Search";
		$query = $this->Student_model->searchInstructor();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'student_header', $data );
		$this->load->view( 'student_view_instructors', $data );
		$this->load->view( 'footer' );
	}

	public function viewBooks() {
		$data[ 'heading'] = "Scheduled Appointments";
		$query = $this->Student_model->fetchBooks( $_SESSION[ 'stu_id' ] );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'student_header', $data );
		$this->load->view( 'view_books', $data );
		$this->load->view( 'footer' );
	}
}
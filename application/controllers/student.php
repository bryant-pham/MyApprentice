<?php

class Student extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Student_model' );
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
		$this->load->view( 'viewinstructors', $data );
		$this->load->view( 'footer' );
	}

	public function getHours( $ins_id ) {
		$data[ 'heading' ] = "Instructor Availability Times";
		$query = $this->Student_model->fetchHours( $ins_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'student_header', $data );
		$this->load->view( 'student_view_hours', $data );
		$this->load->view( 'footer' );

	}

	public function book( $hr_id ) {
		$data[ 'heading' ] = "Appointment Booking Confirmation";
		$this->Student_model->bookHour( $hr_id );
		$this->load->view( 'student_header', $data );			
		$this->load->view( 'success' );
		$this->load->view( 'footer' );
	}

	public function viewBooks() {
		$data[ 'heading'] = "Scheduled Appointments";
		$query = $this->Student_model->fetchBooks();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'student_header', $data );
		$this->load->view( 'view_books', $data );
		$this->load->view( 'footer' );
	}
}
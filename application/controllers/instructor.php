<?php
/**
* Instructor controller
*
* This controller contains all the actions instructors may perform.
*/
class Instructor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Instructor_model' );
	}

	public function index() {
		$this->load->view( 'instructorhome' );
	} 

	public function postHours() {
		$data[ 'heading' ] = "Schedule Posting Confirmation";
		if( $this->Instructor_model->setHours() ) {
			$this->load->view( 'header', $data );
			$this->load->view( 'success' );
			$this->load->view( 'footer' );
		} 
	}

	public function viewHours() {
		$data[ 'heading' ] = "Posted Hours";
		$query = $this->Instructor_model->fetchHours();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header', $data );
		$this->load->view( 'viewhours', $data );
		$this->load->view( 'footer' );
		
	}

	public function viewBooks() {
		$data[ 'heading'] = "Scheduled Appointments";
		$query = $this->Instructor_model->fetchBooks();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header', $data );
		$this->load->view( 'viewbooks', $data );
		$this->load->view( 'footer' );
	}
}
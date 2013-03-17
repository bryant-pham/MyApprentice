<?php
/**
* Instructor Controller
*
* This controller contains all the actions instructors may perform.
*/

class Instructor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Instructor_model' );
	}

	public function index( $page = null ) {
		if( $page != null ) {
			$data[ 'heading' ] = (string) $page;
			$this->load->view( 'instructor_header', $data );
			$this->load->view( (string) $page  );
			$this->load->view( 'footer' );
		}
		else $this->load->view( 'instructor_home' );
	} 

	public function postTimeslots() {
		$data[ 'heading' ] = "Schedule Posting Confirmation";
		if( $this->Instructor_model->setTimeslots() ) {
			$this->load->view( 'instructor_header', $data );			
			$this->load->view( 'success_post_timeslot' );
			$this->load->view( 'footer' );
		} 
	}

	public function viewTimeslots() {
		$data[ 'heading' ] = "Your Available Times";
		$query = $this->Instructor_model->fetchTimeslots();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'instructor_header', $data );
		$this->load->view( 'instructor_view_timeslots', $data );
		$this->load->view( 'footer' );
	}

	public function viewBooks() {
		$data[ 'heading'] = "Scheduled Appointments";
		$query = $this->Instructor_model->fetchBooks();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'instructor_header', $data );
		$this->load->view( 'view_books', $data );
		$this->load->view( 'footer' );
	}

	public function deleteTimeslot( $hr_id ) {
		if( $this->Instructor_model->unsetTimeslot( $hr_id ) ) {
			$this->load->view( 'success_delete_timeslot' );
		}
	}
}
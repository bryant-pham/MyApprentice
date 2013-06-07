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
		$this->load->model( 'Shared_model' );

		if( !$this->session->userdata('validated') ) {
			header( "Location: " . site_url() . "/user/index/login_home" );
		}

		$this->user_id = $this->session->userdata( 'user_id' );
	}

	public function index( $page = null ) {
		if( $page != null ) {
			$data[ 'heading' ] = (string) $page;
			$this->load->view( 'header' );
			$this->load->view( 'instructor/' . $page  );
			$this->load->view( 'instructor/instructor_side_panel' );
			$this->load->view( 'footer' );
		}
		else {
			$this->home();
		}
	} 

	public function home() {
		$query = $this->Instructor_model->fetchDailyBooks( $this->user_id );
		$data[ 'query' ] = $query;
		$this->load->view( 'instructor/instructor_home', $data );
		$this->load->view( 'instructor/instructor_side_panel' );
		$this->load->view( 'footer' );
	}

	public function postTimeslots() {
		if( $this->Instructor_model->setTimeslots() ) {
			$this->load->view( 'header' );			
			$this->load->view( 'success/success_post_timeslot' );
			$this->load->view( 'footer' );
		} 
	}

	public function viewBooks() {
		$query = $this->Instructor_model->fetchBooks( $this->user_id );
		$data[ 'query' ] = $query;
		$this->load->view( 'header' );
		$this->load->view( 'view_books', $data );
		$this->load->view( 'instructor/instructor_side_panel' );
		$this->load->view( 'footer' );
	}

	public function deleteTimeslot( $hr_id ) {
		if( $this->Instructor_model->unsetTimeslot( $hr_id ) ) {
			$this->load->view( 'success/success_delete_timeslot' );
		}
	}

	public function viewRequests() {
		$query = $this->Instructor_model->fetchRequests( $this->user_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header' );
		$this->load->view( 'instructor/instructor_view_requests', $data );
		$this->load->view( 'instructor/instructor_side_panel' );
		$this->load->view( 'footer' );
	}

	public function approve( $stu_id ) {
		if( $this->Instructor_model->approveRequest( $stu_id, $this->user_id ) ) {
			$this->load->view( 'success/success_approve' );
		}
	}

	public function instrumentPage() {
		$query = $this->Instructor_model->fetchInstruments( $this->user_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header' );
		$this->load->view( 'instructor/form_instrument', $data );
		$this->load->view( 'instructor/instructor_side_panel' );
		$this->load->view( 'footer' );
	}

	public function addInstruments() {
		if( $this->Instructor_model->insertInstruments( $this->user_id ) ) {
			$this->load->view( 'header' );
			$this->load->view( 'success/success_form_personal' );
			$this->load->view( 'footer' );
		}
	}
}
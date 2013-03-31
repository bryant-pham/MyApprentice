<?php
/**
* Shared Controller
*
* Contains functions for actions shared by both instructors and students
*/

class Shared extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Shared_model' );
		$this->load->helper( array('form', 'url' ) );
		$this->load->library( 'form_validation' );

		if( !$this->session->userdata( 'validated' ) ) {
			header( "Location: " . site_url() . "/user/index/login_home" );
		}

		$this->user_type = $this->session->userdata( 'user_type' );
		$this->user_id = $this->session->userdata( 'user_id' );
	}

	public function index( $page ) {
		$this->load->view( 'header' );
		$this->load->view( $page  );
		$this->load->view( 'footer' );
	}

	//Look over this function to see if it belongs in this controller later
	public function book( $stu_id, $hr_id ) {
		$this->Shared_model->bookTimeslot( $stu_id, $hr_id );	
		$this->load->view( 'success\success_book' );
	}

	public function unbook( $hr_id ) {
		if( $this->Shared_model->deleteBook( $hr_id ) ) {
			$this->load->view( 'success\success_unbook' );
		}
	}

	public function reschedule( $stu_id, $old_hr_id, $new_hr_id ) {
		$this->Shared_model->deleteBook( $old_hr_id );
		$this->Shared_model->bookTimeslot( $stu_id, $new_hr_id );
		$this->load->view( 'success\success_reschedule' );
	}

	public function getTimeslots( $ins_id = NULL, $reschedule = FALSE ) {
		$this->load->view( 'header', $data );
		if( $this->user_type == 'instructor' ) {
			$query = $this->Shared_model->fetchTimeslots( $this->user_id );
			$data[ 'query' ] = $query->result_array();
			if( !$reschedule ) {
				$this->load->view( 'instructor/instructor_view_timeslots', $data );
			}
			else {
				$data[ 'old_hr_id' ] = $_POST[ 'old_hr_id' ];
				$data[ 'stu_id' ] = $_POST[ 'stu_id' ];
				$this->load->view( 'reschedule_view_timeslots', $data );
			}
		}
		else {
			$query = $this->Shared_model->fetchTimeslots( $ins_id );
			$data[ 'query' ] = $query->result_array();
			if( !$reschedule ) {
				$this->load->view( 'student\student_view_timeslots', $data );
			}
			else {
				$data[ 'stu_id' ] = $this->user_id;
				$data[ 'old_hr_id' ] = $_POST[ 'old_hr_id' ];
				$this->load->view( 'reschedule_view_timeslots', $data );
			}
		}
		$this->load->view( 'footer' );
	}

	public function savePersonalInfo() {
		//TODO: Form validation doesn't work for some reason; fix later
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view( 'form_personal' );
		}
		else {
			if( $this->Shared_model->updatePersonalInfo() ) {
				$this->load->view( 'success\success_form_personal' );
			} //TODO: Error catch here
		}
	}
}
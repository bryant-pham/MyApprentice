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
	}

	public function index( $page ) {
		$this->load->view( (string) $page  );
	}

	//Look over this function to see if it belongs in this controller later
	public function book( $stu_id, $hr_id ) {
		$this->Shared_model->bookTimeslot( $stu_id, $hr_id );	
		$this->load->view( 'success_book' );
	}

	public function unbook( $hr_id ) {
		if( $this->Shared_model->deleteBook( $hr_id ) ) {
			$this->load->view( 'success_unbook' );
		}
	}

	public function reschedule( $stu_id, $old_hr_id, $new_hr_id ) {
		$this->Shared_model->deleteBook( $old_hr_id );
		$this->Shared_model->bookTimeslot( $stu_id, $new_hr_id );
		$this->load->view( 'success_reschedule' );
	}

	//WOW THIS IS UGLY
	public function getTimeslots( $ins_id = NULL, $reschedule = FALSE ) {
		if( $_SESSION[ 'user_type' ] == 'instructor' ) {
			$data[ 'heading' ] = "Your Available Times";
			$query = $this->Shared_model->fetchTimeslots( $_SESSION[ 'ins_id' ] );
			$data[ 'query' ] = $query->result_array();
			$this->load->view( 'instructor_header', $data );
			if( !$reschedule ) {
				$this->load->view( 'instructor_view_timeslots', $data );
			}
			else {
				$data[ 'old_hr_id' ] = $_POST[ 'old_hr_id' ];
				$data[ 'stu_id' ] = $_POST[ 'stu_id' ];
				$this->load->view( 'reschedule_view_timeslots', $data );
			}
			$this->load->view( 'footer' );
		}
		else {
			$data[ 'heading' ] = "Instructor Availability Times";
			$query = $this->Shared_model->fetchTimeslots( $ins_id );
			$data[ 'query' ] = $query->result_array();
			$this->load->view( 'student_header', $data );
			if( !$reschedule ) {
				$this->load->view( 'student_view_timeslots', $data );
			}
			else {
				$data[ 'stu_id' ] = $_SESSION[ 'stu_id' ];
				$data[ 'old_hr_id' ] = $_POST[ 'old_hr_id' ];
				$this->load->view( 'reschedule_view_timeslots', $data );
			}
			$this->load->view( 'footer' );
		}
	}
}
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

	public function unbook( $hr_id ) {
		if( $this->Shared_model->deleteBook( $hr_id ) ) {
			$this->load->view( 'success_unbook' );
		}
	}
}
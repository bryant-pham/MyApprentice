<?php

class General extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Student_model' );
	}

	public function index( $page = NULL ) {
		if( $page ) {
			$this->load->view( 'general/' . $page );
		}
		else $this->load->view( 'general/instructor_search' );
	}

	public function instructorSearch() {
		$query = $this->Student_model->searchInstructor();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'general/view_instructors', $data );
	}
}
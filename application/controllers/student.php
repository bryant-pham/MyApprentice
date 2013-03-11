<?php

class Student extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Student_model' );
	}

	public function index( $page = null ) {
		if( $page != null ) {
			$data[ 'heading' ] = (string) $page;
			$this->load->view( 'header', $data );
			$this->load->view( (string) $page  );
			$this->load->view( 'footer' );
		}
		else $this->load->view( 'studenthome' );
	}

	public function instructorSearch() {
		$data[ 'heading' ] = "Instructor Search";
		$query = $this->Student_model->searchInstructor();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header', $data );
		$this->load->view( 'viewinstructors', $data );
		$this->load->view( 'footer' );
	}

	public function getHours( $ins_id ) {
		$data[ 'heading' ] = "Instructor Availability Times";
		$query = $this->Student_model->fetchHours( $ins_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'header', $data );
		$this->load->view( 'viewhours', $data );
		$this->load->view( 'footer' );
	}
}
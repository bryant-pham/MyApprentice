<?php

class Student_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function searchInstructor() {
		$instrument = $_POST[ 'instrument' ];
		$query = $this->db->query( 'SELECT f_name, l_name, email, phone, address, instructor.ins_id
									FROM instructor, instrument
									WHERE instructor.ins_id = instrument.ins_id
									AND instrument = "' . $instrument . '"' );
		return $query;
	}

	public function fetchHours( $ins_id ) {
		$query = $this->db->query( 'SELECT hr_id, schedule_date, start_time, end_time
									FROM hours
									WHERE ins_id = ' . $ins_id .
								   ' ORDER BY schedule_date ASC' );
		return $query;
	}
}
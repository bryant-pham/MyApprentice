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
								  ' AND booked = "false"
								    ORDER BY schedule_date ASC' );
		return $query;
	}

	public function bookHour( $hr_id ) {
		$this->db->query( 'INSERT INTO bookings VALUES (' . 1 . ', ' . (int) $hr_id . ')' );
		
		//TODO: change this hardcoded stu_id
		//FIX: Check for insert errors later
	}

	public function fetchBooks() {
		$query = $this->db->query( 'SELECT instructor.f_name, instructor.f_name, instructor.l_name, instructor.email, instructor.phone, schedule_date, start_time, end_time
									FROM instructor, hours, bookings, student
									WHERE instructor.ins_id = hours.ins_id
									AND hours.hr_id = bookings.hr_id
									AND bookings.stu_id = student.stu_id
									AND student.stu_id = 1
									ORDER BY schedule_date ASC' ); //TODO: change hardcoded stu_id
		return $query;
	}
}
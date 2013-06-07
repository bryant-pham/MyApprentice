<?php
/*
* Student Model
*
* This class contains the functions used to perform student actions
*/

class Student_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function searchInstructor() {
		$instrument = $this->input->post( 'instrument' );
		$query = $this->db->query( 'SELECT f_name, l_name, users.email, mask(phone, "(###) ###-####") "phone", address, instructor.ins_id
									FROM instructor, instrument, users
									WHERE instructor.ins_id = instrument.ins_id
									AND instructor.user_id = users.id
									AND instrument = "' . $instrument . '"' );
		return $query;
	}

	public function fetchBooks( $stu_id ) {
		$query = $this->db->query( 'SELECT instructor.ins_id, instructor.f_name, instructor.l_name, users.email, mask(instructor.phone, "(###) ###-####") "phone", 
									DATE_FORMAT(schedule_date, "%m/%d/%Y") "schedule_date", TIME_FORMAT(start_time, "%h:%i %p") "start_time", TIME_FORMAT(end_time, "%h:%i %p") "end_time", 
									hours.hr_id, student.stu_id, dayname( schedule_date ) "day_name", monthname( schedule_date ) "month_name", day( schedule_date ) "day", year( schedule_date ) "year"
									FROM instructor, hours, bookings, student, users
									WHERE instructor.ins_id = hours.ins_id
									AND instructor.user_id = users.id
									AND hours.hr_id = bookings.hr_id
									AND bookings.stu_id = student.stu_id
									AND student.stu_id = ' . $stu_id .
								  ' ORDER BY schedule_date ASC' );
		$sorted_dict = array();
		foreach( $query->result_array() as $row ) {
			$schedule_date = $row[ 'day_name' ] . ', ' . $row[ 'month_name' ] . ' ' . $row[ 'day' ] . ', ' . $row[ 'year' ];
			if( array_key_exists( $schedule_date, $sorted_dict ) ){
				array_push( $sorted_dict[$schedule_date], $row );
			}
			else{
				$sorted_dict[ $schedule_date ] = array( $row );
			}
		}
		return $sorted_dict;
	}

	public function applyRequest( $ins_id ) {
		$data = array(
			'ins_id' => $ins_id,
			'stu_id' => $this->session->userdata( 'user_id' ),
			'approved' => 0
		);
		if( $this->db->insert( 'requests', $data ) ) {
			return TRUE;
		}
		return FALSE;
	}

	public function fetchInstructors() {
		$query = $this->db->query( 'SELECT f_name, l_name, users.email, mask(phone, "(###) ###-####") "phone", address, instructor.ins_id
							FROM instructor, requests, users
							WHERE instructor.ins_id = requests.ins_id
							AND instructor.user_id = users.id
							AND approved = 1' );
		return $query;
	}

	public function fetchDailyBooks( $stu_id ) {
		$query = $this->db->query( 'SELECT instructor.ins_id, instructor.f_name, instructor.l_name, users.email, mask(instructor.phone, "(###) ###-####") "phone", 
									DATE_FORMAT(schedule_date, "%m/%d/%Y") "schedule_date", TIME_FORMAT(start_time, "%h:%i %p") "start_time", TIME_FORMAT(end_time, "%h:%i %p") "end_time", 
									hours.hr_id, student.stu_id, dayname( schedule_date ) "day_name", monthname( schedule_date ) "month_name", day( schedule_date ) "day", year( schedule_date ) "year"
									FROM instructor, hours, bookings, student, users
									WHERE instructor.ins_id = hours.ins_id
									AND instructor.user_id = users.id
									AND hours.hr_id = bookings.hr_id
									AND bookings.stu_id = student.stu_id
									AND student.stu_id = ' . $stu_id .
								  ' AND schedule_date = current_date()
								    ORDER BY schedule_date ASC' );
		$sorted_dict = array();
		foreach( $query->result_array() as $row ) {
			$schedule_date = $row[ 'day_name' ] . ', ' . $row[ 'month_name' ] . ' ' . $row[ 'day' ] . ', ' . $row[ 'year' ];
			if( array_key_exists( $schedule_date, $sorted_dict ) ){
				array_push( $sorted_dict[$schedule_date], $row );
			}
			else{
				$sorted_dict[ $schedule_date ] = array( $row );
			}
		}
		return $sorted_dict;
	}
}
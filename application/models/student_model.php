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
		$instrument = $_POST[ 'instrument' ];
		$query = $this->db->query( 'SELECT f_name, l_name, users.email, mask(phone, "(###) ###-####") "phone", address, instructor.ins_id
									FROM instructor, instrument, users
									WHERE instructor.ins_id = instrument.ins_id
									AND instructor.user_id = users.id
									AND instrument = "' . $instrument . '"' );
		return $query;
	}

	public function fetchBooks( $stu_id ) {
		$query = $this->db->query( 'SELECT instructor.ins_id, instructor.f_name, instructor.l_name, users.email, mask(instructor.phone, "(###) ###-####") "phone", 
									DATE_FORMAT(schedule_date, "%m/%d/%Y") "schedule_date", TIME_FORMAT(start_time, "%H:%i") "start_time", TIME_FORMAT(end_time, "%H:%i") "end_time", 
									hours.hr_id, student.stu_id
									FROM instructor, hours, bookings, student, users
									WHERE instructor.ins_id = hours.ins_id
									AND instructor.user_id = users.id
									AND hours.hr_id = bookings.hr_id
									AND bookings.stu_id = student.stu_id
									AND student.stu_id = ' . $stu_id .
								  ' ORDER BY schedule_date ASC' );
		return $query;
	}
}
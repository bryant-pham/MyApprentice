<?php
/*
* Shared Model
*
* Contains functions used to perform functions shared by instructors and students
*/

class Shared_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}	

	public function deleteBook( $hr_id ) {
		if( $this->db->query( 'DELETE FROM bookings WHERE hr_id = ' . $hr_id ) ) {
			return TRUE;
		}
		return FALSE;
	}

	public function bookTimeslot( $stu_id, $hr_id ) {
		$this->db->query( 'INSERT INTO bookings VALUES (' . $stu_id . ', ' . $hr_id . ')' );
		
		//FIX: Check for insert errors later
	}

	public function fetchTimeslots( $ins_id ) {
		$query = $this->db->query( 'SELECT hr_id, schedule_date, start_time, end_time
									FROM hours
									WHERE ins_id = ' . $ins_id .
								  ' AND booked = "false"
								    ORDER BY schedule_date ASC' );
		return $query;
	}
}

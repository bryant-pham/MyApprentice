<?php
/**
* Instructor Model
*
* This class contains the functions used to perform instructor actions
*/

class Instructor_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function setTimeslots() {
		$date = $_POST[ 'date' ];
		for( $x = 1; $x < 7; $x++ ) {
			if( $_POST[ 'time'. $x ] ) {
				$start_time = $_POST[ 'time' . $x ];
				$start_time = strtotime( $start_time );
				$duration 	= $_POST[ 'duration' . $x ];
				$end_time 	= $start_time + $duration;
				$start_time = date( 'H\:i\:s', $start_time );
				$end_time 	= date( 'H\:i\:s', $end_time );

				$data = array(
					'schedule_date' => $date,
					'start_time' => $start_time,
					'end_time' => $end_time,
					'ins_id' => 1, //TODO: change this hard coded value later
					'booked' => 0
				);
				if( !( $this->db->insert( 'hours', $data ) ) ) {
					die();
				} //FIX: This does not correctly catch for an unsuccessful insert
			}
		}
		return TRUE;
	}

	public function fetchTimeslots() {
		$query = $this->db->query( 'SELECT hr_id, schedule_date, start_time, end_time
									FROM hours
									WHERE ins_id = 1
									AND booked = 0
									ORDER BY schedule_date ASC' ); //TODO: change this hard coded ins_id value later
		return $query;
	}

	public function fetchBooks() {
		$query = $this->db->query( 'SELECT student.f_name, student.l_name, student.email, student.phone, schedule_date, start_time, end_time, hours.hr_id
							FROM instructor, hours, bookings, student
							WHERE instructor.ins_id = hours.ins_id
							AND hours.hr_id = bookings.hr_id
							AND bookings.stu_id = student.stu_id
							AND instructor.ins_id = 1
							ORDER BY schedule_date ASC' ); //TODO: change hardcoded value
		return $query;
	}

	public function unsetTimeslot( $hr_id ) {
		if( $this->db->query( 'DELETE FROM hours WHERE hr_id = ' . $hr_id ) ) {
			return TRUE;
		}
		return FALSE;
	}
}
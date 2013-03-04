<?php
/**
* Instructor model
*
* This class contains functions used to perform instructor actions.
*/
class Instructor_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function setHours() {
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
					'ins_id' => 1 //TODO: change this hardcoded value later
				);
				if( !( $this->db->insert( 'hours', $data ) ) ) {
					die();
				}
			}
		}
		return TRUE;
	}

	public function fetchHours() {
		$query = $this->db->query( 'SELECT hr_id, schedule_date, start_time, end_time
									FROM hours
									WHERE ins_id = 1
									ORDER BY schedule_date asc' ); //TODO: change this hardcoded ins_id value later
		return $query;
	}

	public function fetchBooks() {
		$this->db->select( 'student.f_name, student.l_name, student.email, student.phone, schedule_date, start_time, end_time' );
		$this->db->from( 'instructor' );
		$this->db->join( 'hours', 'instructor.ins_id = hours.ins_id' );
		$this->db->join( 'bookings', 'hours.hr_id = bookings.hr_id' );
		$this->db->join( 'student', 'bookings.stu_id = student.stu_id' );
		$this->db->where( 'instructor.ins_id', 1 ); //TODO: change this hardcoded value later

		$query = $this->db->get();
		return $query;
	}
}
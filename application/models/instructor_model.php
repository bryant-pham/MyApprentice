<?php
/**
* Instructor Model
*
* This class contains the functions used to perform instructor actions
*/

class Instructor_model extends CI_Model {

	public function __construct() {
		parent::__construct();
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
					'ins_id' => $this->session->userdata( 'user_id' ), 
					'booked' => 0
				);
				if( !( $this->db->insert( 'hours', $data ) ) ) {
					die();
				} //FIX: This does not correctly catch for an unsuccessful insert
			}
		}
		return TRUE;
	}

	public function unsetTimeslot( $hr_id ) {
		if( $this->db->query( 'DELETE FROM hours WHERE hr_id = ' . $hr_id ) ) {
			return TRUE;
		}
		return FALSE;
	}

	public function fetchBooks( $ins_id ) {
		$query = $this->db->query( 'SELECT student.stu_id, student.f_name, student.l_name, users.email, mask(student.phone, "(###) ###-####") "phone", 
									DATE_FORMAT(schedule_date, "%m/%d/%Y") "schedule_date", TIME_FORMAT(start_time, "%h:%i %p") "start_time", TIME_FORMAT(end_time, "%h:%i %p") "end_time", 
									hours.hr_id, instructor.ins_id, dayname( schedule_date ) "day_name", monthname( schedule_date ) "month_name", day( schedule_date ) "day", year( schedule_date ) "year"
									FROM instructor, hours, bookings, student, users
									WHERE instructor.ins_id = hours.ins_id
									AND instructor.user_id = users.id
									AND hours.hr_id = bookings.hr_id
									AND bookings.stu_id = student.stu_id
									AND instructor.ins_id = ' . $ins_id .
								  ' ORDER BY schedule_date ASC' );
		$sorted_dict = array();
		foreach( $query->result_array() as $row ) {
			$schedule_date = $row[ 'day_name' ] . ', ' . $row[ 'month_name' ] . ' ' . $row[ 'day' ] . ', ' . $row[ 'year' ];
			if( array_key_exists( $schedule_date, $sorted_dict ) ){
				array_push( $sorted_dict[ $schedule_date ], $row );
			}
			else{
				$sorted_dict[ $schedule_date ] = array( $row );
			}
		}
		return $sorted_dict;
	}

	public function fetchRequests( $ins_id ) {
		$query = $this->db->query( 'SELECT f_name, l_name, users.email, mask(phone, "(###)###-####") "phone", address, student.stu_id
							FROM student, requests, users
							WHERE student.stu_id = requests.stu_id
							AND student.user_id = users.id
							AND approved = 0
							AND ins_id = ' . $this->user_id );
		return $query;
	}

	public function approveRequest( $stu_id, $ins_id ) {
		$data = array(
			'approved' => 1
		);
		$this->db->where( 'stu_id', $stu_id );
		$this->db->where( 'ins_id', $ins_id );
		if( $this->db->update( 'requests', $data ) ) {
			return TRUE;
		}
		return FALSE;
	}

	public function insertInstruments( $ins_id ) {
		$data = array();
		for( $x = 1; $x < 4; $x++ ) {
			if( $_POST[ 'instrument' . $x ] ) {
				$row = array(  
					'ins_id'     => $ins_id,
					'instrument' => $_POST[ 'instrument' . $x ]
				);
				array_push( $data, $row );
			}
		}
		if( $this->db->insert_batch( 'instrument', $data ) ) {
			return TRUE;
		}
		return FALSE;
	}

	public function fetchInstruments( $ins_id ) {
		$query = $this->db->get_where( 'instrument', array( 'ins_id' => $ins_id ) );
		return $query;
	}
}
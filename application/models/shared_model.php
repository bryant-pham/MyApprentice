<?php
/*
* Shared Model
*
* Contains functions used to perform functions shared by instructors and students
*/

class Shared_model extends CI_Model {

	public function __construct() {
		parent::__construct();
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
		$query = $this->db->query( 'SELECT hr_id, DATE_FORMAT(schedule_date, "%m/%d/%Y") "schedule_date", TIME_FORMAT(start_time, "%h:%i %p") "start_time", TIME_FORMAT(end_time, "%h:%i %p") "end_time",
									dayname( schedule_date ) "day_name", monthname( schedule_date ) "month_name", day( schedule_date ) "day", year( schedule_date ) "year"
									FROM hours
									WHERE ins_id = ' . $ins_id .
								  ' AND booked = "false"
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

	public function updatePersonalInfo() {
		$f_name  = $_POST[ 'f_name' ];
		$l_name  = $_POST[ 'l_name' ];
		$phone   = $_POST[ 'phone' ];
		$address = $_POST[ 'address' ];

		$data = array( 
			'f_name'  => $f_name,
			'l_name'  => $l_name,
			'phone'   => $phone,
			'address' => $address,
		);
		if( $this->session->userdata( 'user_type' ) == 'instructor' ) {
			$this->db->where( 'ins_id', $this->session->userdata( 'user_id' ) );
		}
		else $this->db->where( 'stu_id', $this->session->userdata( 'user_id' ) );

		if( $this->db->update( $this->session->userdata('user_type'), $data ) ) {
			return TRUE;
		}
		else return FALSE;
	}

	public function updateAccountInfo() {
		$email = $_POST[ 'email' ];
		$password = md5( $_POST[ 'password' ] );

		$data = array( 
			'email'  => $email,
			'password'  => $password,
		);
		$this->db->where( 'id', $this->session->userdata( 'account_id' ) );
		if( $this->db->update( 'users', $data ) ) {
			return TRUE;
		}
		else return FALSE;
	}
}

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
}

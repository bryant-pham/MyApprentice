<?php

include 'E:\wamp\www\models\database.php'; //TODO: Change directory accordingly

/**
* The following classes contain the functions users call for their various actions.
*
*
*/

class UserModel
{
	public $sql;
	public $db;

	public function __construct()
	{
		$this->db = new DatabaseLibrary();
	}

	public function login()
	{
		//some code
	}

	public function logout()
	{
		//some code
	}

	public function editProfile()
	{
		//some code
	}
}

class StudentModel extends UserModel
{
	//will have to think about how to retreive and pass $stu_id and $hr_id
	public function book( $stu_id, $hr_id )
	{
		$this->sql = "INSERT INTO bookings ( stu_id, hr_id ) VALUES (" . $stu_id . ", " . $hr_id . ")";
		if( $this->db->query( $this->sql ) )
		{
			echo "Successfully booked";
		}  
	}

	//will have to think about how to retreive and pass $hr_id
	public function unbook( $hr_id )
	{
		$this->sql = "DELETE FROM bookings WHERE hr_id = " . $hr_id;
		if( $this->db->query( $this->sql ) )
		{
			echo "Successfully unbooked";
		}  
	}

	//will have to think about how to retreive and pass $stu_id
	public function viewBooks( $stu_id )
	{
		$this->sql = "SELECT instructor.f_name, instructor.l_name, instructor.email, schedule_date, start_time, end_time
			    	  FROM instructor, hours, bookings, student
				      WHERE (instructor.ins_id = hours.ins_id)
					  AND (hours.hr_id = bookings.hr_id)
					  AND (bookings.stu_id = student.stu_id)
					  AND student.stu_id = " . $stu_id;
		$this->db->query( $this->sql );
		$result = $this->db->fetch();
		print_r( mysql_fetch_array( $result ) );  //TODO: will have to change this line later to retrieve result data more appropriately.
	}
}



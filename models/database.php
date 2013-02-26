<?php

/**
* This class contains the functions that execute database commands.
*
*
*/

class DatabaseLibrary
{
	private $db;
	private $result;

	public function __construct()
	{
		$this->db = mysql_connect('localhost','admin','admin'); 
		if ( !$this->db ) 
		{ 
			die('Could not connect to MySQL: ' . mysql_error()); 
		} 
		mysql_select_db( "test" );
	}

	/**
	* Function to execute query
	* @param 	$sql 	SQL query to be executed
	*/
	public function query( $sql )
	{
		$this->result = mysql_query( $sql );
		return TRUE;
	}

	/**
	* Function to return results of query
	* Returns raw query object; will need to use mysql_fetch_array() to extract array data
	*/
	public function fetch()
	{
		return $this->result;
	}

	public function disconnect()
	{
		mysql_close( $db );
	}
}
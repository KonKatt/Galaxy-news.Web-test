<?php 


Class Database 
{

	private function connect()
		{	
			$conn = mysqli_connect(HOST, USER, PASS, DB );

			if ($conn->connect_errno != 0)
				return FALSE;
			else 
				return $conn; 

		}


	public function query($query)  
	{	
		$con = $this->connect();
		$stm = $con->query($query); 

		if ($conn->connect_errno == 0)
			while ($row = $stm->fetch_assoc())
		{
			$result[]=$row;
		}

		$con->close();
		return $result;
	}


		public function get_row($query)  
	{	
		$con = $this->connect();
		$stm = $con->query($query); 
		if ($conn->connect_errno == 0) $row = $stm->fetch_assoc();
		
		$result = (int)(array_values($row)[0]);
	
		$con->close();

		return $result;
	}





}
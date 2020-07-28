<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

</body>
</html>
<?php

include_once 'DB_connection.php';

class crud extends DBconfig {
    public function __construct(){
        parent:: __construct();
    }

    public function getData($query){
        
        $result = $this->connection->query($query);
        if(!$result){
            echo("Execute command problem");
            return false;
            //exit;
        }

        $rows = array();

        while ($row = $result->fetch_assoc()){
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query){
        $result = $this->connection->query($query);
        if($result == false) return false;
        return true;
    }
	public function delete($id, $course_info){
        $query = "Delete from $course_info where id = $id";

        $result = $this->connection->query($query);

        if($result == false) 
			return false;
		
        return true;
    }
	   
}

?>
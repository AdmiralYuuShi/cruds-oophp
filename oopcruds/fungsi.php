<?php
class cruds{
    private function setConn(){
        $conn = mysqli_connect("localhost","root","","pangkalan");
        return $conn;
    }
    
	function readData($query){
		$execute = mysqli_query($this->setConn(),$query);
		while($data = mysqli_fetch_assoc($execute)){
			$d[] = $data;
		}
		return $d;
	}

	function createData($query){
		$data = mysqli_query($this->setConn(),$query);
		if($data > 0){
			return true;
		}else{
			echo "GAGAL";
		}
	}
}





?>
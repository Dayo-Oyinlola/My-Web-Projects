<?php
class DayoMysql{
	var $dbconnection;
	function DayoMysql($connection){ //initializes a database connection
	$this->dbconnection=$connection;

	}
	function display_error($message){
 	echo "<script type='text/Javascript'>
 		alert('".$message."');
 		history.go(-1);</script>";
 		

 	exit();
}
function greet($message){
	$this->display_error($message);
}
function stringComparison($stringa,$stringb){
	$arraya = explode(",", $stringa);
	$counta = count($arraya);
	$arrayb = explode(",", $stringb);
	$countb = count($arrayb);
	if ($counta==$countb){
		return true;
	}
	else{
		return false;
	}
}
function addlist($fields,$values,$table){
	if($fields==""|| $values=="" || $table==""){
		$this->display_error("There is an error with your request");
	}
	if(!$this->stringComparison($stringa,$stringb)){
		$this->display_error("Your fields must be equal to the values");
	}
	else{
		$query= "INSERT INTO $table(".$fields.")VALUES(".$values.")";	
	}
	$myq = mysqli_query($this->dbconnection, $query);
	if($myq){
		return true;
	}
	else{
		$this->display_error("Cannot insert into table");
	}

}
//insert multiple data into db
function multilist($field1,$value1,$field2,$value2,$field3,$value3,$field4,$value4,$field5,$value5,$field6,$value6,$table){
		$query= 'INSERT INTO $table($field1,$field2,$field3,$field4,$field5,$field6)VALUES("$value1","$value2","$value3","$value4","$value5","$value6")';	
	
	$myq = mysqli_query($this->dbconnection, $query);
	if($myq){
		return true;
		echo "Successfullly inserted";
	}
	else{
		$this->display_error("Cannot insert into table");
	}
}
function get_all_record ($table_name, $orderby, $order, $offset, $limit){
	if($table_name==""){
		$this->display_error("please enter table name for records");
	}elseif	(($orderby= "" && order !== "") || ($orderby !== "" && $order == "")){
		$this->display_error("please a field name to order by as well as the order format");
	}elseif($orderby !==""){
		$get_query = "SELECT * FROM $table_name ORDER BY ". $orderby. " ". $order;
	}else{
		$get_query = "SELECT * FROM". $table_name;
	}
	$myquery= mysqli_query($this->dbconnection, $get_query);
	return $myquery;
}

function getRowTwo($where, $whereval, $where1, $whereval1, $table)
    {

        if ($table == "") {

            $this->display_error("please enter table name");

        } elseif ( ($where == "" && $whereval != "") || ($where != "" && $where == "")) {

            $this->display_error("please enter a field");

        } else {
            $tquery = "SELECT * FROM " . $table . " WHERE " . $where . "='" . $whereval . "' and ". $where1 . "='" . $whereval1 . "'";
            $myquery = mysqli_query($this->dbconnection, $tquery);


            return mysqli_fetch_array($myquery);

        }

    }


}
?>
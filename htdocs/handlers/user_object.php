<?php
include_once("../refr/database.php");
class User {
    public $usrname = null;
    public $passwd = null;

public function __construct( $data1, $data2) {
			  $this->usrname = $data1;
			  $this->passwd = $data2;
}

public function storeFormValues( $param1, $param2 ) {
			  //store the parameters
			  $this->__construct( $param1, $param2 );
}

public function userLogin() {
				   //success variable will be used to return if the login was successful or not.
				   $success = false;
				  try{
					 //create our pdo object
					 $con = new PDO( DB_DSN, DB_USRNAME, DB_PASSWD );
					 //set how pdo will handle errors
					 $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					 //this would be our query.
					 $sql = "SELECT * FROM accounts WHERE username = :usrname AND password = :passwd LIMIT 1";

					  //prepare the statements
					 $stmt = $con->prepare( $sql );
					 //give value to named parameter :username
					 $stmt->bindValue( "usrname", $this->usrname, PDO::PARAM_STR );
					 //give value to named parameter :password
					 $stmt->bindValue( "passwd", $this->passwd, PDO::PARAM_STR );
					 $stmt->execute();

					 $valid = $stmt->fetchColumn();

					if( $valid ) {
						  $success = true;
					 }

					 $con = null;
					 return $success;
				 }catch (PDOException $e) {
					  echo $e->getMessage();
					  return $success;
				 }
}
//TODO:Check that identical ACCOUNT is not being registered!
public function register() {
	 $correct = false;
	 try {
			  $con = new PDO( DB_DSN, DB_USRNAME, DB_PASSWD );
			  $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			  $sql = "INSERT INTO accounts(username, password) VALUES(:usrname, :passwd)";

			  $stmt = $con->prepare( $sql );
			  $stmt->bindValue( "usrname", $this->usrname, PDO::PARAM_STR );
			  $stmt->bindValue( "passwd", $this->passwd, PDO::PARAM_STR );
			  $stmt->execute();
			  return "Registration Successful <br/> <a href='index.php'>Login Now</a>";
	   }catch( PDOException $e ) {
				 return $e->getMessage();
	   }
}
}
?>
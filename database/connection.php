<?
	try {    
		$connection = new PDO('mysql:host=localhost;dbname=dpo;charset=utf8', 'root','');
    }
 
	 catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}

?>
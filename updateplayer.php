<?php 
    if(isset($_POST)) 
	{

        $playerid = $_POST['playerid'];
        $treffer1 = $_POST['treffer1'];
        $treffer2 = $_POST['treffer2'];
        $playerelo_new = $_POST['playerelo_new'];

        $win = $_POST['win'];


		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "goatpong";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}


        $sql = "Update Player Set ELO = '$playerelo_new', Games = Games + 1, Win = Win + '$win' , Treffer = Treffer + '$treffer1', Gegentreffer = Gegentreffer + '$treffer2' WHERE ID = '$playerid'   ";


        if ($conn->query($sql) === TRUE) {


        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

         
    }    
    
?>
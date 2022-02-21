<?php
				$host = "localhost";
				$username = "root";
				$password = "";
				$db = "bank";
				
				$conn = new mysqli($host, $username, $password, $db);
				//$query = $_GET["query"];
				$sql = "SELECT *FROM transfer";



				
				$result = $conn->query($sql);
				if($result->num_rows > 0){
				 //echo"<table>";
				 echo"<table class=table table-striped ";
				 echo"<table class=table table-dark>";
				 echo"<table class=table table-bordered";
				 echo"<thead class=thead-dark>";
					echo"<tr>";

                    echo"<th scope=col>sender</th>";
					echo"<th scope=col>receiver</th>";
                    echo"<th scope=col>amount</th>";
                    
					
					echo"</tr>";
					echo"</thead>";
					while($row = $result->fetch_assoc()){
						echo"<tbody>";
						echo"<tr>";
						echo"<td>".$row['sender']."</td>";
                        echo"<td>".$row['receiver']."</td>";
						echo"<td>".$row['amount']."</td>";
                       
		
						echo"</tr>";
					} 
					
		
while($row = $result->fetch_assoc()){
						print_r($row);
						echo"<br><br>";
					}
					echo"</tbody>";
					
					echo"</table>";
				}
			?>
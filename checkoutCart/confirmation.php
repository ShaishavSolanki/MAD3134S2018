<?php

	
	print_r($_POST);
	
	//VALIDATION for text Fields 
	
	$name = $_POST["firstName"];
	$mail = $_POST["email"];
	$cc = $_POST["creditcard"];
	
	if(empty($name)){
		echo "<br>Enter Name<br>";
		return;
	}
	else if(empty($mail)){
		echo "<br>Enter Email<br>";
		return;
	}
	else if(empty($cc)){
		echo "<br>Enter CreditCard Number<br>";
		return;
	}
	else{
			echo "<br>Name: "."$name<br>";
			echo "Email: "."$mail<br>";
			
			// checking if creditcard is of 16 Digit
			if(strlen($cc) != 16){
				echo "<br>Credit Card must be of 16 Digit<br>";
			}
			else{
							
							// 0. reverse the CC number so all the 
					//   positions match the algorithm
					$reversed = strrev($cc);
					
					// 1. loop through the numbers in the cc
					$total = 0;
					
					for ($i=0; $i< 16; $i++) {
						// @debug: print out each character

						if ($i % 2 == 1) {
							// do multiply + convert
							$num = $reversed[$i] * 2;
							if ($num > 9) {
								//conversion
								$num = $num - 9;
							}
						}
						else {
							//do nothing
							$num = $reversed[$i];
						}
						
						
						// 3. add to the total!
						$total = $total + $num;
					
					} // end for loop
								
					// 4. after looping, do total % 10
					if ($total % 10 == 0) {
						echo "VALID CREDIT CARD! <br>";
					}
					else {
						echo "INVALID!!!! SADNESS! <br>";
					}
					echo "<br><h2>Order Confirmation</h2>";
				
				echo "<br>Hey "."$name<br>";
				echo "Thanks for your Order,<br>We have sent the Receipt on "."$mail";
				}
				//echo "Credit Card: "."$cc<br>";
				
				
		}


?>


























<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
       Order Confirmation
      </h1>
	  
	  
	  
	  
      <a href="checkout.php" > Go Back </a>
    </div>
  </section>
  </body>
</html>

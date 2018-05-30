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
        Checkout
      </h1>
      <p class="subtitle" style = "margin-bottom:50px">
        Please fill the details below.
      </p>
	  
	  <!-- form -->
		<form method="POST" action="confirmation.php">
					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">FirstName</label>
						</div>
						<div class="field-body">
							<div class="control">
							  <p class="control is-expanded has-icons-left">
								<input class="input" type="text" name="firstName" placeholder="FirstName">
								<span class="icon is-small is-left">
								  <i class="fas fa-user"></i>
								</span>
							  </p>
							</div>
			
						</div>
					</div>
			
			
					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Email</label>
						</div>
						<div class="field-body">
							<div class="control">
							  <p class="control is-expanded has-icons-left">
								<input class="input" type="text" name="email" placeholder="Email">
								<span class="icon is-small is-left">
									<i class="fas fa-envelope"></i>
								</span>

							  </p>
							</div>
			
						</div>
					</div>
					
					
					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">CreditCard</label>
						</div>
						<div class="field-body">
							<div class="control">
							  <p class="control is-expanded has-icons-left">
								<input class="input" type="text" name="creditcard" placeholder="CreditCard">
								<span class="icon is-small is-left">
								  <i class="fas fa-credit-card"></i>
								</span>
							  </p>
							</div>
			
						</div>
					</div>

				
					<div class="field is-horizontal">
					  <div class="field-label">
						<!-- Left empty for spacing -->
					  </div>
					  <div class="field-body">
						<div class="field">
						  <div class="control">
							<button class="button is-primary" >
							  Submit
							</button>
						  </div>
						</div>
					  </div>
					</div>
					
		</form>			
    </div>
  </section>
  </body>
</html>
<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    .wrapper h2 {
        text-align: center
    }

    .wrapper form .form-group span {
        color: red;
    }
    </style>
</head>

<body>
    <main>
        <h2>Expense Tracker</h2>
        <div class="container">
            <h4>Your Balance <?php echo $_SESSION['username']; ?></h4>
            <h1 id="balance">$0.00</h1>
            <div class="inc-exp-container">
                <div>
                    <h4>Income</h4>
                    <p id="money-plus" class="money-plus">
                        +$0.00
                    </p>
                </div>
                <div>
                    <h4>Expense</h4>
                    <p id="money-minus" class="money-minus">
                        -$0.00
                    </p>
                </div>
            </div>

       
      <h3>History</h3>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span
          ><button class="delete-btn">x</button>
        </li> -->
      </ul>
      <h3>Add New Transition</h3>
      <form id="form">
          <div class="form-control">
              <label for="text">Text</label>
              <input type="text" id="text" placeholder="Enter Text...."/>
          </div>
          <div class="form-control">
              <label for="amount">Amount <br> (negative - expense ,positive - income )</label>
              <input type="number" id="amount" placeholder="Enter amount..."> 
          </div>
          <button class="btn">Add transaction</button>
      </form>

      <a href="password_reset.php" style='text-align:center;text-decoration:none' class="btn btn-block btn-outline-warning">Reset Password</a>
			<a href="logout.php" style='text-align:center;text-decoration:none' class="btn btn-block btn-outline-danger">Sign Out</a>
    </div>
    <!-- JavaYscript Project  -->
    <script src="script.js"></script>
  </body>
</html>
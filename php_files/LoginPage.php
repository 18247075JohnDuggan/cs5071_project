<!DOCTYPE html>
<html lang="en">

<head>
  <title>Farm - Help | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" type="text/css" href="Style/menu.css" />
  <link rel="stylesheet" type="text/css" href="Style/content.css" />
  <link rel="stylesheet" type="text/css" href="Style/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&display=swap" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>

<body>

  <div id="main">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div id="menu">
      <div class="navbar">
        <div class="navbar-inner">
          <a class="brand" href="welcome.php" style="border-right: none;">Farm - Help</a>
        </div>
      </div>
    </div>

    <div id="content">
      <div id="loginPage">

        <div class="container-fluid">
          <div class="row justify-content-center align-items-center">
            <div id="login-box">
              <h2>Welcome!</h2>
                <form action="profilepage.php" method="post">
                <h1>Login</h1>
                <div>
                    <label for="Farm"> Farm-name :</label>
                    <input type="text" name="Farm" id="Farm">
                </div>
                <div>
                    <label for="password">Password         :</label>
                    <input type="password" name="password" id="password">
                </div>
                <section>
                    <button type="submit">Login</button>
                    <a href="SignUp.php">Register</a>
                </section>
                </form>

              <?php
              if (isset($_POST['login'])) {
                //first make sure the user is not already logged in
                session_start();
                session_unset();

                $dbhost = "sql200.infinityfree.com";
                $dbuser = "if0_34480540";
                $dbpass = "tILCQlAs453";
                $dbname = "if0_34480540_cs5071project";
                $connection = mysqli_connect($hostName, $email, $password, $databaseName);
                $Farm = mysqli_real_escape_string($connection, $_POST['Farm']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);

                // Check if the credentials are for a user
                $query = "SELECT Farm, Aniaml_ID, Animal_type, Animal_gender, user_id, email from farms where Farm = '$Farm' and password = '$password' and Farm = 'Farm X''";
                $result = mysqli_query($connection, $query);

                // if they are user credientials
                if (mysqli_num_rows($result) == 1) {
                  $row = mysqli_fetch_assoc($result);
                  $Farm = $row['Farm'];
                  $password = $row['password'];

                  // Add the user ID to the session
                  $_SESSION['Farm'] = $Farm;

                  header("Location: profilepage.php");

                  //else if they are business credentials
                } else {
                  $query2 = "SELECT * from business WHERE email = '$email' AND password = '$password'";
                  $result2 = mysqli_query($connection, $query2);
                  if (mysqli_num_rows($result2) == 1) {
                    $row = mysqli_fetch_assoc($result2);
                    $user_id = $row['company_id'];

                    // Add the user ID to the session
                    session_start();
                    $_SESSION['company_id'] = $user_id;
                    header("Location: companyPage.php");
                  } else {
                    echo "Login Failed";
                  }
                }
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

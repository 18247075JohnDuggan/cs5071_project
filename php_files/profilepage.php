<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farm - Help | Profile Page</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
    <link rel="stylesheet" type="text/css" href="Style/profilePage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&display=swap" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>

<body>

<div class="navbar">
  <link rel="stylesheet" type="text/css" href="Style/menu.css" />
  <div class="navbar-inner">
    <a class="brand" href="#">Farm-Help</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/animals.php") echo 'class="active"'; ?>><a href="animals.php">Animals</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/offspring.php") echo 'class="active"'; ?>><a href="offspring.php">Offspring</a></li>
      <li style="float: right;">
        <a href="LoginPage.php">Log Out</a>
      </li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/profilepage.php" && empty($_SERVER['QUERY_STRING'])) echo 'class="active"'; ?> style="float: right">
        <?php
        session_start();
        if (isset($_SESSION['user_id']) && !isset($_SESSION['company_id'])) {
          echo '<a href="profilepage.php">You</a>';
        } elseif (isset($_SESSION['company_id']) && !isset($_SESSION['user_id'])) {
          echo '<a href="Farms.php">You</a>';
        } else {
          session_unset();
          echo '<a href="LoginPage.php">You</a>';
        }
        ?>
      </li>
    </ul>
  </div>
</div>

<h1>Farm X's Profile page </h1>
        <div id="content">
            <div id="profilePage">
                <img id="userProfilePicture" src="profilePicture.svg" alt="user avatar" />
                </div>
                <div id="body">
                    <div id="left">
                        <h3>Farm-animals</h3>
                        <?php
                            $dbhost = "sql200.infinityfree.com";
                            $dbuser = "if0_34480540";
                            $dbpass = "tILCQlAs453";
                            $dbname = "if0_34480540_cs5071project";
   
                            $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
   
                        if(! $conn ) {
                            die('Could not connect: ' . mysql_error());
                                    }
   
                        $sql = "SELECT Farm, Aniaml_ID, Animal_type, Animal_gender, user_id, email from farms where Farm = 'Farm X'";
                        mysql_select_db('if0_34480540_cs5071project');
                        $retval = mysql_query( $sql, $conn );
   
                        if(! $retval ) {
                            die('Could not get data: ' . mysql_error());
                            }
   
                        while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                            echo 
                            "Farm :{$row['Farm']}<br> ".
                            "Animal ID : {$row['Aniaml_ID']} <br> ".
                            "Animal Type : {$row['Animal_type']} <br> ".
                            "Animal Gender : {$row['Animal_gender']} <br> ".
                            "User ID : {$row['user_id']} <br> ".
                            "Email : {$row['email']} <br> ".
                                "--------------------------------<br>";
                                        }
   
                            echo "Fetched data successfully\n";
   
                                    mysql_close($conn);
                        ?>
                        <!-- if user admin or owner of page allow adding of positions -->
                        <?php
                        session_start();
                        if ($_SESSION['admin'] == true || $userId == $_SESSION['user_id']) {
                            echo '<h3> Add farm History</h3>
                            <form method="post">
                                <input type="text" name="farm" placeholder="farm" required>
                                <input type="text" name="animal_type" placeholder="animal type" required>
                                <input type="text" name="animal_gender" placeholder="animal gender" required>
                                <button type="submit" class="btn btn-primary" name="addEmployment">Add +</button>
                            </form>';
                        }

                        if (isset($_POST['addEmployment'])) {
                            $connection = mysqli_connect($hostName, $userName, $password, $databaseName);
                            $farm = mysqli_real_escape_string($connection, $_POST['farm']);
                            $animal_type = mysqli_real_escape_string($connection, $_POST['animal_type']);
                            $animal_gender= mysqli_real_escape_string($connection, $_POST['animal_gender']);


                            $sql = 
                            "INSERT INTO farms (Farm, Aniaml_ID, Animal_type, Animal_gender, user_id, email, password) 
                             VALUES ('$Farm', $Aniaml_ID, '$Animal_type', 
                            '$Animal_gender', '$user_id', '$email', $password)";
                            $result = mysqli_query($connection, $sql);

                            if ($result) {
                                echo "Data inserted successfully!";
                            } else {
                                echo "Error: " . mysqli_error($connection) . " (" . mysqli_errno($connection) . ")";
                            }
                            mysqli_close($connection);
                        }
                        ?>

                    </div>



                </div>
                <div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

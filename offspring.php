<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farm - Help | Offspring </title>
    <link rel ='stylesheet' href="login.css"/>
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
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
  <link rel="stylesheet" type="text/css" href="Style/menu.css" />
  <div class="navbar-inner">
    <a class="brand" href="#">Farm-Help</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li <?php if ($_SERVER['PHP_SELF'] == "/animals.php") echo 'class="active"'; ?>><a href="animals.php">Animals</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/profilepage.php") echo 'class="active"'; ?>><a href="farms.php">Farms</a></li>
      <li style="float: right;">
        <a href="login.php">Log Out</a>
      </li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/profilePage.php" && empty($_SERVER['QUERY_STRING'])) echo 'class="active"'; ?> style="float: right">
        <?php
        session_start();
        if (isset($_SESSION['user_id']) && !isset($_SESSION['company_id'])) {
          echo '<a href="profilePage.php">You</a>';
        } elseif (isset($_SESSION['company_id']) && !isset($_SESSION['user_id'])) {
          echo '<a href="Farms.php">You</a>';
        } else {
          session_unset();
          echo '<a href="login.php">You</a>';
        }
        ?>
      </li>
    </ul>
  </div>
</div>
        </div>

        <div id=" content">
            <div id="search">
                <form action="" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Go</button>
                </form>
            </div>

        </div>

        <div id="content">
            <div id="Offspring">
                <h2> Offspring </h2>
                <?php
                $dbhost = "sql200.infinityfree.com";
                    $dbuser = "if0_34480540";
                    $dbpass = "tILCQlAs453";
                    $dbname = "if0_34480540_cs5071project";
                    $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);

                if(! $conn ) {
                            die('Could not connect: ' . mysql_error());
                                    }
   
                        $sql = "SELECT * from offspring";
                        mysql_select_db('if0_34480540_cs5071project');
                        $retval = mysql_query( $sql, $conn );
   
                        if(! $retval ) {
                            die('Could not get data: ' . mysql_error());
                            }
   
                        while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                            echo 
                            "Sire :{$row['Sire']}<br> ".
                            "Animal ID : {$row['Aniaml_ID']} <br> ".
                            "Animal Type : {$row['Animal_type']} <br> ".
                            "Animal Gender : {$row['Animal_gender']} <br> ".
                            "Dam : {$row['Dam']} <br> ".
                                "--------------------------------<br>";
                                        }
   
                            echo "Fetched data successfully\n";
   
                                    mysql_close($conn);

                

                // Check if a search query was submitted
                if (isset($_GET["query"])) {
                    $search_query = $_GET["query"];

                    // request based on search query
                    $query = "SELECT * FROM offspring WHERE Animal_id LIKE '%$search_query%'";
                } else {
                    // else show all
                    $query = "SELECT * FROM offspring";
                }

                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Name: " . $row["Animal_id"]. "<br>";
                    echo "Farm: " . $row["Farm"] . "<br>";
                    echo "<a href='profilePage.php?usersid=" . $row["users_id"] . "'>View Profile</a>";
                    echo "<br><br>";
                }

                // Close the database connection
                mysqli_close($connection);
                ?>



            </div>

        </div>

    </div>
</body>

</html>
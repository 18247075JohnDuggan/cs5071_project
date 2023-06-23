<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farm Help | Animals</title>
    <link rel = 'stylesheet' href="login.css">
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
            <?php include 'navBar.php'; ?>
        </div>

        <div id="content">
            <div id="search">
                <form action="" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Go</button>
                </form>
            </div>

        </div>

        <div id=" content">
            <div id="Animals">
                <h2> Animals </h2>
                <?php
                $hostName="sql200.infinityfree.com";
                $userName="if0_34480540";
                $password="Kingjon10@";
                $databaseName="epiz_33784251_cs5071_project";
                $connection=mysqli_connect($hostName,$userName,$password,$databaseName);

                //Checkifasearchquerywassubmitted
                if(isset($_GET["query"])){
                $search_query=$_GET["query"];

                //requestbasedonsearchquery
                $query="SELECT*FROManimalsWHEREAnimal_idLIKE'%$search_query%'ORAnimal_typeLIKE'%$search_query%'ORAnimal_gendarLIKE'%$search_query%'";
                }else{
                //elseshowall
                $query="SELECT*FROManimal";
                }

                $result=mysqli_query($connection,$query);

                while($row=mysqli_fetch_assoc($result)){
                echo"Name:".$row["Animal_id"]."".$row["Animal_Type"]."<br>";
                echo"Animals:".$row["Animal_id"]."<br>";
                echo"<a href = 'profilePage.php?userid=".$row["Animal_id"]."'>ViewProfile</a>";
                echo"<br><br>";
                }

                //Closethedatabaseconnection
                mysqli_close($connection);
                ?>
            </div>

        </div>

    </div>
</body>

</html>

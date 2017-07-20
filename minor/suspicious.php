<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Secure Logging</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
<div id="myModal">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SUSPICIOUS URLs</h4>
      </div>
      <div class="modal-body">

        <table style="align-items: center;" class="table table-hover">
        <tr style="font-weight: bold; font-size: 22px;">

                    <?php

                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "log";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);

                      // Check connection
                      if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                      } 
                      
                      $sql = "SELECT *FROM err_pg ";

                      $sql_run = mysqli_query($conn, $sql);
                      if (!$sql_run) {
                        echo "not running";
                      }
                      $count = 1;
                      while($row = mysqli_fetch_array($sql_run)){
                        global $count;
                        $q= $row['uri'];



                        echo "<tr><td>$count. $q<br></td></tr>";
                        $count++;
                      }
                      $conn->close();

                    ?>
         

    </table>

      </div>
      
    </div>

  </div>
</div>
</div>
</body>
</html>
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

<div id="myModal">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Specific Log</h4>
      </div>
      <div class="modal-body">
        <form action="search2.php" method="POST">

  <div class="form-group">
    <label for="email">Search By:</label>
    <select class="form-control" name="searchtype" id="searchtype"> 
        <option name='1' id='1'>Date(YYYY-MM-DD)</option>
        <option name='1' id='1'>IP</option>

    </select>

    <div class="form-group">
    <label for="email">Text:</label>
    <input type="text" class="form-control" name="text"  id="text">
  </div>
    
  </div>

  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
     
    </div>

  </div>
</div>
</body>
</html>



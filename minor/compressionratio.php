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


 <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #202020; ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" style="font-size: 50px;" href="admin.php">Minor Project</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="admin.php#admin">Admin</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="logout.php" >Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<div class="container" style="margin-top: 150px; margin-bottom: 70px;">
<div id="myModal">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Compression Ratio</h4>
      </div>
      <div class="modal-body">
      <?php



      	if ($_GET['id']==1) {
      		echo '<table style="align-items: center;" class="table table-hover">
      	<tr style="font-weight: bold; font-size: 22px;">
      		<td>
       		File Name
       	</td>
       	<td>
       		File Size
       	</td>
      	</tr>
        <tr>
            <td>
            	Original.txt :: 
            </td>
            <td>
            	
            ';?>
                 <?php

					echo filesize("C:\wamp64\www\Log\original.txt");
					echo "  bytes";
					
					?>
					<?php
					echo '
            </td>
            
            
        </tr>

       

         <tr>
            <td>
            	Compressed.txt :: 
            </td>
            <td>
            	
            ';?>
                 <?php

					echo filesize("C://wamp64//www//Log//encr_compressed.txt");
					echo "  bytes";
					
					?>
					<?php
					echo '
            </td>
            
        </tr>


        <tr>
            <td>
            	<strong>Compression Ratio ::</strong> 
            </td>
            <td><strong>
            	
            ';?>
                 <?php

					echo filesize("C://wamp64//www//Log//encr_compressed.txt")/filesize("C://wamp64//www//Log//original.txt");
					
					?>
					<?php
					echo '</strong>
            </td>
            
        </tr>



         

         

    </table>';
      	}
      	else{
      		echo '<button class="btn btn-xl" style="width: 560px; align-content: center; "><a class="btn btn-xl" href="compressionratio.php?id=1">Show Compression Ratio</a></button>  
';
      	}

      ?>

      </div>
      
    </div>

  </div>
</div>
</div>

<footer>
        <div class="container" style="background-color: #DCDCDC;">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy;  2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">MANIT BHOPAL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
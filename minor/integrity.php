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

<div class="container" style="margin-top: 150px;">
<div id="myModal">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log Tampering Check:</h4>
      </div>
      <div class="modal-body">
      <?php



      	if ($_GET['id']==7) {
                //Decompressing the encr_compressed file.
                //encr_decompressed.txt
                


                $filename3 = "C:\\wamp64\\www\\Log\\encr_compressed.txt";
                $handle = fopen($filename3, "r");
                $contents = fread($handle, filesize($filename3));

                $decompressed=gzuncompress($contents);

                $file4 = fopen("C:\\wamp64\\www\\Log\\encr_decompressed.txt","w");
                fwrite($file4,$decompressed);
                fclose($file4);




                //Decrypting the encrypted file.
                //decrypted.txt
                
                $filename4 = "C:\\wamp64\\www\\Log\\encr_decompressed.txt";
                $handle = fopen($filename4, "r");
                $contents = fread($handle, filesize($filename4));

                $DecryptedData=PHP_EOL.decryptData($contents);

                $file5 = fopen("C:\\wamp64\\www\\Log\\decrypted.txt","w");

                fwrite($file5,$DecryptedData);
                fclose($file5);


                $lines1 = file("C:\wamp64\www\Log\original.txt");
                $data2 = file_get_contents("C:\wamp64\www\Log\decrypted.txt");

                global $c1;
                global $c2;
                $c1=-1;
                $c2=0;
                foreach($lines1 as $line1){
                    $line1 = trim($line1);

                  $c2++;
                  if(!@strpos($data2, $line1)){
                      
                      $c1++;
                      echo $line1;
                      echo "<br />";
                  }

                }
                


                echo '<table style="align-items: center;" class="table table-hover">
        
        <tr>
            <td>
              Total lines in original.txt :: 
            </td>
            <td>
              
            ';?>
                 <?php

          echo $c2;
          
          
          ?>
          <?php
          echo '
            </td>
            
            
        </tr>

       

         <tr>
            <td>
              Total lines in decrypted.txt :: 
            </td>
            <td>
              
            ';?>
                 <?php

          echo $c2;

          
          ?>
          <?php
          echo '
            </td>
            
        </tr>


        <tr>
            <td>
              Uncommon Lines :: 
            </td>
            <td>
              
            ';?>
                 <?php

          echo $c1;

          
          ?>
          <?php
          echo '
            </td>
            
        </tr>


        <tr>
            <td>
              <strong>Suspicious Lines ::</strong> 
            </td>
            <td>
           
            </td>
            
        </tr>
    </table>';


      	}
      	else{
      		echo '<button class="btn btn-xl" style="width: 560px; align-content: center; "><a class="btn btn-xl" href="integrity.php?id=7">Check Integrity</a></button>';
      	}

      ?>
       
            




      	
      </div>
      
    </div>

  </div>
</div>
</div>

<footer>
        <div class="container">
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
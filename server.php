<?php

session_start();

// initializing variables

// LOGIN USER


if (isset($_POST['start']))
{
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'id10788410_jacks', '67890', 'id10788410_cyw');
    $username = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
        $query = "SELECT * FROM user WHERE id='$username' AND password='$password'";
      
        $result = mysqli_query($db, $query);
      
       
     
         $row = mysqli_fetch_assoc($result);
        	if(!$row)
    	{ 
           $_SESSION['message'] =  "Wrong username/password combination";
              header('location: index.php'); // TODO: better error handling
        }
       
    
        else
        {   
           
              $user = $row['id'];
            	$qid = $row['qid'];
             if (mysqli_num_rows($result) == 1 )
             {
              $_SESSION['user'] = $user;
              $_SESSION['qid'] = $qid;
              $_SESSION['qcount'] = 1;
              header('location: welcome.php');
             }
             else 
             {
 	         $_SESSION['message'] =  "Wrong username/password combination";
              header('location: index.php');
             }
        }
    
  }
  
  ?>

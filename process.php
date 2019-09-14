<?php
include_once('server.php');
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
// LOGIN USER
if (!isset($_POST['submit']))
{
       header('location:welcome.php');
}
if (isset($_POST['submit']))
{
    
// initializing variables
$code = $_POST['code'];
$qid = $_SESSION['qid'];
if($qid>20) $qid1 = (int)$qid-20;
else $qid1 = $qid;
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'id10788410_jacks', '67890', 'id10788410_cyw');
        $query = "SELECT * FROM data WHERE id='$qid1' AND code='$code'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
       
       if(!$row)
    	{ 
          header('location: welcome.php'); // TODO: better error handling
        }
        else
        {
        if (mysqli_num_rows($results) == 1) {

            $temp = ((int) $qid + 1)%40;
            if($temp==0) $temp=40;
          $_SESSION['qid'] = $temp;
          
         $count = (int) $_SESSION['qcount'] + 1;
          $_SESSION['qcount'] = $count;
         if($count==21) {
            header('location: z.php');
         }else{
           
          header('location: welcome.php');
         }
	  
        }
        else {
 	  
            header('location: welcome.php');
        }
    }
  }
  
  ?>

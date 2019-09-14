<?php
include_once('server.php');
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
if($_SESSION['qcount'] < 21)
{
     header('location:welcome.php');
}
if($_SESSION['qcount'] > 21)
{
     header('location:winner.php');
}

if(isset($_POST['submit']))
{
    if($_POST['code']=="ILU3000")
    {
         $_SESSION['qcount'] =(int) $_SESSION['qcount'] +1;
        header('location:winner.php');
    }
    else
    {
         header('location:z.php');
    }
}
   
    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
    <title>Crack Your Way</title>

</head>
<body>

       <?php
         $url = "./image/z.png";
         
       
       ?>
       
        <div class="float-right display-4"> <span>Welcome,<?php echo $_SESSION['user'] ?></span> </div>
         <div class="card-body">
         <div class="text-center display-1"> <span> Q:FINAL ONE</span> </div>
        <!-- For testing only , replace this with Actual image link below
         <img class="img-fluid" src="./image/test.png" alt="" >  -->
         
         <!--  Actual image link     -->
         <img class="img-fluid" src= "<?=$url?>" alt="<?php echo $url ?>">
          
         &nbsp;
         &nbsp;
                    <form method="post"  action="z.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="code" class="form-control" placeholder="Codeword">
                        </div>
        
                        <div class="form-group">
                        <div class="text-center">    <input type="submit" name="submit" value="Submit" class="btn btn-outline-danger btn-sx login_btn"> </div>
                        </div>
        
                    </form>
                </div>
</body>
</html>

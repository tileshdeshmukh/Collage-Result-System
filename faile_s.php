




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <section>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="subject.php">Subject Base</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="chtopper.php">Check Topper</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="overall.php">Over-all</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="faile_s.php">Faile-Students</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0 ml-auto" action="index.php" method="POST">
      <input class="form-control mr-sm-2 " name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="ser">Search</button>
     &nbsp;&nbsp;&nbsp;&nbsp; <a href="logout.php" style="color: red;">Log-Out</a>
    </form>
</nav>

</section>
<section >

<div class="">

  <br><br><br><br>
  <form action="faile_s.php" method="POST">
  <div class="container homeb pt-3 ">
      <label><h5>How many subject failed :</h5></label>
      <input type="number" name="fail" class="form-control w-50" placeholder="Number..">
      <button name="sub" class="btn btn-primary"> Search </button>
  </div>
</form><br>

<section>

<div class="container"> 
  <?php
include('db.php');
if(isset($_POST['sub']))
{
    $data = $_POST['fail'];
      $c1 = 0;
      

  ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger"><?php echo $data; ?> FAILE STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>SGPA</th>
                      
                      
                      <th>View</th>
                      
                    </tr>
                  </thead>

   <?php
  $co = 0;

  $q = mysqli_query($conn, "select * from data");

  while($r=mysqli_fetch_array($q))
  {

         $all = array($r['ds'], $r['toc'], $r['ml'], $r['cp'], $r['itr'], $r['em'], $r['it']);
            
            for($i=0; $i < count($all); $i++){
              if($all[$i] < 40) $co = $co+1;
                
                 
            }
    if($co == $data){
  ?>

 <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c1;?></b></td> 
                                                <td><b><?php echo $r['name'];?></b></td>
                                                <td><b><?php echo $r['enrollment'];?></b></td>
                                                <td><b><?php echo $r['sgpa'];?></b></td>
                                                
                                              
                                              
                                              <td><a href="result.php?e=<?php echo $r['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>

                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>








<?php }
$c1++;  }

}

?>

</table></div>

</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
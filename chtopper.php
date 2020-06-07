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
<br><br><br>
</section>
<div class="container">
  <form action="chtopper.php" method="POST">
  <center>


    </center> 
  </form>

</div>


</section>



<div class="container px-5">
          <br>
                        <center><h3 class="text-white text-danger">TOPPERS</h3></center><br></div>
                <div class="container px-5">
               <table class="table table-hover text-center">
                   <thead>             
                    <tr>
                      <th>SUBJECT</th>
                      <th>STUDENT</th>
                      <th>MARKS</th>
                      <th>VIEW</th>
                     
                    </tr>
                  </thead>
                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY ds DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'DS'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['ds'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php  }?>
                                              <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY toc DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'TOC'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['toc'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php  }?>
                                              <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY ml DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'ML'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['ml'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php  }?>
                                              <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY cp DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'CP'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['cp'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php } ?>


                                                                     <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY em DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'ITR'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['em'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php  }?>

                                                                     <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY em DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'EM'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['em'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head><?php  }?>

                                                                     <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data ORDER BY it DESC limit 1");
               
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              
                                                
                                                <td><b><?php echo 'IT'   ?></b></td>
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['it'];?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                                
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php  }?>

</div></table></div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
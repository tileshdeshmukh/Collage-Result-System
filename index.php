




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
      <a class="nav-link" href="fail_s.php">Fail-Students</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0 ml-auto" action="index.php" method="POST">
      <input class="form-control mr-sm-2 " name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="ser">Search</button>
     &nbsp;&nbsp;&nbsp;&nbsp; <a href="login.php" style="color: red;">Log-Out</a>
    </form>
</nav>

</section>
<section >

<div class="">

  <br><br><br><br>
  <form action="index.php" method="POST">
  <div class="container homeb pt-3 ">
      
      <button type="submit" class="btn btn-primary btn-lg " name="all">All Student Result</button>
      <button type="submit" class="btn btn-primary  btn-lg " name="topper">10 Topper Student</button>
      <button type="submit" class="btn btn-primary btn-lg " name="faild">All Faild Student</button>
      <button type="submit" class="btn btn-primary btn-lg " name="atkt">All ATKT Student</button>
    
  </div>
</form><br>








<hr style="border: 1px solid blue " class="mx-5">

<div class="row pl-5 ml-5">
  <div class="col-md-6">
<h5>Uploade New CSV Data File  : &nbsp;<a href="im.php"><input class="btn btn-outline-dark" name="up"  type="submit" value="Chooce File" > </a>
</h5>
</div>
<div class="col-md-6">
<h5>Insert backlock passout data  : &nbsp;<a href="im1.php"><input class="btn btn-outline-danger" name="bup"  type="submit" value="Chooce File" > </a>
</h5><br>
</div></div></div>








</section>

</section>

<section>
<div class="container"> 
      <?php 

        include('db.php');
        if (isset($_POST['all'])) {
          
        ?>
        <div class="px-5">
          
                        <center><h3 class="text-white text-danger">All STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>SGPA</th>
                      <th>CGPA</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>PDF</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data");
                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['sgpa'];?></b></td>
                                                <?php if($row['rpass'] == 'rpass'){ ?>
                                              <td><b><?php echo $row['cgpa'];?><span class="text-danger">*</span></b></td>
                                            <?php } else{
                                              
                                            ?>
                                            <td><b><?php echo $row['cgpa'];?></b></td>
                                            <?php
                                          } ?>
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <td><a href="print.php?id=<?php echo $row['id'] ?>"><button type="submit" name="pdf" class="btn btn-success"> PDF </button></a></td>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>
</div>
</section>




<section>
<div class="container"> 
      <?php 

        include('db.php');
        if (isset($_POST['topper'])) {
          
        ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger">First 10 Topper STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>Current Sem SGPA</th>
                      <th>SGPA</th>
                      <th>View</th>

                      <th>Edit</th>
                      <th>PDF</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data order by sgpa DESC LIMIT 10");
                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['sgpa'];?></b></td>
                                              <?php if($row['rpass'] == 'rpass'){ ?>
                                              <td><b><?php echo $row['cgpa'];?><span class="text-danger">*</span></b></td>
                                            <?php } else{
                                              
                                            ?>
                                            <td><b><?php echo $row['cgpa'];?></b></td>
                                            <?php
                                          } ?>
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <td><a href="print.php?id=<?php echo $row['id'] ?>">PDF</a></td>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>
</div>
</section>




<section>
<div class="container"> 
      <?php 

        include('db.php');
        if (isset($_POST['faild'])) {
          
        ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger">All Faild STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>SGPA</th>
                      <th>CGPA</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>PDF</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data where sgpa = 0");
                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['sgpa'];?></b></td>
                                              <?php if($row['rpass'] == 'rpass'){ ?>
                                              <td><b><?php echo $row['cgpa'];?><span class="text-danger">*</span></b></td>
                                            <?php } else{
                                              
                                            ?>
                                            <td><b><?php echo $row['cgpa'];?></b></td>
                                            <?php
                                          } ?>
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>

                                            <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <td><a href="print.php?id=<?php echo $row['id'] ?>">PDF</a></td>
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>
</div>
</section>





<section>
<div class="container"> 
      <?php 

        include('db.php');
        if (isset($_POST['atkt'])) {
          
        ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger">All ATKT STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>SGPA</th>
                      <th>CGPA</th>
                      <th>Status</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>PDF</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data where sgpa = 0 or cgpa = 0");
                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['sgpa'];?></b></td>
                                                <td><b><?php echo $row['cgpa'];?></b></td>
                                                <td><b><?php echo 'ATKT';?></b></td>
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <td><a href="print.php?id=<?php echo $row['id'] ?>">PDF</a></td>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>
</div>
</section>


<section>
<div class="container"> 
      <?php 

        include('db.php');
        if (isset($_POST['ser'])) {
        $s = $_POST['search'];
          
        ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger">All ATKT STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th>SGPA</th>
                      <th>CGPA</th>
                      
                      <th>View</th>
                      <th>Edit</th>
                      <th>PDF</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  data where name LIKE '%".$s."%' ");
                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                  ?>
                                      

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['sgpa'];?></b></td>
                                                 <?php if($row['rpass'] == 'rpass'){ ?>
                                              <td><b><?php echo $row['cgpa'];?><span class="text-danger">*</span></b></td>
                                            <?php } else{
                                              
                                            ?>
                                            <td><b><?php echo $row['cgpa'];?></b></td>
                                            <?php
                                          } ?>
                                              
                                              
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>

                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>
</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
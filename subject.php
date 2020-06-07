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
<br><br><br><br>
</section>
<div class="container">
  <form action="subject.php" method="POST">
  <center>
    <label class="form" >
    <h4>Selct Subject</h4></label>
    
<select class="form-control w-50" name="sel" style="border: 2px solid black" required="required">
  <option></option>
  <option>ds</option>
  <option>iot</option>
  <option>cp</option>
  <option>ml</option>
  <option>toc</option>
  <option>itr</option>
</select>
<div class="homeb2 pt-5">

<button type="submit" name="pass" class="btn btn-success">Pass</button>
<button type="submit" name="faild" class="btn btn-danger">Faild</button>
</div>
    </center> 
  </form>

</div>


</section>


<?php
include('db.php');
if(isset($_POST['pass']))
{
  $c = $_POST['sel'];



?>
<div class="container px-5">
          <br>
                        <center><h3 class="text-white text-danger">All STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th><?php echo $_POST['sel'];?></th>
                      <th>status</th>
                      <th>View</th>
                      
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
                                                <?php if( $row[$_POST['sel']] >= 40){ ?>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['ds'];?></b></td>
                                              <td><b><?php echo 'PASS';?></b></td>
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <?php } ?>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>



<?php
include('db.php');
if(isset($_POST['faild']))
{
  $ch = $_POST['sel'];



?>
<div class="container px-5">
          <br>
                        <center><h3 class="text-white text-danger">All STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      <th><?php echo $_POST['sel'];?></th>
                      <th>status</th>
                      <th>View</th>
                      
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
                                                <?php if( $row[$_POST['sel']] < 40){ ?>
                                                <td><b><?php echo $c;?></b></td> 
                                                <td><b><?php echo $row['name'];?></b></td>
                                                <td><b><?php echo $row['enrollment'];?></b></td>
                                                <td><b><?php echo $row['ds'];?></b></td>
                                              <td><b class="text-danger"><?php echo 'FAILD';?></b></td>
                                              <td><a href="result.php?e=<?php echo $row['enrollment']; ?>"><button type="submit" name="result" class="btn btn-outline-primary">Result</button></a></td>
                                              <td><a href="up.php?id=<?php echo $row['id'] ?>"><button type="submit" name="result" class="btn btn-outline-danger">Update</button></a></td>
                                              <?php } ?>
                                            
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        

<?php $c++; } } }?>

</table></div>








<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
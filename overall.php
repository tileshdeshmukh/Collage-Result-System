<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Over-all</title>
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
</nav>s</section>
<br><br><br>

<center><h4 class="text-dark pt-4">Over -all Result</h4></center>
<br>
<section>

  <div class="container-fluid pr-5" >
    <center>
      <table class="table table-hover text-center w-50">
                   <thead>             
                    <tr>
                    
                      <th>SGPA(option)</th>
                      <th>SGPA</th>
                      
                      
                    </tr>
                  </thead>
<?php
include('db.php');
$c1 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] >= 9 && $r1['sgpa'] <=10){
    $c1++;
  }}
?>

<?php
include('db.php');
$c2 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] >= 8 && $r1['sgpa'] <=9){
    $c2++;
  }}
?>


<?php
include('db.php');
$c3 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] >= 7 && $r1['sgpa'] <=8){
    $c3++;
  }}
?>



<?php
include('db.php');
$c4 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] >= 6 && $r1['sgpa'] <=7){
    $c4++;
  }}
?>


<?php
include('db.php');
$c5 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] >= 5 && $r1['sgpa'] <=6){
    $c5++;
  }}
?>


<?php
include('db.php');
$c6 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] > 5){
    $c6++;
  }}
?>

<?php
include('db.php');
$c = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {

    $c++;
  }
?>

<?php
include('db.php');
$c7 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] == 0){
    $c7++;
  }}
?>


<?php
include('db.php');
$c8 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while ($r1=mysqli_fetch_array($q1)) {
  if($r1['sgpa'] != 0){
    $c8++;
  }}
?>


<?php
include('db.php');
$c9 = 0;
$q1 = mysqli_query($conn, "select * from data ");
while($r1=mysqli_fetch_array($q1)) {
  if($r1['ds'] < 40 && $r1['toc'] < 40 && $r1['ml'] < 40 && $r1['cp'] < 40 && $r1['itr'] < 40 && $r1['em'] < 40 && $r1['it'] < 40 && $r1['ds_lab'] < 40 && $r1['ml_lab'] < 40){
    $c9++;
  }}
?>



                  <head>
                         <tbody>

                            <tr>
                              <td><b>Total Appeared</b></td>
                             <td><b><?php echo $c;?></b></td>
                           </tr>
                             <tr>
                              <td>(9.00 To 10.00)</b></td>
                             <td><?php echo $c1;?></td>
                           </tr>
                           <tr>
                              <td>(8.00 To 9.00)</b></td>
                             <td><?php echo $c2;?></td>  
                             </tr>
                              <td>(7.00 To 8.00)</b></td>
                             <td><?php echo $c3;?></td> 
                             <tr>
                              <td>(6.00 To 7.00)</b></td>
                             <td><?php echo $c4;?></td> 
                          </tr>
                              <td>(5.00 To 6.00)</b></td>
                             <td><?php echo $c5;?></td>
                             </tr>
                             <tr>
                              <td>(below 5)</b></td>
                             <td><?php echo $c6;?></td>  

                          </tr>

                          <tr>
                              <td><b>Total All Clear</b></td>
                             <td><b><?php echo $c8;?></b></td>
                             </tr>
                          <tr>
                              <td>ATKT</b></td>
                             <td><?php echo $c7;?></td>
                             </tr>
                             <tr>
                              <td>All Clear + ATKT</b></td>
                             <td><?php echo $c7+$c8;?></td>
                             </tr>
                             <tr>
                              <td><b>Totle Fail</b></td>
                             <td><b><?php echo $c9;?></b></td>
                             </tr>
                                <tr>
                              <td><b>% Result Without ATKT </b></td>
                             <td><b><?php echo $c8*$c/100;?>.00 %</b></td>
                             </tr>
                               <tr>
                              <td><b>% Result With ATKT </b></td>
                             <td><b><?php echo $c8+$c7*$c/100;?> %</b></td>
                             </tr>
                        </tbody>
                      </head>

</table></center>
</div>
</section>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
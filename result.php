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


<section>
  <br><br><br>
  <center class="pt-5" style="color: black"><h4>RESULT</h4></center>
  <div class="container">
    <hr style="border-color: 4px solid blue">


    <div>
       <?php
    include('db.php');
      $e = $_GET['e'];
      $q = mysqli_query($conn, "select * from data where enrollment = $e ");
      while ($row = mysqli_fetch_array($q)) {
        
      
    ?>

       <h6 style=""><b>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;<b style="color: blue"><?php echo $row['name']; ?></b></h6>
        <h6 style=""><b>Enrollment No :</b>&nbsp;<b style="color: blue"><?php echo $row['enrollment']; ?></b></h6>
        <br>
          <?php }?>
 

    <?php
    include('db.php');
      $e = $_GET['e'];
      $q = mysqli_query($conn, "select * from data where enrollment = $e ");
      while ($row = mysqli_fetch_array($q)) {
        
      
    ?>
    <div class="px-5">
            <table class="table table-hover text-left">
                   <thead>             
                    <tr>
                      
                       <th><b>Subject Name</b></th>
                      <th><b>Marks</b></th>
                      <th><b>Status</b></th>
                      
                      
                    </tr>
                  </thead>
    
                              <head>
                                            <tbody>
                                              <tr>
                                                <td><b>Database System</b></td> 
                                                <td><b><?php echo $row['ds'];?></b></td>
                                                <td><?php if ($row['ds'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>

                                            <tbody>
                                              <tr>

                                            <td><b>Machine Learning</b></td> 
                                                <td><b><?php echo $row['ml'];?></b></td>
                                                <td><?php if ($row['ml'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>


                                               </tr>

                                            </tbody>

                                                <tbody>
                                              <tr>

                                               <td><b>Theory of Computations</b></td> 
                                                <td><b><?php echo $row['toc'];?></b></td>
                                                <td><?php if ($row['toc'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                            
                                               </tr>

                                            </tbody>


                                                <tbody>
                                              <tr>

                                               <td><b>Competitive Programing</b></td> 
                                                <td><b><?php echo $row['cp'];?></b></td>
                                              <td><?php if ($row['cp'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>



                                                <tbody>
                                              <tr>

                                               <td><b>Introduction of Research</b></td> 
                                                <td><b><?php echo $row['itr'];?></b></td>
                                              <td><?php if ($row['itr'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>


                                                <tbody>
                                              <tr>

                                               <td><b>Economic & Management</b></td> 
                                                <td><b><?php echo $row['em'];?></b></td>
                                              <td><?php if ($row['em'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>

                                                <tbody>
                                              <tr>

                                               <td><b>Industrial Training</b></td> 
                                                <td><b><?php echo $row['it'];?></b></td>
                                              <td><?php if ($row['it'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>

                                                <tbody>
                                              <tr>

                                               <td><b>Database Laboratory</b></td> 
                                                <td><b><?php echo $row['ds_lab'];?></b></td>
                                              <td><?php if ($row['ds_lab'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>


                                                <tbody>
                                              <tr>

                                               <td><b>Machine Learning Laboratory</b></td> 
                                                <td><b><?php echo $row['ml_lab'];?></b></td>
                                            <td><?php if ($row['ml_lab'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>


                                                <tbody>
                                              <tr>

                                               <td><b>Seminar</b></td> 
                                                <td><b><?php echo $row['seminar'];?></b></td>
                                            <td><?php if ($row['seminar'] >= 40) {
                                                  echo '<b>PASS</b>';
                                                }else {echo '<b style="color:red;">Faild<b>';} 
                                                ?></td>
                                               </tr>

                                            </tbody>
                                               <tbody>
                                              <tr>


                                             
          
          
          <tr>
            <th></th>
            <th style="color: blue"> SGPA </th>
            <th style="color: blue"> CGPA </th>
          </tr>
        

        
          <tr>
            <td></td>
            <td style="color: blue">
              <?php

              if ($row['ds'] >= 40 && $row['toc'] >= 40 && $row['ml'] >= 40 && $row['cp'] >= 40 && $row['itr'] >= 40 && $row['em'] >= 40 && $row['it'] >= 40 && $row['ds_lab'] >= 40 && $row['ml_lab'] >= 40 && $row['seminar'] >= 40) {
              

              ?>
              <?php if($row['rpass'] == 'rpass'){ ?>
              <b><?php echo $row['sgpa'];?><span class="text-danger">*</span>&nbsp;%</b>
            <?php } else { ?>
              <b><?php echo $row['sgpa'];?>&nbsp;%</b> <?php } ?>
            <?php }else { 
              echo '<b>ATKT</b>';
              $c= 1;} 
            ?> </td>

            <td style="color: blue">
              
                
            <?php if($row['rpass'] == 'rpass') { ?>
              <b><?php echo $row['cgpa'];?><span class="text-danger">*</span>&nbsp;%</b></td>
            <?php } else { ?>
              <b><?php echo $row['sgpa'];?>&nbsp;%</b>
            </tr>
            <?php } ?>
            
        
       
  </tr>

                                            </tbody>
                                          </head>
                                        
                                      </table>
    
        </div>

      
<?php }?>
    </div>

  </div>

</section>







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
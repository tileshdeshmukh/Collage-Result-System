<?php 
include('db.php');
$sql = mysqli_query($conn, "select * from data where id = '".$_GET['id']."' ");
while($r1=mysqli_fetch_array($sql)) {

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Add Icon Link -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>admin</title>
    <style type="text/css">
     
    </style>
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
    <br>
</nav>
<br>
</section>
<br>
<form action="up.php?id=<?php echo $_GET['id'] ?>;" method="POST" class="p-5">
<br>
<div class="p-5 m-5  btn-outline-primary text-dark">
    <center><h2>Update Data Nmae : <span class="text-danger"><?php echo $r1['name']?></span></h2></center>
    <div class="form-group">
    <label for="formGroupExampleInput">enrollment</label>
    <input type="number" value="<?php echo $r1['enrollment']; ?>" class="form-control" id="formGroupExampleInput" placeholder="enter number" name="no" required="required">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">name</label>
    <input type="text" value="<?php echo $r1['name']; ?>" class="form-control" id="formGroupExampleInput2" placeholder="name" name="name" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">ds</label>
    <input type="number" class="form-control" id="formGroupExampleInput" value="<?php echo $r1['ds']; ?>" placeholder="enter number" name="ds" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">toc</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="enter number" value="<?php echo $r1['toc']; ?>" name="toc" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">ml</label>
    <input type="number" class="form-control" value="<?php echo $r1['ml']; ?>" id="formGroupExampleInput" placeholder="enter number" name="ml" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">cp</label>
    <input type="number" class="form-control" id="formGroupExampleInput" value="<?php echo $r1['cp']; ?>" placeholder="enter number" name="cp" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">itr</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="enter number" value="<?php echo $r1['itr']; ?>" name="itr" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">em</label>
    <input type="number" class="form-control" id="formGroupExampleInput" value="<?php echo $r1['em']; ?>" placeholder="enter number" name="em" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">it</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="enter number" value="<?php echo $r1['it']; ?>" name="it" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">ds lab</label>
    <input type="number" class="form-control" value="<?php echo $r1['ds_lab']; ?>" id="formGroupExampleInput" placeholder="enter number" name="dslab" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">ml Lab</label>
    <input type="number" value="<?php echo $r1['ml_lab']; ?>" class="form-control" id="formGroupExampleInput" placeholder="enter number" name="mllab" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">Seminar</label>
    <input type="number" class="form-control" value="<?php echo $r1['seminar']; ?>" id="formGroupExampleInput" placeholder="enter number" name="seminar" required="required">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">sgpa</label>
    <input value="<?php echo $r1['sgpa']; ?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="enter number" name="sgpa" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">cgpa</label>
    <input type="text" value="<?php echo $r1['cgpa']; ?>" class="form-control" id="formGroupExampleInput" placeholder="enter number" name="cgpa" required="required">
  </div>


  <div class="form-group">
    <input type="submit" name="btn" value="Update" class="form-control btn btn-dark text-white">
  </div>

</div>
</form>

<?php } ?>
<?php
include("db.php");
$id = $_GET['id'];
if(isset($_POST['btn']))
{
    $no =$_POST['no'];
    $name =$_POST['name'];
    $ds =$_POST['ds'];
    $toc =$_POST['toc'];
    $ml =$_POST['ml'];
    $cp =$_POST['cp'];
    $itr =$_POST['itr'];
    $em =$_POST['em'];
    $it =$_POST['it'];
    $dslab =$_POST['dslab'];
    $mllab =$_POST['mllab'];
    $seminar =$_POST['seminar'];
    $sgpa =$_POST['sgpa'];
    $cgpa =$_POST['cgpa'];



               $r = mysqli_query($conn, "UPDATE data SET enrollment = '".$no."', name = '".$name."', ds = '".$ds."', toc = '".$toc."', ml = '".$ml."', cp = '".$cp."', itr = '".$itr."', em = '".$em."', it = '".$it."', ds_lab = '".$dslab."', ml_lab = '".$mllab."', seminar = '".$seminar."', sgpa = '".$sgpa."', cgpa = '".$cgpa."', rpass = 'rpass' WHERE id = '".$_GET['id']."' ");

               if($r)
               {
                  
                    echo '<script>alert("Data Update");</script>';
                    
               }else{
                echo '<script>alert("Data Update");</script>';
               }

}
?>




    </form><br><br>



</div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
   include('db.php');
    if(isset($_POST["submit"]))
{
    /*   $ql = mysqli_query($conn, "select * from data");
       while ($rrr=mysqli_fetch_array($ql)) {

                    $del = mysqli_query($conn, "DELETE FROM data WHERE id = '".$rrr['id']."' ");
                }*/

    if($_FILES['file']['name'])
    {
        $filename = explode(".", $_FILES['file']['name']);
        if($filename[1] == 'csv')
        {
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while($data = fgetcsv($handle))
            {
                $item0 = mysqli_real_escape_string($conn, $data[0]);  
                $item1 = mysqli_real_escape_string($conn, $data[1]);
                $item2 = mysqli_real_escape_string($conn, $data[2]);
                $item3 = mysqli_real_escape_string($conn, $data[3]);
                $item4 = mysqli_real_escape_string($conn, $data[4]);
                $item5 = mysqli_real_escape_string($conn, $data[5]);
                $item6 = mysqli_real_escape_string($conn, $data[6]);
                $item7 = mysqli_real_escape_string($conn, $data[7]);
                $item8 = mysqli_real_escape_string($conn, $data[8]);
                $item9 = mysqli_real_escape_string($conn, $data[9]);
                $item10 = mysqli_real_escape_string($conn, $data[10]);
                $item11 = mysqli_real_escape_string($conn, $data[11]);
                $item12 = mysqli_real_escape_string($conn, $data[12]);
                $item13 = mysqli_real_escape_string($conn, $data[13]);
                $item14 = mysqli_real_escape_string($conn, $data[14]);
               
             
                      $query = "UPDATE data SET enrollment = $item0, name = $item1, ds = $item2, toc = $item3, ml = $item4, cp = $item5, itr = $item6, em = $item7, it = $item8, ds_lab = $item9, ml_lab = $item10, seminar = $item11, sgpa = $item12, cgpa = $item13, rpass = $item14 WHERE enrollment = $item0 ";
                mysqli_query($conn, $query);
            }
            fclose($handle);
            echo "<script>alert('Import done');</script>";
        }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Add Icon Link -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>admin</title>
    <style type="text/css">
     
    </style>
  </head>
  <body>


    <div class="p-5">


    <form action="im1.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Select CSV File:</label>
            <input type="file" name="file" />
            
            <input type="submit" name="submit" value="Import" class="btn btn-primary" />
        </div>
</form>




    </form><br><br>



</div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
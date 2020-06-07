<?php
//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 require_once 'pdf.php';
 include('db.php');
 $output = '';
 $statement = $connect->prepare("
  SELECT * FROM data 
  WHERE id = :order_id
  LIMIT 1
 ");
 $statement->execute(
  array(
   ':order_id'       =>  $_GET["id"]
  )
 );
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '

<h1>PDF
  		
';
  




  $output .= '
      </h1>
  ';
 }
 $pdf = new Pdf();
 $file_name = 'Invoice-'.$row["id"].'.pdf';
 $pdf->loadHtml($output);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}
?>
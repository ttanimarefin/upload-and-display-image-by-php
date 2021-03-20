<?php
error_reporting(0);
?>
<html>
   <body>
         <form action="" method="post" enctype="multipart/from-data">
         <input type="file" name="uploadfile" value="">
         <input type="submit" name="btnsubmit" value="Upload File ">
   </body>
</html>

<?php
 
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder = "people/".$filename;
  move_uploaded_file($tempname,$folder);
  echo "<img src='$folder' height='200' width='150'>";

?>

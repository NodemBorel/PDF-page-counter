<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
    
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         $pdf = file_get_contents("uploads/".$file_name);
    $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
    echo "<br><h1>The number of pages inside pdf document is ". $number . "</h1><br>";
   }
      
  
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" accept=".pdf" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
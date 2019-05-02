<?php
   $json = $_POST['json'];
   echo $json."hi";
   /* sanity check */
   if (json_decode($json) != null)
   {
     $file = fopen('timetable.json','w+');
     fwrite($file, $json);
     fclose($file);
   }
   else
   {
     echo "error";
   }
?>

<?php  
require 'connect.php';

if(isset($_POST['search_term'])==true && empty($_POST['search_term'])==false)
{
   $search_term= mysqli_real_escape_string($link,$_POST['search_term']);
   $query="SELECT cityName FROM cities WHERE cityName LIKE '$search_term%'";
   $result=  mysqli_query($link, $query);
   
   
   while($row=  mysqli_fetch_assoc($result))
   {
       echo "<li>".$row['cityName']."</li>";
   }
}


?>
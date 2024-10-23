<link href="table.css" rel="stylesheet">
									
<?php
include("db.php");
$query="SELECT * FROM courese WHERE 1";
 $res=mysqli_query($con,$query);
 echo "<center>";
 
 echo "<table cellspacing='5px' cellpadding='10px'>";
 echo "<tr>"; 
 echo " <th>Name</th>";
 echo  "<th>Image</th>";
 echo  "<th>Discription</th>";
 
 echo  "</tr>";  
 
      while($row=mysqli_fetch_assoc($res))
{
    echo "<tr>"; 
 echo " <td>".$row['courese_name']."</td>";
 echo  "<td><img src='admin/img/".$row['image']."' height=50 width=50></td>";
 echo  "<td>".$row['courese_dis']."</td>";
 
 echo  "</tr>";  
   
}

echo "</table>";
echo "</center>";
?>


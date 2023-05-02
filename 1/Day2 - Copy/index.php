<?php
include("include/header.php");
$query="select std_roll, std_name, std_course, std_section from student";
$result=mysqli_query($con, $query);
?>
<table>
  <tr>
   <th>ROLL</th>
   <th>NAME</th>
   <th>COURSE</th>
   <th>SECTION</th>
  </tr>
  <?php
  while($fetch=mysqli_fetch_object($result))
  {
   ?>
  <tr>
    <td><?php echo $fetch->std_roll;?></td>
    <td><?php echo $fetch->std_name;?></td>
    <td><?php echo $fetch->std_course;?></td>
    <td><?php echo $fetch->std_section;?></td>
  </tr>
  <?php 
  } 
  ?>
  </table>
<?php
include("include/footer.php");
?>  
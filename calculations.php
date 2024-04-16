<?php
  $SideA= $_POST['side'];
  $Perimeter = $SideA*6;
  $Area = (3*sqrt(3)/2)*$SideA*$SideA;
?>
<h3>Result:</h3>

The perimeter of the hexagon is <?php echo round($Perimeter,2) ?>cm
<br>
<br>
The area of the hexagon is <?php echo round($Area,2) ?>cm<sup>2</sup>
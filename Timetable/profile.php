<?php include 'header2.php'; ?>
<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION);
  header("location:login.php");
}
?>
<html>
  <style>
  body
  {
  background: url(image/bg6.jpg) no-repeat center center fixed;
  background-size: cover;
  }
    h3{
      color:#4169E1;
      font-size:30px;
    }
    h1{
      color:#4169E1;

    }
    a{
    color: #cc0000;
    font-weight: bold;
    text-decoration: none;
  }
  a:hover{
    color: #000000;
    font-weight: bold;
    text-decoration: none;
  }
  
  </style>
<body>
<br><br>
<h1 >TIMETABLE</h1>

<?php

$string = file_get_contents("timetable.json");
$json = json_decode($string, true);

?>
<!--asection-->
<h3>A Section</h3>
<table border='3' bgcolor="#FFFF66">
<tr><th>day</th><th>9:00am -10:00am</th><th>10:00am-11:00am</th><th>11:15am-12:15pm</th><th>12:15pm-1:15pm</th><th>2:00pm-3:00pm</th><th>3:00pm-4:00pm</th></tr>
<tr><th>Monday</th>
  <td><?php echo $json['A']['monday'][0] ?></td>
  <td><?php echo $json['A']['monday'][1] ?></td>
  <td><?php echo $json['A']['monday'][2] ?></td>
  <td><?php echo $json['A']['monday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Tuesday</th>
  <td><?php echo $json['A']['tuesday'][0] ?></td>
  <td><?php echo $json['A']['tuesday'][1] ?></td>
  <td><?php echo $json['A']['tuesday'][2] ?></td>
  <td><?php echo $json['A']['tuesday'][3] ?></td>
  <td><?php echo $json['A']['tuesday'][4] ?></td>
  <td><?php echo $json['A']['tuesday'][5] ?></td>
</tr>

<tr>
  <th>Wednesday</th>
  <td><?php echo $json['A']['wednesday'][0] ?></td>
  <td><?php echo $json['A']['wednesday'][1] ?></td>
  <td><?php echo $json['A']['wednesday'][2] ?></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Thursday</th>
  <td><?php echo $json['A']['thursday'][0] ?></td>
  <td><?php echo $json['A']['thursday'][1] ?></td>
  <td><?php echo $json['A']['thursday'][2] ?></td>
  <td><?php echo $json['A']['thursday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Friday</th>
  <td><?php echo $json['A']['friday'][0] ?></td>
  <td><?php echo $json['A']['friday'][1] ?></td>
  <td><?php echo $json['A']['friday'][2] ?></td>
  <td><?php echo $json['A']['friday'][3] ?></td>
  <td><?php echo $json['A']['friday'][4] ?></td>
  <td><?php echo $json['A']['friday'][5] ?></td>
</tr>

<tr>
  <th>Saturday</th>
  <td><?php echo $json['A']['saturday'][0] ?></td>
  <td><?php echo $json['A']['saturday'][1] ?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>

<!--bsection-->
<h3>B Section</h3>
<table border='3' bgcolor="#FFFF66">
<tr><th>day</th><th>9:00am -10:00am</th><th>10:00am-11:00am</th><th>11:15am-12:15pm</th><th>12:15pm-1:15pm</th><th>2:00pm-3:00pm</th><th>3:00pm-4:00pm</th></tr>
<tr><th>Monday</th>
  <td><?php echo $json['B']['monday'][0] ?></td>
  <td><?php echo $json['B']['monday'][1] ?></td>
  <td><?php echo $json['B']['monday'][2] ?></td>
  <td><?php echo $json['B']['monday'][3] ?></td>
  <td><?php echo $json['B']['monday'][4] ?></td>
  <td><?php echo $json['B']['monday'][5] ?></td>
</tr>

<tr>
  <th>Tuesday</th>
  <td><?php echo $json['B']['tuesday'][0] ?></td>
  <td><?php echo $json['B']['tuesday'][1] ?></td>
  <td><?php echo $json['B']['tuesday'][2] ?></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Wednesday</th>
  <td><?php echo $json['B']['wednesday'][0] ?></td>
  <td><?php echo $json['B']['wednesday'][1] ?></td>
  <td><?php echo $json['B']['wednesday'][2] ?></td>
  <td><?php echo $json['B']['wednesday'][2] ?></td>
  <td><?php echo $json['B']['wednesday'][3] ?></td>
  <td><?php echo $json['B']['wednesday'][5] ?></td>
</tr>

<tr>
  <th>Thursday</th>
  <td><?php echo $json['B']['thursday'][0] ?></td>
  <td><?php echo $json['B']['thursday'][1] ?></td>
  <td><?php echo $json['B']['thursday'][2] ?></td>
  <td><?php echo $json['B']['thursday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Friday</th>
  <td><?php echo $json['B']['friday'][0] ?></td>
  <td><?php echo $json['B']['friday'][1] ?></td>
  <td><?php echo $json['B']['friday'][2] ?></td>
  <td><?php echo $json['B']['friday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Saturday</th>
  <td><?php echo $json['B']['saturday'][0] ?></td>
  <td><?php echo $json['B']['saturday'][1] ?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>

<!--csection-->
<h3>C Section</h3>
<table border='3' bgcolor="#FFFF66">
<tr><th>day</th><th>9:00am -10:00am</th><th>10:00am-11:00am</th><th>11:15am-12:15pm</th><th>12:15pm-1:15pm</th><th>2:00pm-3:00pm</th><th>3:00pm-4:00pm</th></tr>
<tr><th>Monday</th>
  <td><?php echo $json['C']['monday'][0] ?></td>
  <td><?php echo $json['C']['monday'][1] ?></td>
  <td><?php echo $json['C']['monday'][2] ?></td>
  <td><?php echo $json['C']['monday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Tuesday</th>
  <td><?php echo $json['C']['tuesday'][0] ?></td>
  <td><?php echo $json['C']['tuesday'][1] ?></td>
  <td><?php echo $json['C']['tuesday'][2] ?></td>
  <td><?php echo $json['C']['tuesday'][2] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Wednesday</th>
  <td><?php echo $json['C']['wednesday'][0] ?></td>
  <td><?php echo $json['C']['wednesday'][1] ?></td>
  <td><?php echo $json['C']['wednesday'][2] ?></td>
  <td><?php echo $json['C']['wednesday'][3] ?></td>
  <td><?php echo $json['C']['wednesday'][4] ?></td>
  <td><?php echo $json['C']['wednesday'][5] ?></td>
</tr>

<tr>
  <th>Thursday</th>
  <td><?php echo $json['C']['thursday'][0] ?></td>
  <td><?php echo $json['C']['thursday'][1] ?></td>
  <td><?php echo $json['C']['thursday'][2] ?></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Friday</th>
  <td><?php echo $json['C']['friday'][0] ?></td>
  <td><?php echo $json['C']['friday'][1] ?></td>
  <td><?php echo $json['C']['friday'][2] ?></td>
  <td><?php echo $json['C']['friday'][3] ?></td>
  <td><?php echo $json['C']['friday'][4] ?></td>
  <td><?php echo $json['C']['friday'][5] ?></td>
</tr>

<tr>
  <th>Saturday</th>
  <td><?php echo $json['C']['saturday'][0] ?></td>
  <td><?php echo $json['C']['saturday'][1] ?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>

<!--dsection-->
<h3>D Section</h3>
<table border='3' bgcolor="#FFFF66">
<tr><th>day</th><th>9:00am -10:00am</th><th>10:00am-11:00am</th><th>11:15am-12:15pm</th><th>12:15pm-1:15pm</th><th>2:00pm-3:00pm</th><th>3:00pm-4:00pm</th></tr>
<tr><th>Monday</th>
  <td><?php echo $json['D']['monday'][0] ?></td>
  <td><?php echo $json['D']['monday'][1] ?></td>
  <td><?php echo $json['D']['monday'][2] ?></td>
  <td><?php echo $json['D']['monday'][3] ?></td>
  <td><?php echo $json['D']['monday'][4] ?></td>
  <td><?php echo $json['D']['monday'][5] ?></td>
</tr>

<tr>
  <th>Tuesday</th>
  <td><?php echo $json['D']['tuesday'][0] ?></td>
  <td><?php echo $json['D']['tuesday'][1] ?></td>
  <td><?php echo $json['D']['tuesday'][2] ?></td>
  <td><?php echo $json['D']['tuesday'][2] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Wednesday</th>
  <td><?php echo $json['D']['wednesday'][0] ?></td>
  <td><?php echo $json['D']['wednesday'][1] ?></td>
  <td><?php echo $json['D']['wednesday'][2] ?></td>
  <td><?php echo $json['D']['wednesday'][3] ?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Thursday</th>
  <td><?php echo $json['D']['thursday'][0] ?></td>
  <td><?php echo $json['D']['thursday'][1] ?></td>
  <td><?php echo $json['D']['thursday'][2] ?></td>
  <td><?php echo $json['D']['thursday'][3] ?></td>
  <td><?php echo $json['D']['thursday'][4] ?></td>
  <td><?php echo $json['D']['thursday'][5] ?></td>
</tr>

<tr>
  <th>Friday</th>
  <td><?php echo $json['D']['friday'][0] ?></td>
  <td><?php echo $json['D']['friday'][1] ?></td>
  <td><?php echo $json['D']['friday'][2] ?></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <th>Saturday</th>
  <td><?php echo $json['D']['saturday'][0] ?></td>
  <td><?php echo $json['D']['saturday'][1] ?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>
<br><br><br>
</body>
</html>

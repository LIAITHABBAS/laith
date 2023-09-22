<?php
$con=mysqli_connect('localhost','root',"",'abbas');
;
 $w="SELECT * FROM name";
$d=mysqli_query($con,$w);
while($s=mysqli_fetch_array($d)){
?>
<style>
    <table{
        width:500px;
        margin:0 auto;
    }
    td{
        width:250px;
    }
  
    </style>
<table border=1>
    <tr>
    <td></td>

    <td><?php echo $s[0] ?></td>
    <td><?php echo $s[1] ?></td>
    <td><?php echo $s[2] ?></td>
    <td><?php echo $s[3] ?></td>
    <td><?php echo $s[4] ?></td>



</tr>
</table>
<?php
}
?>








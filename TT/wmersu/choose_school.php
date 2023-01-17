<?php
require("conection/connect.php");
$category_id = $_POST["category_id"];
$result = mysqli_query($conn,"SELECT * FROM school where wcode ='$category_id'");
?>
<option value="">Select school</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["sname"]; ?>"><?php echo $row["sname"]; ?></option>
    <?php
}
?>
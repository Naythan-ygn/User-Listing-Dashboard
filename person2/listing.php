<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 19:00:08
 * @ Description:
 */

include '../header.php';
include '../config/connection.php';
?>

<br>
<h4>CRUD Sample!</h4>
<a class="btn btn-primary" href="create.php">Create New Record</a>
<br>
<br>
<?php
$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql);

echo "<table  class='table table-striped table-bordered' border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>Proile Iamge</th>";

echo "<th>dob</th>";

echo "<th>email</th>";
echo "<th>Phone</th>";
echo "<th>Country</th>";
echo "<th>Status</th>";

echo "<th>edit</th>";
echo "<th>delete</th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo '<td><img class="img-responsive" src="../uploads/' . $row['profile_image'] . '" width="40" height="40"></td>';
        echo "<td>" . $row["dob"] . "</td>";

        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["country"] . "</td>";

        echo "<td>";
        if ($row["status"] == 0) {
            echo "Deleted";
        } else if ($row["status"] == 1) {
            echo "Active";
        } else {
            echo "Inactive";
        }
        echo "</td>";

        echo '<td><a href="edit.php?id=' . $row["id"] . '" class="btn btn-success">Edit</a></td>';

        echo '<td><a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger">Delete</a></td>';

        echo '</tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

<?php
include '../footer.php';
?>
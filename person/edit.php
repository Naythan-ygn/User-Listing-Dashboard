<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-15 01:44:40
 * @ Description:
 */

include '../header.php';
include '../config/connection.php';

$id = $_REQUEST['id'];
$sql = "SELECT * FROM persons where id = " . $id;
$result = mysqli_query($conn, $sql);

while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $dob = $res['dob'];
}
?>

<body><br>
    <h4>Edit Form</h4>
    <br>

    <form action="update.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <input value="<?php echo $first_name; ?>" type="text" class="form-control" name="first_name" id=" first_name" aria-describedby="emailHelp" placeholder="Enter first_name" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input value="<?php echo $last_name; ?>" type="text" class="form-control" name="last_name" id=" last_name" aria-describedby="emailHelp" placeholder="Enter last_name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">dob</label>
            <input value="<?php echo $dob; ?>" type="date" class="form-control" name="dob" id="dob" required>
        </div>

        <button type="submit" class="btn btn-primary">Update and Save</button>
    </form>
    <br>

    <!-- <form action="save.php" method="post">
        first_name: <input type="text" name="first_name" id="first_name"> <br>
        last_name: <input type="text" name="last_name" id="last_name"> <br>
        dob: <input type="number" name="dob" id="dob">
        <input type="submit">
    </form> -->

<?php
include '../footer.php';
?>
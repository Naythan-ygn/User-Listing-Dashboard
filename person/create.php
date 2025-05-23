<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-15 01:47:44
 * @ Description:
 */

include '../header.php';
?>

<h4>Create New</h4>

<form action="save.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" class="form-control" name="first_name" id=" first_name" aria-describedby="emailHelp" placeholder="Enter first_name, e.g. William" required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" name="last_name" id=" last_name" aria-describedby="emailHelp" placeholder="Enter last_name">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">dob</label>
        <input type="date" class="form-control" name="dob" id="dob" aria-describedby="emailHelp" placeholder="Enter dob, e.g. 2000-12-13" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
<br>

<?php
include '../footer.php';
?>
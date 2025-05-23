<?php

/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 19:03:17
 * @ Description:
 */

include '../header.php';
include '../config/connection.php';

$id = $_REQUEST['id'];
$sql = "SELECT * FROM persons where id = " . $id;
$result = mysqli_query($conn, $sql);

while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $title = $res['title'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $profile_image = $res['profile_image'];
    $dob = $res['dob'];

    $email = $res['email'];
    $phone = $res['phone'];
    $martial_status = $res['martial_status'];
    $gender = $res['gender'];
    $address = $res['address'];
    $postal_code = $res['postal_code'];
    $country = $res['country'];
    $status = $res['status'];
    $remark = $res['remark'];

    $edu_finished_high_school = $res['edu_finished_high_school'];
    $edu_got_degree = $res['edu_got_degree'];
    $edu_got_master = $res['edu_got_master'];

    $created_by = $res['created_by'];
    $created_at = $res['created_at'];
    $updated_by = $res['updated_by'];
    $updated_at = $res['updated_at'];
    $deleted_by = $res['deleted_by'];
    $deleted_at = $res['deleted_at'];
}
?>

<body><br>
    <h4>Edit Form</h4>
    <br>

    <div class="container">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1">Email</label>
                    <input value="<?php echo $email; ?>" type="email" class="form-control" name="email" id="email" placeholder="e.g. waiyanaung@digitaltreemyanmar.com">
                </div>

                <div class="col-4">
                    <label for="profile_image">Profile Iamge</label>
                    <input class="form-control" type="file" name="profile_image" id="profile_image" accept="image/*">
                    <input type="checkbox" id="change_iamge" name="change_iamge" value="1" />
                    <label for="change_iamge">Want to change image ?</label>
                </div>

                <div class="col-sm-4">
                    <label>Current Profile Image</label><br />
                    <?php
                    echo '<img class="img-responsive" src="../uploads/' . $profile_image . '" width="100%" height="90%">';
                    ?>
                </div>
            </div>
            <br>
            <br>

            <div class="row">

                <div class="col-4">

                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                    <label for="exampleInputEmail1">Title</label>
                    <select class="form-control" id="title" name="title" required>
                        <option value="1" <?php if ($title == '1') { ?> selected="selected" <?php } ?>>Mr.</option>
                        <option value="2" <?php if ($title == '2') { ?> selected="selected" <?php } ?>>Mrs.</option>
                        <option value="3" <?php if ($title == '3') { ?> selected="selected" <?php } ?>>Miss</option>
                        <option value="4" <?php if ($title == '4') { ?> selected="selected" <?php } ?>>Ms.</option>
                        <option value="5" <?php if ($title == '5') { ?> selected="selected" <?php } ?>>Dr.</option>
                        <option value="6" <?php if ($title == '6') { ?> selected="selected" <?php } ?>>Prof.</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">First Name</label>
                    <input value="<?php echo $first_name; ?>" type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name, e.g. Wai Yan" required>
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input value="<?php echo $first_name; ?>" type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name, eg. Aung" required>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1">Phone</label>
                    <input value="<?php echo $phone; ?>" type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Phone, eg. 09123123123" required>
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">dob</label>
                    <input value="<?php echo $dob; ?>" type="date" class="form-control" name="dob" id="dob" placeholder="Enter dob, e.g. 2000-12-13" required>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1">Postal Code</label>
                    <input value="<?php echo $postal_code; ?>" type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter postal code">
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">Country</label>
                    <select class="form-control" id="country" name="country">
                        <option value="Myanmar" <?php if ($country == 'Myanmar') { ?> selected="selected" <?php } ?>>Myanmar</option>
                        <option value="Thailand" <?php if ($country == 'Thailand') { ?> selected="selected" <?php } ?>>Thailand</option>
                        <option value="Singapore" <?php if ($country == 'Singapore') { ?> selected="selected" <?php } ?>>Singapore</option>
                        <option value="Malaysia" <?php if ($country == 'Malaysia') { ?> selected="selected" <?php } ?>>Malaysia</option>
                        <option value="Laos" <?php if ($country == 'Laos') { ?> selected="selected" <?php } ?>>Laos</option>
                        <option value="Vietnam" <?php if ($country == 'Vietnam') { ?> selected="selected" <?php } ?>>Vietnam</option>
                        <option value="Cambodia" <?php if ($country == 'Cambodia') { ?> selected="selected" <?php } ?>>Cambodia</option>
                        <option value="Philippines" <?php if ($country == 'Philippines') { ?> selected="selected" <?php } ?>>Philippines</option>
                        <option value="Indonesia" <?php if ($country == 'Indonesia') { ?> selected="selected" <?php } ?>>Indonesia</option>
                    </select>
                </div>

                <div class="col-4">
                    <label for="exampleInputEmail1">Martial status</label>
                    <select class="form-control" id="martial_status" name="martial_status">
                        <option value="1" <?php if ($martial_status == '1') { ?> selected="selected" <?php } ?>> Single</option>
                        <option value="2" <?php if ($martial_status == '2') { ?> selected="selected" <?php } ?>>Married</option>
                        <option value="3" <?php if ($martial_status == '3') { ?> selected="selected" <?php } ?>>Divorced</option>
                        <option value="4" <?php if ($martial_status == '4') { ?> selected="selected" <?php } ?>>Widowed</option>
                        <option value="5" <?php if ($martial_status == '5') { ?> selected="selected" <?php } ?>>Other</option>
                        <option value="6" <?php if ($martial_status == '6') { ?> selected="selected" <?php } ?>>Prefer Not to say</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0" <?php if ($status == '0') { ?> selected="selected" <?php } ?>>Deleted</option>
                        <option value="1" <?php if ($status == '1') { ?> selected="selected" <?php } ?>>Active</option>
                        <option value="2" <?php if ($status == '2') { ?> selected="selected" <?php } ?>>In-Active</option>
                    </select>
                </div>

                <div class="col-4">
                    <label for="exampleInputEmail1">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1" id="gender1" <?php if ($gender == '1') { ?> checked="checked" <?php } ?>>
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="0" id="gender2" <?php if ($gender == '0') { ?> checked="checked" <?php } ?>>
                        <label class="form-check-label" for="gender2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">Education</label>
                    <fieldset>
                        <div>
                            <input type="checkbox" id="edu_finished_high_school" name="edu_finished_high_school" value="1" <?php if ($edu_finished_high_school == '1') { ?> checked="checked" <?php } ?> />
                            <label for="edu_finished_high_school">Finished high school</label>
                        </div>
                        <div>
                            <input type="checkbox" id="edu_got_degree" name="edu_got_degree" value="1" <?php if ($edu_got_degree == '1') { ?> checked="checked" <?php } ?> />
                            <label for="edu_got_degree">Got a degree</label>
                        </div>
                        <div>
                            <input type="checkbox" id="edu_got_master" name="edu_got_master" value="1" <?php if ($edu_got_master == '1') { ?> checked="checked" <?php } ?> />
                            <label for="edu_got_master">Got a Master degree</label>
                        </div>
                    </fieldset>
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-12">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3"><?php echo $address; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12">
                    <label for="exampleInputEmail1">Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="3"><?php echo $remark; ?></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update and Save</button>
        </form>
    </div>

    <?php
    include '../footer.php';
    ?>
<?php

/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 18:55:19
 * @ Description:
 */

include '../header.php';
?>

<h4>Create New</h4>

<div class="container">
    <form action="save.php" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="col-4">
                <label for="email">Email (Login User Name)</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="e.g. waiyanaung@digitaltreemyanmar.com" required>
            </div>
            <div class="col-8">
                <label for="profile_image">Profile Iamge</label>
                <input class="form-control" type="file" name="profile_image" id="profile_image" accept="image/*">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <label for="exampleInputEmail1">Title</label>
                <select class="form-control" id="title" name="title" required>
                    <option value="1" selected>Mr.</option>
                    <option value="2">Mrs.</option>
                    <option value="3">Miss</option>
                    <option value="4">Ms.</option>
                    <option value="5">Dr.</option>
                    <option value="6">Prof.</option>
                </select>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name, e.g. Wai Yan" required>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name, eg. Aung" required>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <label for="exampleInputEmail1">Phone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Phone, eg. 09123123123" required>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">dob</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter dob, e.g. 2000-12-13" required>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <label for="exampleInputEmail1">Postal Code</label>
                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter postal code">
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">Country</label>
                <select class="form-control" id="country" name="country">
                    <option value="Myanmar" selected>Myanmar</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Laos">Laos</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="India">India</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </div>

            <div class="col-4">
                <label for="exampleInputEmail1">Martial status</label>
                <select class="form-control" id="martial_status" name="martial_status">
                    <option value="1" selected>Single</option>
                    <option value="2">Married</option>
                    <option value="3">Divorced</option>
                    <option value="4">Widowed</option>
                    <option value="5" Other>Active</option>
                    <option value="6">Prefer Not to say</option>
                </select>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-4">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="0">Deleted</option>
                    <option value="1" selected>Active</option>
                    <option value="2">In-Active</option>
                </select>
            </div>

            <div class="col-4">
                <label for="exampleInputEmail1">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="1" id="gender1" checked>
                    <label class="form-check-label" for="radioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="0" id="gender2">
                    <label class="form-check-label" for="radioDefault2">
                        Female
                    </label>
                </div>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">Education</label>
                <fieldset>
                    <div>
                        <input type="checkbox" id="coding" name="edu_finished_high_school" value="edu_finished_high_school" />
                        <label for="edu_finished_high_school">Finished high school</label>
                    </div>
                    <div>
                        <input type="checkbox" id="music" name="edu_got_degree" value="edu_got_degree" />
                        <label for="edu_got_degree">Got a degree</label>
                    </div>
                    <div>
                        <input type="checkbox" id="music" name="edu_got_master" value="edu_got_master" />
                        <label for="edu_got_master">Got a Master degree</label>
                    </div>
                </fieldset>
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-12">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
                <label for="exampleInputEmail1">Remark</label>
                <textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<br>

<?php
include '../footer.php';
?>
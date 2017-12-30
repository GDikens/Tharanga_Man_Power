

<body class="w3-white">


<!-- Page Content -->
<div class="w3-padding-large" id="main">


    <!-- Content Section -->

    <div class="col-sm-10">

        <br><br><br><br><br>

        <div class="col-xs-9">

            <form class="form-horizontal" method="post" action="<?php echo base_url('UserController/createUser');?>">

              <?php echo form_error('first_name'); ?>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name"
                        <?php //if (isset($data['first_name'])) {echo "value='"; print_r($data['first_name']); echo "'";} ?>>
                    <?php
                    //if(isset($error['first_name_error'])) {
                      //  echo "<div class='w3-panel w3-red'><h5>" . $error['first_name_error'] . "</h5></div>";
                    //}
                    ?>
                </div>

                <?php echo form_error('last_name'); ?>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Last Name" name="last_name"
                        <?php //if (isset($data['last_name'])) {echo "value='"; print_r($data['last_name']); echo "'";} ?>>
                    <?php
                    //if(isset($error['last_name_error'])) {
                      //  echo "<div class='w3-panel w3-red'><h5>" . $error['last_name_error'] . "</h5></div>";
                  //  }
                    ?>
                </div>
                <!--<div class="form-group">
                    <label for="nic">NIC</label>
                    <table class="w3-table" style="width: 90%;">
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="nic_1" placeholder="" name="nic_1" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_1'])) {echo "value='"; print_r($data['nic_1']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_2" placeholder="" name="nic_2" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_2'])) {echo "value='"; print_r($data['nic_2']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_3" placeholder="" name="nic_3" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_3'])) {echo "value='"; print_r($data['nic_3']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_4" placeholder="" name="nic_4" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_4'])) {echo "value='"; print_r($data['nic_4']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_5" placeholder="" name="nic_5" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_5'])) {echo "value='"; print_r($data['nic_5']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_6" placeholder="" name="nic_6" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_6'])) {echo "value='"; print_r($data['nic_6']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_7" placeholder="" name="nic_7" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_7'])) {echo "value='"; print_r($data['nic_7']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_8" placeholder="" name="nic_8" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_8'])) {echo "value='"; print_r($data['nic_8']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_9" placeholder="" name="nic_9" size="1" maxlength="1" onkeyup="validatePassKey(this)"
                                    <?php //if (isset($data['nic_9'])) {echo "value='"; print_r($data['nic_9']); echo "'";} ?>>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nic_10" placeholder="" name="nic_10" size="1" maxlength="1" onkeyup=""
                                    <?php //if (isset($data['nic_10'])) {echo "value='"; print_r($data['nic_10']); echo "'";} ?>>
                            </td>
                        </tr>
                    </table>
                    <?php
                    //if(isset($error['nic_error'])) {
                        //echo "<div class='w3-panel w3-red'><h5>" . $error['nic_error'] . "</h5></div>";
                    //} ?>
                </div>-->

                <?php echo form_error('email'); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        
                </div>

                <?php echo form_error('address_line_1'); ?>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control w3-margin-bottom" id="address_line_1" placeholder="Address Line 1" name="address_line_1">



                </div>

                <?php echo form_error('contact_no'); ?>
                <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <table>
                        <tr>
                            <td style="padding-right: 8px">
                                <p>+94</p>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" maxlength="9">

                            </td>
                        </tr>
                    </table>

                </div>

                <?php echo form_error('faculty'); ?>
                <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <input type="text" class="form-control" id="faculty" placeholder="Faculty" name="faculty">

                </div>


                <div class="form-group">
                    <label for="position">Position</label>
                    <select type="text" class="form-control" id="type" placeholder="Type here" name="position" style="width: 30%;">

                        <option disabled selected value="0"> -- select an option -- </option>
                        <option value="Member">Member</option>
                        <option value="TL">Team Leader</option>
                    </select>

                </div>


                <div class="form-group">
                    <label for="function">Function</label>
                    <select type="text" class="form-control" id="type" placeholder="Type here" name="function" style="width: 30%;">

                        <option disabled selected value="0"> -- select an option -- </option>
                        <option value="iget">iGET</option>
                        <option value="igv">iGV</option>
                        <option value="ogx">oGX</option>
                    </select>

                </div>

                <?php echo form_error('username'); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">


                </div>

                <?php echo form_error('password'); ?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">

                </div>


                <div class="form-group">
                    <button type="reset" class="w3-button w3-black">Reset Form</button>
                    <button type="submit" class="w3-button w3-black" name="submit" style="float: right;">Submit</button>
                </div>
            </form>

        </div>

        <div class="col-xs-3">

        </div>

    </div>
    <div class="col-sm-2 w3-center">

        <br><br><br><br><br>

        <h3 style="font-family: 'Impact';"></h3>
        <?php ?>
    </div>

    <div class="col-sm-12">
        <!-- Footer -->

    </div>




    <!-- END PAGE CONTENT -->
</div>


</body>
</html>

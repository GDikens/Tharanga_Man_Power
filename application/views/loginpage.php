

<body class="login-img3-body">

    <div class="col-lg-4 col-sm-4 w3-container"></div>

    <div class="col-lg-4 col-sm-4 w3-container">

        <br><br><br><br>

        <div class="w3-container w3-center">
            <h1>Tharanga Man Power</h1>
            <h4>Payroll Management System</h4>
        </div>

        <?php if(isset($error['authentication_error'])){ ?>
            <div class="w3-container w3-red" style="color: #ffffff;font-weight: bold;"><?php echo $error['authentication_error'];?></div>
        <?php } ?>

        <form class="login-form" action="<?php base_url();?>LoginController/authenticate" method="post">
            <div class="login-wrap">

                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" autofocus>
                </div>

                <br><br>

                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button class="btn btn-primary btn-lg" type="submit" name="login" style="width:150px;">Login</button>
                    <br><br>
                    <a href="register" style=":hover{ text-underline-style: none;}"><button class="btn btn-info btn-lg" type="button" name="register" style="width:150px;">Register</button></a>
                </div>
                <div class="col-sm-4"></div>


            </div>
        </form>

    </div>

    <div class="col-lg-4 col-sm-4 w3-container"></div>


  </body>
</html>

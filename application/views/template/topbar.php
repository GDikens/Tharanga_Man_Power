<!-- Header/Home -->
<header class="w3-header w3-top" id='topbar'>
    <div class="w3-container w3-white" style="box-shadow: 5px 5px #f0f0f0;">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
            <h1 style="color: #757575;font-family: 'Impact';">
<!--                --><?php //if($status==0){
//                    echo "Register New User";
//                }elseif($status==1){
//                    echo "Home";
//                } elseif ($status==2){
//                    echo "Profile";
//                } elseif ($status==3){
//                    echo "Calendar";
//                }?>
            </h1>
        </div>
        <div class="col-sm-5" style="padding: 10px;">
            <?php if($this->session->userdata('username')){?>
                <div class="col-xs-4"></div>
                <div class="col-xs-5">
                    <i class="fa fa-user w3-xxlarge"></i>
                    <span style="font-size: large"><?php echo $this->session->userdata('username');?></span>
                </div>
                <div class="col-xs-3">
                    <a href="<?php echo base_url();?>LoginController/logOut" style="color: black;"><i class="fa fa-sign-out w3-xxlarge"> <span style="font-size: large">Log out</span></i></a>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
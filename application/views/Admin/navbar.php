<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">
    <!-- Avatar image in top left corner -->
<!--    <img src="--><?php //base_url();?><!--assets/logo.png" style="width:100%">-->
    <a href="<?php echo base_url();?>wall_controller" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
        <i class="fa fa-home w3-xxlarge" style="<?php if($status==1){echo "color:#ffee58";} else{{echo " ";}}?>"></i>
        <p style="<?php if($status==1){echo "color:#ffee58";} else{{echo " ";}}?>">HOME</p>
    </a>
    <a href="<?php echo base_url();?>ProfileController/loadAdminProfile/2" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
        <i class="fa fa-user w3-xxlarge" style="<?php if($status==2){echo "color:#ffee58";} else{{echo " ";}}?>"></i>
        <p style="<?php if($status==2){echo "color:#ffee58";} else{{echo " ";}}?>">EMPLOYEE</p>
    </a>
    <a href="<?php echo base_url();?>AdminController/index/3" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
        <i class="fa fa-calendar w3-xxlarge" style="<?php if($status==3){echo "color:#ffee58";} else{{echo " ";}}?>"></i>
        <p style="<?php if($status==3){echo "color:#ffee58";} else{{echo " ";}}?>">CALENDAR</p>
    </a>
    <a href="<?php echo base_url();?>EventController/loadAdminEventView/4" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
        <i class="fa fa-group w3-xxlarge" style="<?php if($status==4){echo "color:#ffee58";} else{{echo " ";}}?>"></i>
        <p style="<?php if($status==4){echo "color:#ffee58";} else{{echo " ";}}?>">EVENTS</p>
    </a>
    <a href="<?php echo base_url();?>TaskController/loadAdminTaskView/5" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
        <i class="fa fa-address-card w3-xxlarge" style="<?php if($status==5){echo "color:#ffee58";} else{{echo " ";}}?>"></i>
        <p style="<?php if($status==5){echo "color:#ffee58";} else{{echo " ";}}?>">TASKS</p>
    </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium w3-black" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="profile" class="w3-bar-item w3-button" style="width:25% !important">PROFILE</a>
        <a href="calendar" class="w3-bar-item w3-button" style="width:25% !important">CALENDAR</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">EVENTS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">TASKS</a>
    </div>
</div>

<script>

</script>
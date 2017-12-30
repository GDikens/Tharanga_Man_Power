<script src="<?php echo base_url('js/jquery.js');?>"></script>


<body class="w3-white">


<!-- Page Content -->
<div class="w3-padding-large" id="main">


    <!-- Content Section -->

    <div class="col-sm-10">

        <br><br><br><br><br>

        <!-- container section start -->
        <section id="container">

            <!--main content start-->
            <section id="main-content">

                <section>
                    <!-- __________________________________________________________________________________________________________________ -->

                    <!-- this is the newfeed area -->
                    <div class="container">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="panel w3-container" style="background-color: #c3fdff;">
                                <div class="center">
                                    <form action="<?php echo base_url('wall_controller/save_post');?>" method="post" enctype="multipart/form-data">

                                        <div class="panel-heading">
                                            <div class="c-h-inner">
                                                <ul class="list-inline">
                                                    <li style="border-right:none;"><img src="<?php echo base_url();?>img/icon3.png"><a href="#">Update Status</a></li>
                                                    <li><input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile"></li>
                                                    <li><img src="<?php echo base_url();?>img/icon1.png"><a href="#" id="uploadTrigger" name="post_image">Add Photos/Video</a></li>

                                                </ul>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="panel-body">
                                            <div class="col-lg-2">
                                                <div class="img-box">
                                                    <img style="height: 80px; width: 80px;" src="<?php foreach ($user_data as $value) {echo base_url().$value->profile_image;}?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <textarea style="height: 100px; width: 550px;" class="form-control" name="status" placeholder="What's on your mind?"></textarea>
                                            </div>

                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            <div class="col-lg-8"  id="body-bottom" hidden="true">
                                                <img style="height: 100px; width: 100px;" src="#"  id="preview"/>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <div class="col-lg-8"></div>
                                            <div class="col-lg-4 " style="right">
                                                <ul>
                                                    <input type="submit" name="submit" value="Post" class="btn btn-primary" style="float: right;"/>
                                                </ul>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>

                    </div>

                    <br>



                    <!-- ____________________________________________________________________ -->
                    <div class="container">

                        <div class="col-lg-2"></div>

                        <div class="col-lg-8">
                            <div class="panel w3-container" style="background-color: #c3fdff;">

                                <div class="center">
                                    <div class="panel-body">
                                        <?php
                                        foreach($post_data as $row){
                                            //fetching all posts
                                            $time_ago = $row->status_time;
                                            echo '
                        
                        <div class="col-lg-12 panel">
                               
                                    <div class="panel">
                                        <div class="post-left-box">
                                            <div class="col-lg-1 id-img-box">
                                                <img style="height: 80px; width: 80px;" src="'.$row->profile_image.'">
                                            </div>
                                            <div class="col-lg-11 ">
                                                <ul class="w3-list" style="list-style: none;">
                                                    <li><h4><a href="#">'.$row->Username.'</a></h4></li>
                                                    <li><h4><small>'." $time_ago ".'</small></h4></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-right-box">
                                            
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                
                                    <div class="panel-body">
                                        <div class="col-lg-12 post-header-text" style="font-weight: bold;">
                                            '.$row->status.'
                                        </div><br><br><br>'.( ($row->status_image != 'NULL') ? '<div class="col-lg-12 post-img">
                                            <img style="height: 400px; width: 600px;" src="'.$row->status_image.'"></div>' : '').'
                                        
                                    </div>
                                
                            </div>
                            
                            <br>
                            <br> ';
                                        }
                                        ?>

                                        <!-- _________________________________________________________________ -->







                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2"></div>

                        </div>








                        <!-- _________________________________________________________________________________________________________________- -->
                </section>





                <!--main content end-->



    </div>
    <div class="col-sm-2">
        <p></p>
    </div>

    <div class="col-sm-12">
        <!-- Footer -->
        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p class="w3-medium">Powered by <a href="<?php base_url();?>https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Group 14.</a></p>
            <!-- End footer -->
        </footer>
    </div>




    <!-- END PAGE CONTENT -->
</div>


</body>


</section>

<script type="text/javascript">

    //Image Preview Function
    $("#uploadTrigger").click(function(){
        $("#uploadFile").click();
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#body-bottom').show();
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>


</html>



















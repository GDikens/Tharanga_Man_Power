

<body class="w3-white">


<!-- Page Content -->
<div class="w3-padding-large" id="main">


    <!-- Content Section -->

    <div class="col-sm-10">

        <br><br><br><br><br>

        <table class="w3-table" id="mycalendar">
            <thead>
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
            </tr>
            </thead>
            <tbody>

            <?php


            $start_date = $data['date'];
            $init = $start_date;
            $current_date = $start_date;

            for($x=0;$x<6;$x++){
                echo "<tr>";
                for($y=0;$y<7;$y++){
                    $init = date('d',strtotime("+0 day", strtotime($current_date)));


                    ?>


                    <td <?php if($data['current_date']==$current_date){ echo "style=\"background-color:#a98274; font-weight:bold;\"";}?>>
                        <div class="mycal-div" style="min-height: 106px;width: auto;">
                            <div class="fc-day-number"><?php echo $init;?></div>
                            <div class="fc-day-content">
                                <p style="font-size: smaller; font-weight: bold;"><?php foreach ($event as $val){ if($val->Date==$current_date){ echo $val->EventTitle."<br>";}}?></p>
                            </div>
                        </div>
                    </td>


                    <?php               $current_date = date('Y-m-d',strtotime("+1 day", strtotime($current_date)));
                }
                echo "</tr>";}?>


            </tbody>
        </table>

    </div>
    <div class="col-sm-2 w3-center w3-border-left">

        <br><br><br><br><br>

        <h3 style="font-family: 'Impact';">Events Today</h3>
        <?php ?>
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

<script>
    $('#mycalendar').fadeIn(2000);
</script>

</body>
</html>

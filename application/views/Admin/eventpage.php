

<body class="w3-white">


<!-- Page Content -->
<div class="w3-padding-large" id="main">


    <!-- Content Section -->

    <div class="col-sm-12">

        <br><br><br><br><br>

        <section id="main-content">
            <section class="wrapper">

                <div class="row w3-teal">
                    <div class="col-xs-12">
                        <h3 class="page-header"><i class="fa fa-user-md"></i> EVENT</h3>

                    </div>
                </div>

                <div class="row">
                    <!-- profile-widget -->

                    <div class="col-xs-12 w3-teal">

                        <div class="profile-widget profile-widget-info">
                            <div class="panel-body">
                                <div class="col-xs-2 col-xxs-2">
                                    <h1><?php foreach ($EVENT as $value) {
                                            echo $value->EventTitle;

                                            $EventID = $value->EventID;

                                        }?></h1>
                                </div>


                                <div class="col-xs-6"> </div>
                                <div class="col-xs-2 col-xxs-6 follow-info weather-category">
                                    <ul style="list-style: none">
                                        <li class="active">

                                            <i class="fa fa-check" aria-hidden="true" style="font-size:48px"> </i><br>

                                            <button onclick="location.href='http://localhost/Event-Management-System/EventController/going/<?php echo $EventID;?>'" type="button"
                                                    class="btn btn-success btn-lg" title="Bootstrap 3 themes generator"> &emsp;GOING&emsp;</button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-xs-2 col-xxs-6 follow-info weather-category">
                                    <ul style="list-style: none">
                                        <li class="active">

                                            <i class="fa fa-times" aria-hidden="true" style="font-size:48px"> </i><br>

                                            <button onclick="location.href='http://localhost/Event-Management-System/EventController/notGoing/<?php echo $EventID;?>'" type="button" class="btn btn-danger btn-lg" title="Bootstrap 3 themes generator">NOT GOING</button>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page start-->
                    <div class="row">
                        <div class="col-xs-12">
                            <section class="panel">
                                <header class="panel-heading tab-bg-info">
                                    <ul class="nav nav-tabs">


                                    </ul>
                                </header>


                                <!-- profile -->
                                <div id="profile" class="tab-pane">
                                    <section class="panel">
                                        <div class="bio-graph-heading w3-red">
                                            <?php foreach ($EVENT as $value) {
                                                echo $value->Description;
                                            }?>
                                        </div>
                                        <div class="panel-body bio-graph-info w3-blue">
                                            <h1>Event Details</h1>
                                            <div class="row">

                                                <div class="bio-row1">
                                                    <p><span>Date </span>: <?php foreach ($EVENT as $value) {
                                                            echo $value->Date;
                                                        }?></p>
                                                </div>
                                                <div class="bio-row1">
                                                    <p><span>Time </span>: <?php foreach ($EVENT as $value) {
                                                            echo $value->Time;
                                                        }?></p>
                                                </div>
                                                <div class="bio-row1" font size="16">
                                                    <p><span>Venue </span>: <?php foreach ($EVENT as $value) {
                                                            echo $value->Venue;
                                                        }?></p>
                                                </div>
                                            </div>

                                            <div class="row" >


                                                <div class="bio-row">
                                                    <p><span>Organized by </span>: <?php foreach ($EVENT as $value) {
                                                            echo $value->Organizer;
                                                        }?></p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Organizer Mobile No</span>: <?php foreach ($EVENT as $value) {
                                                            echo $value->OrganizerPhone;
                                                        }?></p>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="panel-body bio-graph-info">
                                            <h1> Confirmed Participants </h1>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>

                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(isset($PARTICIPANT)){ foreach($PARTICIPANT as $value){?>
                                                    <tr>
                                                        <td><?=$value->FirstName;?></td>
                                                        <td><?=$value->LastName;?></td>
                                                        <td><?=$value->Username;?></td>
                                                    </tr>
                                                <?php } }?>


                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                                <section>
                                    <div class="row">
                                    </div>
                                </section>

                        </div>




                    </div>
                </div>
            </section>



    <div class="col-sm-12">
        <!-- Footer -->

    </div>




    <!-- END PAGE CONTENT -->
</div>

<script>
    $('#mycalendar').fadeIn(2000);
</script>

</body>
</html>

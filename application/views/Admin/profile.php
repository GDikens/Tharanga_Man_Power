

<body class="w3-white">


<!-- Page Content -->
<div class="w3-padding-large" id="main">


    <!-- Content Section -->


    <div class="col-sm-12">

        <br><br><br><br><br>

        <div class="w3-container">

            <div class="w3-bar w3-black">
                <button id="btnAddEmployee" class="w3-bar-item w3-button w3-yellow" onclick="openTab('addEmployee')" style="font-weight: bold">Add Employee</button>
                <button id="btnViewEmployee" class="w3-bar-item w3-button" onclick="openTab('viewEmployee')" style="font-weight: bold">View Employee</button>
            </div>

            <br>

            <form method="post" name="employee" action="<?php base_url();?>ProfileController/addEmployee">

            <div id="addEmployee" class="w3-container tab">
                <div class="col-xs-12">
                    <div class="row clearfix">
                        <div class="col-xxs-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                <tr >
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th class="text-center">
                                        Name
                                    </th>
                                    <th class="text-center">
                                        NIC
                                    </th>
                                    <th class="text-center">
                                        Address
                                    </th>
                                    <th class="text-center">
                                        Gender
                                    </th>
                                    <th class="text-center">
                                        Date Enrolled
                                    </th>
                                    <th class="text-center">
                                        TeleNo
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id='addr0'>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='nic0' placeholder='NIC' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='address0' placeholder='Address' class="form-control"/>
                                    </td>
                                    <td>
                                        <select class="form-control" name='gender0' id="sel2">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name='date0' placeholder='Date' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='mobile0' placeholder='TeleNo' class="form-control"/>
                                    </td>
                                </tr>
                                <tr id='addr1'></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>

                    <div class="col-sm-12">
                        <br>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-1">
                            <button class="w3-button w3-blue" type="submit">Submit</button>
                        </div>
                        <div class="col-xs-1">
                            <button class="w3-button w3-blue" type="reset">Reset</button>
                        </div>
                        <div class="col-xs-9"></div>
                    </div>

                </div>
            </div>

            <input type="hidden" id="row_count" name="count" value="1"/>

            </form>

            <div id="viewEmployee" class="w3-container tab" style="display:none">

            </div>

        </div>

    </div>






    <!-- END PAGE CONTENT -->
</div>


</body>

<script>

    function openTab(tabName) {
        var i;
        var x = document.getElementsByClassName("tab");

        if(tabName == "addEmployee"){
            document.getElementById("btnAddEmployee").className = "w3-bar-item w3-button w3-yellow";
            document.getElementById("btnViewEmployee").className = "w3-bar-item w3-button";
        } else if(tabName == "viewEmployee"){
            document.getElementById("btnViewEmployee").className = "w3-bar-item w3-button w3-yellow";
            document.getElementById("btnAddEmployee").className = "w3-bar-item w3-button";
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
    }


    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
            $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='nic"+i+"' type='text' placeholder='NIC'  class='form-control input-md'></td><td><input name='address"+i+"' type='text' placeholder='Address' class='form-control input-md'  /> </td><td><select class='form-control input-md' name='gender"+i+"'><option value='male'>Male</option><option value='female'>Female</option></select></td><td><input name='date"+i+"' type='text' placeholder='Date' class='form-control input-md'  /> </td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td>");

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
            $('#row_count').val(i);
        });
        $("#delete_row").click(function(){
            if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
                $('#row_count').val(i);
            }
        });

    });

</script>

</html>

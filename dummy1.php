<script src="js/tabs/jquery.simpleTab1.min.js"></script>




<style>
    .footer-area-top {
        padding: 31px 0 90px;
        background: #002147;
    }

    .btn.active {
        height: 60px;
        width: 100%;
        background: rgb(23, 71, 114);
        color: white;
    }

    .dept {
        margin-top: 30px;
    }

    #tabs {
        background: #174772;
        padding: 15px !important;
    }

    #tabs .tab-col {
        border: 1px solid #fff;
        padding: 15px;
        margin: 0;
    }

    #tabs .tab-col h2 {
        color: #fff;
        font-size: 18px;
        padding: 0;
        margin: 0;
        padding-bottom: 10px;
        border-bottom: 1px solid #fff;
    }

    #tabs .tab-col .tabs_bos {
        margin-top: 5px;
    }


    #tabs .tab-col .tabs_bos li .fa-li {
        color: #fff;
        margin-top: 8px;
    }

    #tabs .tab-col .tabs_bos li a {
        color: #fff;
        display: block;
        padding: 8px 0px;
        text-decoration: none;
    }

    .dept .tab-content {
        /*border: 1px solid red !important;*/
        margin: 0;
    }

    .text-divider {
        margin: 25px 0 40px 0;
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #fd752c;
        border-color: #002147;
    }

    /* Start Tabs Styles */
    .tabs-section {

        padding: 20px;
    }

    th {
        background-color: #fd752c;
        text-align: center;
    }

    .tabs-section .tab-switch ul {
        border: 2px solid #000;
    }

    .tabs-section .tab-switch li {


        border: 1px solid #F0F0F0;
        background-color: #fff;

        padding: 10px 20px;
        width: 250px;
        color: #000;

        font-size: 16px;

        cursor: pointer;
        margin-left: 00px;

    }

    .tabs-section .tab-switch li.selected {
        background: #fd752c;
        color: #fff;
    }

    .tabs-section .tab-switch li.selected:hover {
        background: #337AB7 !important;
        color: #fff !important;
    }

    .tabs-section .tab-switch li:hover {
        background-color: #F0F0F0;
        color: #000;
    }

    .tabs-section .tabs-content div:not(.tabs-1, .tab-6, .tab-12) {
        display: none
    }

    .tabs-section .tabs-content h3 {
        margin-top: 0;
        font-weight: bold;
        color: #000;
        letter-spacing: -1px;
        font-size: 26px;
        margin-bottom: 20px;
    }

    .tabs-section .tabs-content p {
        line-height: 1.6;
        font-size: 18px;
        color: #7e7e7e
    }

    .tabs-section .tabs-content button {
        background-color: #3C80AB;
        border-radius: 5px;
        color: #fff;
        padding: 10px 20px;
        border: 0;
    }

    .tabs-section .tabs-content button:hover {
        background-color: #3C80AB;
        color: #ff8b38
    }
</style>


<div class="container-fluid singleimage_image" style="padding:0px;">
    <img src="https://aec.edu.in/logos/aboutaec.jpg" class="img-responsive">
</div>


<div class="container dept">

    <div class="col-md-12">

        <div class="tab-content col-md-12">



            <?php


            $sql = "SELECT DISTINCT `course_name` FROM course_departments";
            $course_result = $con->query($sql);
            ?>


            <div class="text-justify lab-text tab_content">
                <h4 class="text-divider text-center"><span id="font">Syllabus</span></h4>
                <div class="col-md-12 row">
                    <div class="">
                        <!-- col-md-offset-2   -->
                        <div class="row text-center justify-content-center" style="padding-top: 20px;">
                            <div class="col-md-3" style="padding-bottom: 10px; padding-bottom: 10px;"> <button
                                    class="btn active" id="p4" style="height: 60px;width: 100%;"
                                    onclick="actvietabbyid('P4')"><b>Syllabus AR-23</b></button></div>
                            <div class="col-md-3" style="padding-bottom: 10px; padding-bottom: 10px;"> <button
                                    class="btn" id="p1" style="height: 60px;width: 100%;background:#fd752c;color: white"
                                    onclick="actvietabbyid('P1')"><b>Syllabus AR-20</b></button></div>
                            <div class="col-md-3" style="padding-bottom: 10px; padding-bottom: 10px;"> <button
                                    class="btn" id="p2"
                                    style="height: 60px;width: 100%; background:#fd752c;color: white"
                                    onclick="actvietabbyid('P2')"> <b>Syllabus AR-19</b></button></div>
                            <div class="col-md-3" style="padding-bottom: 10px; padding-bottom: 10px;"> <button
                                    class="btn" id="p3"
                                    style="height: 60px;width: 100%; background:#fd752c;color: white"
                                    onclick="actvietabbyid('P3')"><b>Syllabus AR-17</b></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- start AR-23-->
            <div class="row P4" style="display: block;">
                <br><br><br><br><br>
                <h4 class="text-divider text-center"><span id="font">Syllabus AR-23</span></h4>

                <?php
                $sql1 = "SELECT DISTINCT course FROM `syllabus` where ar='Syllabus AR-23'";
                $syllabus_result = $con->query($sql1);
                ?>
                <div class="col-md-12" style="padding-top: 20px;">
                    <div class="tabs-section">
                        <div class="col-md-12 col-md-offset-1">

                            <div class="col-md-3">

                                <ul class="list-unstyled tab-switch">
                                    <?php $k = 1;
                                    while ($row = $syllabus_result->fetch_assoc()) { ?>
                                        <li data-class="tabs-<?php echo $k; ?>"
                                            class="<?php echo $k == 1 ? 'selected' : '' ?>"
                                            onclick="getdepartmentslistbycourse('4','<?php echo $row['course']; ?>','tabs-<?php echo $k; ?>','forth_div')"
                                            id="tabs4-<?php echo $k; ?>"><?php echo $row['course']; ?></li>
                                    <?php $k++;
                                    } ?>
                                </ul>
                            </div>

                            <div class="col-md-offset-1 col-md-7">
                                <div class="tabs-content" id="forth_div"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end AR-23-->



            <!-- start AR-20-->
            <div class="row P1" style="display: none;">
                <br><br><br><br><br>
                <h4 class="text-divider text-center"><span id="font">Syllabus AR-20</span></h4>

                <?php
                $sql1 = "SELECT DISTINCT course FROM `syllabus` where ar='Syllabus AR-20'";
                $syllabus_result = $con->query($sql1);


                ?>
                <div class="col-md-12" style="padding-top: 20px;">
                    <div class="tabs-section">
                        <div class="col-md-12 col-md-offset-1">

                            <div class="col-md-3">

                                <ul class="list-unstyled tab-switch">
                                    <?php $k = 1;
                                    while ($row = $syllabus_result->fetch_assoc()) { ?>
                                        <li data-class="tabs-<?php echo $k; ?>"
                                            class="<?php echo $k == 1 ? 'selected' : '' ?>"
                                            onclick="getdepartmentslistbycourse('1','<?php echo $row['course']; ?>','tabs-<?php echo $k; ?>','first_div')"
                                            id="tabs1-<?php echo $k; ?>"><?php echo $row['course']; ?></li>
                                    <?php $k++;
                                    } ?>
                                </ul>
                            </div>

                            <div class="col-md-offset-1 col-md-7">
                                <div class="tabs-content" id="first_div"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- End Tabs Section -->

                </div>
            </div>
            <!-- end AR-20-->



            <!-- start AR-19-->
            <div class="row P2" style="display: none;">
                <br><br><br><br><br>
                <h4 class="text-divider text-center"><span id="font">Syllabus AR-19</span></h4>
                <?php
                $sql1 = "SELECT DISTINCT course FROM `syllabus` where ar='Syllabus AR-19' ";
                $syllabus_result = $con->query($sql1);


                ?>
                <div class="col-md-12" style="padding-top: 20px;">
                    <div class="tabs-section">
                        <div class="col-md-12 col-md-offset-1">

                            <div class="col-md-3">

                                <ul class="list-unstyled tab-switch">
                                    <?php $k = 1;
                                    while ($row = $syllabus_result->fetch_assoc()) { ?>
                                        <li data-class="tabs-<?php echo $k; ?>"
                                            class="<?php echo $k == 1 ? 'selected' : '' ?>"
                                            onclick="getdepartmentslistbycourse('2','<?php echo $row['course']; ?>','tabs-<?php echo $k; ?>','second_div')"
                                            id="tabs2-<?php echo $k; ?>"><?php echo $row['course']; ?></li>
                                    <?php $k++;
                                    } ?>
                                </ul>
                            </div>

                            <div class="col-md-offset-1 col-md-7">
                                <div class="tabs-content" id="second_div"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- End Tabs Section -->

                </div>
            </div>
            <!-- end AR-19-->


            <!-- start AR-17-->
            <div class="row P3" style="display: none;">
                <br><br><br><br><br>
                <h4 class="text-divider text-center"><span id="font">Syllabus AR-17</span></h4>
                <?php
                $sql1 = "SELECT DISTINCT course FROM `syllabus` where ar='Syllabus AR-17' ";
                $syllabus_result = $con->query($sql1);


                ?>
                <div class="col-md-12" style="padding-top: 20px;">
                    <div class="tabs-section">
                        <div class="col-md-12 col-md-offset-1">

                            <div class="col-md-3">

                                <ul class="list-unstyled tab-switch">
                                    <?php $k = 1;
                                    while ($row = $syllabus_result->fetch_assoc()) { ?>
                                        <li data-class="tabs-<?php echo $k; ?>"
                                            class="<?php echo $k == 1 ? 'selected' : '' ?>"
                                            onclick="getdepartmentslistbycourse('3','<?php echo $row['course']; ?>','tabs-<?php echo $k; ?>','third_div')"
                                            id="tabs3-<?php echo $k; ?>"><?php echo $row['course']; ?></li>
                                    <?php $k++;
                                    } ?>
                                </ul>
                            </div>

                            <div class="col-md-offset-1 col-md-7">
                                <div class="tabs-content" id="third_div"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- End Tabs Section -->

                </div>
            </div>
            <!-- end AR-17-->














        </div>
        <!-- tab content -->



    </div>
</div>


<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $(document).ready(function() {
        $(".readMore").click(function() {
            var This = $(this);
            $(this).next().toggle(function() {
                if (This.text() == "Read") {
                    This.text("Hide")
                } else {
                    This.text("Read")
                }
            })
        });

    })

    actvietabbyid('P4');
    //$("#p1").click();
    function actvietabbyid(tab_name) {
        var tabs_array = ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8', 'P9', 'P10', 'P11', 'P12', 'P13', 'P14', 'P15',
            'P16', 'P17', 'P18', 'P19', 'P20'
        ];

        // Tabs content hide and show
        $('.tabs-section .tabs-content > div').hide();
        if (tab_name == 'P1') {
            //console.log("test");
            $("#tabs1-1").click();
        } else if (tab_name == 'P2') {
            $(".tab-six").show();
            $("#tabs2-1").click();
        } else if (tab_name == 'P3') {
            $(".tab-twelve").show();
            $("#tabs3-1").click();
        } else if (tab_name == 'P4') {
            $(".tab-twelve").show();
            $("#tabs4-1").click();
        }

        // End Tabs content hide and show

        for (let i = 0; i < tabs_array.length; i++) {
            if (tabs_array[i] === tab_name) {
                $("." + tabs_array[i]).show();
            } else {
                $("." + tabs_array[i]).hide();
            }
        }
    }



    function getdepartmentslistbycourse(ar_no, course_name, tabs_no, div_id) {
        if (course_name === '') {
            //undefined
        } else {
            //console.log(course_name);
            $.ajax({
                type: "POST",
                url: 'includes/ajax/getdepartmentslist.php',
                data: {
                    ar_no: ar_no,
                    course_name: course_name,
                    tabs_no: tabs_no
                },
                success: function(result) {
                    console.log("AJAX HIT SUCCESS");
                    console.log(result);

                    $("#" + div_id).html(result);
                },
                error: function() {
                    console.log("error");
                }
            });
        }
    }
    /*global window,$,document*/
    $(function() {
        'use strict';

        // Deal With Tabs

        // $('.tab-switch li').click(function () {
        //     // Add Selected Class to Active Linke
        //     $(this).addClass('selected').siblings().removeClass('selected');
        //     // Hide All Divs
        //     $('.tabs-section .tabs-content > div').hide();
        //     // Show Div Connected With This Link
        //     $('.' + $(this).data('class')).show();
        // });

        $('.tab-switch li').click(function() {
            // Add Selected Class to Active Linke
            $(this).addClass('selected').siblings().removeClass('selected');
            var d_cls = $(this).attr('data-class');
            // console.log("ss"+s);
            // if(d_cls = 'tab-one'){

            // }else if(d_cls = 'tab-six'){

            // }else if(d_cls = 'tab-twelve'){

            // }

            // Hide All Divs
            $('.tabs-section .tabs-content > div').hide();
            // Show Div Connected With This Link
            //$('.' + $(this).data('class')).show();
            $("." + d_cls).show();
        });
    });
</script>
<?php
include("config.php");

$ar_no = $_REQUEST['ar_no'];
$course_name = $_REQUEST['course_name'];
$tabs_no = $_REQUEST['tabs_no'];

// echo "select `department_name` from course_departments where course_name='".$course_name."'";
// exit();
if ($ar_no == 1) {
    $ar = 'Syllabus AR-20';
} else if ($ar_no == 2) {
    $ar = 'Syllabus AR-19';
} else if ($ar_no == 3) {
    $ar = 'Syllabus AR-17';
} else if ($ar_no == 4) {
    $ar = 'Syllabus AR-23';
}

$syllabus_result = mysqli_query($con, "select * from syllabus where ar='" . $ar . "' and course='" . $course_name . "'");


?>




<div class="<?php echo $tabs_no; ?> table-responsive text-center" style="display:block;">
    <table class="table table-inverse table-bordered table-striped" border="1px solid #F5F5F5">
        <thead>
            <tr style="background: #046;color: #fff;font-size: 16px;">
                <th width="1%">S.No</th>
                <th><?php echo $course_name; ?></th>
                <th width="3%">Attachment</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            while ($row = $syllabus_result->fetch_assoc()) { ?>
            <tr>
                <td style="vertical-align:middle;"><?php echo $i; ?></td>
                <td style="text-align: left;vertical-align:middle;"><?php echo $row['department']; ?></td>
                <td><a href="aec/syllabus/<?php echo $row['attachment']; ?>" target="new" class="btn btn-info"><i
                            class="fa fa-eye"></i> View</a></td>
            </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>
</div>
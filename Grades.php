<?php include 'connection.php';
include 'topnav.php'; ?>
<div class="col-lg-12">

    <div>
        <i class="fas fa-table"></i>

        Student Records <br></br>
        <a>Add New</a>
        <a href="GradeAdd.php?action=add"  type="button" class="btn btn-xs fa fa-user-plus"></a>
    </div>
    <br> </br>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Student id</th>
                <th> Name</th>
                <th>Email</th>
                <th>Object</th>
                <th>Student Id</th>
                <th>Grade</th>
                <th>Class</th>
                <th>Type</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // $query = 'SELECT a.`STUDENT_ID`, a.`FIRST_NAME`, a.`Last_Name`, a.`EMAIL`, b.`NAME`,b.`COURSE_ID`, c.`year_level`, d.`status_name` FROM `student`a, `course`b, `level`c, `status`d where a.`COURSE_ID`=b.`COURSE_ID` and a.`level_id`=c.`level_id` AND a.`Status_id`=d.`Status_id`';
            // $result = mysqli_query($db, $query) or die (mysqli_error($db));

            //while ($row = mysqli_fetch_assoc($result)) {
            require_once ('vendors/autoload.php');
            use App\students\student;
            use App\grades\grade;
            $obj=new grade();
            $grade=$obj->select();
            $i=0;
            foreach ($grade as $key=>$row){
                $i++;?>
                <tr>
                    <?php echo '<td>'. $i.
                        "<td>". $row['NameOwnerGrade'].
                        "<td>". $row['EmailOwnerGrade'].
                        "<td>". $row['Object'].
                        "<td>". $row['StudentId'].
                        "<td>". $row['Grade'].
                        "<td>". $row['Class']
                    ;?>
                        <td>
                            <?php
                            if ($row['Type']==1){
                                echo "شفوي";
                            }elseif ($row['Type']==2){
                                echo "تحريري";
                            }elseif ($row['Type']==3){
                                echo "واجبات";
                            }else{
                                echo "حضور";
                            }
                                ?>
                        </td>

                    <td>
                        <a  type="button" class="btn btn-xs btn-warning fa fa-edit"> </a>
                    </td>
                    <td>
                        <?php
                        $del=new grade();
                        $del->delete();
                        ?>
                        <form method="POST">
                            <input type="hidden" name="ref_toke_delete" value="<?php echo $key?>">
                            <button type="submit" name="delete_dara" class="fa fa-trash" ></button>
                        </form>
                    </td>
                </tr>
            <?php  }?>


            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>

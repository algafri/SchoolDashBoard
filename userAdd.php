<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header""><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
    <div class="card-body" style="background-color: #009999;">


        <form role="form" method="post" action="userCode.php?action=add">
            <div class="form-group">
                <?php
                require_once ('vendors/autoload.php');
                use App\Users\User;
                $obj=new User();
                $in=$obj->select();
                $i=1;
                foreach ($in as $key=>$row){
                    if ($row['TypeUser']=='false'){
                   $row= $i++;
                    ?>
                      <input class="form-control" type="hidden" value="<?php echo $row;?>" name="StuId">

             <?php
                }}
                ?>
            </div>
            <div class="form-group">

                <input class="form-control" type="text" placeholder=" Name" name="NameUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" placeholder="Email" name="EmailUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="Password" placeholder="Password" name="PasswordUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="class" name="ClassNameUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" value="false" name="StatusAccount">
            </div>

            <div class="form-group">
                <input class="form-control" type="hidden" value="false" name="TypeUser">
            </div>
            <?php
            $time=Date('g: i  a');
            $date=Date('F d, Y');
            ?>
            <div class="form-group">
                <input class="form-control" type="hidden" value="<?php echo $time?>" name="CreatedAtTimeUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" value="<?php echo $date?>" name="CreatedAtDateUser">
            </div>


            <?php /*
                                $sqll = "SELECT * FROM `course`";
                                $res = mysqli_query($db,$sqll) or die ("Error: $sqll");

                                $course ="<select class='form-control' name='course' required>
                                            <option value='' disabled selected hidden>Select Course</option>";
                                while($row = mysqli_fetch_assoc($res)){
                                $course .="<option value='".$row['COURSE_ID']."'>".$row['NAME']."</option>";
                                }
                                $course .="</select>";
                          ?>
                            <div class="form-group">
                              <?php echo $course; ?>
                            </div>

                          <?php
                                $queryy = "SELECT * FROM `level`";
                                $res2 = mysqli_query($db,$queryy) or die ("Error: $queryy");

                                $level ="<select class='form-control' name='level' required>
                                            <option value='' disabled selected hidden>Select Year Level</option>";
                                while($row = mysqli_fetch_assoc($res2)){
                                $level .="<option value='".$row['level_id']."'>".$row['year_level']."</option>";
                                }
                                $level .="</select>";
                          ?>
                            <div class="form-group">
                              <?php echo $level; ?>
                            </div>

                          <?php
                                $queryyy = "SELECT * FROM `status`";
                                $res3 = mysqli_query($db,$queryyy) or die ("Error: $queryyy");

                                $status ="<select class='form-control' name='status' required>
                                            <option value='' disabled selected hidden>Select Status</option>";
                                while($row = mysqli_fetch_assoc($res3)){
                                $status .="<option value='".$row['Status_id']."'>".$row['status_name']."</option>";
                                }
                                $status .="</select>";
                          ?>
                            <div class="form-group">
                              <?php echo $status; ?>
                            </div>
                           */?>
            <button type="submit" name="student" class="btn btn-default"> <h6> Save Record </h6> </button>
            <button type="student.php" class="btn btn-default"> <h6> Clear </h6> </button>


        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php'; ?>

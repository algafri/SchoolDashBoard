<?php include 'connection.php';
include 'topnav.php'; ?>

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            Course Records <br></br>  
             Add New <a></a>  
            <a href="courseAdd.php?action=add" type="button" class="btn btn-xs fa fa-user-plus"></a>
            </div> 

                        <br> </br>       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>COURSE ID</th>
                                        <th>COURSE</th>
                                        <th>DESCRIPTION</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                /*$query = 'SELECT * FROM course';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {*/
                        require_once ('vendors/autoload.php');
                        use App\courses\courses;
                        $obj=new courses();
                        $course=$obj->select();
                        $i=0;
                        foreach ($course as $key=>$row){
                                $i++;
                            echo '<tr>';
                            echo '<td>'. $i.'</td>';
                            echo '<td>'. $row['NAME'].'</td>';
                            echo '<td>'. $row['DESCRIPTION'].'</td>';
                            ?>
                            <td>
                             <a  type="button" class="btn btn-xs btn-warning fa fa-edit" > </a>
                            </td>
                            <td>
                             <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="courseDel.php?type=course&delete & id='.$row['COURSE_ID'] . '"> </a>
                            </td>
                            </tr>
            <?php    }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div><?php include 'footer.php'; ?>
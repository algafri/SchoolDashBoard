 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php

                require_once ('vendors/autoload.php');
                use App\students\student;

                if (isset($_POST['id'])) {


                    $data=[
                        'FIRST_NAME'  =>$_POST['FIRST_NAME'],
                        'Last_Name'   =>$_POST['Last_Name'],
                        'EMAIL'       =>$_POST['EMAIL'],
                        'NAME'      =>$_POST['NAME'],
                        'year_level'       =>$_POST['year_level'],
                        'status_name'      =>$_POST['status_name']

                    ];
                    $obj=new student();
                    $obj->insert($data);

                }

						/*$fname= $_POST['FIRST_NAME'];
					    $lname= $_POST['Last_Name'];
						$em= $_POST['EMAIL'];
						$course= $_POST['course'];
						$lev= $_POST['level'];
						$stat= $_POST['status'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO student
								(STUDENT_ID, FIRST_NAME, Last_Name, EMAIL, COURSE_ID, level_id, Status_id)
								VALUES (NULL,'".$fname."','".$lname."','".$em."',".$course.",".$lev.",".$stat.")";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}*/
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "student.php";
		</script>
                    </div>
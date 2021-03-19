 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                require_once ('vendors/autoload.php');
                use App\courses\courses;
                if (isset($_POST['id'])){
                    $data=[
                    'NAME'=> $_POST['NAME'],
                    'DESCRIPTION'=> $_POST['DESCRIPTION']
                    ];
                    $insert=new courses();
                    $insert->insert($data);
                }
            

						
						
				
					/*switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO course
								(COURSE_ID, NAME, DESCRIPTION)
								VALUES ('NULL','".$name."','".$desc."')";
								mysqli_query($db,$query)or die(mysqli_error($db));
							
						break;
									
						}*/
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "course.php";
		</script>
                    </div>
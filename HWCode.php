 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                require_once ('vendors/autoload.php');
                use App\levels\Level;
                if (isset($_POST['id'])){
                    $data=[
                        'NameOwnerHw' => $_POST['NameOwnerHw'],
                        'EmailOwnerHw' => $_POST['EmailOwnerHw'],
                        'ClassHw' => $_POST['ClassHw'],
                        'ObjectHw' => $_POST['ObjectHw'],
                        'Content' => $_POST['Content'],
                        'TimeHw' => $_POST['TimeHw'],
                        'DateHw' => $_POST['DateHw'],

                    ];
                    $insert=new Level();
                    $insert->insert($data);
                }
                		
					   /* $yl= $_POST['year_level'];
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO level
								(level_id,year_level)
								VALUES ('Null', '".$yl."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}*/
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "HWs.php";
		</script>
                    </div>
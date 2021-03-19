<?php include'header.php' ;?>
<?php include'connection.php' ;?>

<div class="col-lg-12">
    <?php
    require_once ('vendors/autoload.php');
    use App\courses\courses;
    if (isset($_POST['id'])){
        $data=[
            'ClassNote'        => $_POST['ClassNote'],
            'ObjectNote'       => $_POST['ObjectNote'],
            'NameOwnerNote'  => $_POST['NameOwnerNote'],
            'EmailOwnerNote' => $_POST['EmailOwnerNote'],
            'Content'        => $_POST['Content'],
            'TimeNote'       => $_POST['TimeNote'],
            'DateNote'       => $_POST['DateNote'],

        ];
        $insert=new courses();
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
        window.location = "Notes.php";
    </script>
</div>

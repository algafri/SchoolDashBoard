<?php include'header.php' ;?>
<?php include'connection.php' ;?>

<div class="col-lg-12">
    <?php
    require_once ('vendors/autoload.php');
    use App\grades\grade;
    if (isset($_POST['id'])){

        $data=[
            'StudentId' => $_POST['StudentId'],
            'Class' => $_POST['Class'],
            'Object' => $_POST['Object'],
            'NameOwnerGrade' => $_POST['NameOwnerGrade'],
            'EmailOwnerGrade' => $_POST['EmailOwnerGrade'],
            'Grade' => $_POST['Grade'],
            'Type' => $_POST['Type']

        ];
        $insert=new grade();
        $insert->insert($data);
    }
    ?>
    <script type="text/javascript">
        alert("Successfully added.");
        window.location = "Grades.php";
    </script>
</div>
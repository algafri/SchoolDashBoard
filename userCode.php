<?php include'header.php' ;?>
<?php include'connection.php' ;?>

<div class="col-lg-12">
    <?php

    require_once ('vendors/autoload.php');
    use App\Users\User;

    if (isset($_POST['student'])) {


        $data=[

            'NameUser'               =>$_POST['NameUser'],
            'EmailUser'              =>$_POST['EmailUser'],
            'PasswordUser'           =>$_POST['PasswordUser'],
            'ClassNameUser'          =>$_POST['ClassNameUser'],
            'StatusAccount'          =>$_POST['StatusAccount'],
            'TypeUser'               =>$_POST['TypeUser'],
            'StuId'                  =>$_POST['StuId'],
            'CreatedAtTimeUser'      =>$_POST['CreatedAtTimeUser'],
            'CreatedAtDateUser'      =>$_POST['CreatedAtDateUser']


        ];

        $obj=new User();
        $obj->insert($data);


    }

    if (isset($_POST['teacher'])) {


        $data=[

            'NameUser'               =>$_POST['NameUser'],
            'EmailUser'              =>$_POST['EmailUser'],
            'PasswordUser'           =>$_POST['PasswordUser'],
            'ClassNameUser'          =>$_POST['ClassNameUser'],
            'StatusAccount'          =>$_POST['StatusAccount'],
            'TypeUser'               =>$_POST['TypeUser'],
            'ObjectNameUser'         =>$_POST['ObjectNameUser'],
            'CreatedAtTimeUser'      =>$_POST['CreatedAtTimeUser'],
            'CreatedAtDateUser'      =>$_POST['CreatedAtDateUser']


        ];
        $obj=new User();
        $obj->insert($data);

    }


    ?>
    <script type="text/javascript">
        alert("Successfully added.");
        window.location = "users.php";
    </script>
</div>
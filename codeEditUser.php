<?php
require_once ('vendors/autoload.php');
use App\Users\User;


if (isset($_POST['id'])) {


    $data=[

        'NameUser'               =>$_POST['NameUser'],
        'EmailUser'              =>$_POST['EmailUser'],
        'PasswordUser'           =>$_POST['PasswordUser'],
        'ClassNameUser'          =>$_POST['ClassNameUser'],
        'TypeUser'               =>$_POST['TypeUser'],
        'ObjectNameUser'         =>$_POST['ObjectNameUser'],
        'token'                  =>$_POST['token']
    ];
    $token=$_GET['token'];
    $ref= $token;
    $obj=new User();
    $obj->update($data);

}
?>
<script type="text/javascript">
    alert("Successfully added.");
    window.location = "users.php";
</script>

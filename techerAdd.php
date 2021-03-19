<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header""><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
    <div class="card-body" style="background-color: #009999;">


        <form role="form" method="post" action="userCode.php?action=add">

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
                <input class="form-control" type="hidden" value="true" name="TypeUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="course" name="ObjectNameUser">
            </div>
            <?php
            $time=Date('g: i   a');
            $date=Date('F d, Y');
            ?>
            <div class="form-group">
                <input class="form-control" type="hidden" value="<?php echo $time?>" name="CreatedAtTimeUser">
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" value="<?php echo $date?>" name="CreatedAtDateUser">
            </div>

            <button type="submit" name="teacher" class="btn btn-default"> <h6> Save Record </h6> </button>
            <a href="users.php" class="btn btn-default"> <h6> Cancel </h6> </a>


        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php'; ?>

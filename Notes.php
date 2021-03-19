<?php include 'connection.php';
include 'topnav.php'; ?>
    <div class="col-lg-12">

    <div>
        <i class="fas fa-table"></i>

        Year Level Records <br></br>
        Add New <a></a>
        <a href="NotesAdd.php?action=add" type="button" class="btn btn-xs  fa fa-user-plus"></a>
    </div>

    <br> </br>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Notes ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Object</th>
                <th>content</th>
                <th>Edit</th>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            <?php
            /*$query = 'SELECT * FROM level';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));

                    while ($row = mysqli_fetch_assoc($result)) {*/

            require_once ('vendors/autoload.php');
            use App\courses\courses;
            $level=new courses();
            $lev=$level->select();
            $i=0;
            foreach ($lev as $key=>$row){
                $i++;?>
                <tr>
                    <?php echo    "<td>". $i.
                        "<td>". $row['NameOwnerNote'].
                        "<td>". $row['EmailOwnerNote'].
                        "<td>". $row['ClassNote'].
                        "<td>". $row['ObjectNote'].
                        "<td>". $row['Content'];

                    ?>
                    <td>
                        <a  type="button" class="btn btn-xs btn-warning fa fa-edit" > </a>
                    </td>
                    <td>
                        <?php
                        $del=new courses();
                        $del->delete();
                        ?>
                        <form method="POST">
                            <input type="hidden" name="ref_toke_delete" value="<?php echo $key;?>">
                            <button type="submit" name="delete_dara" class="fa fa-trash" ></button>
                        </form>
                    </td>
                </tr>

            <?php } ?>


            </tbody>
        </table>
    </div>
<?php include ('footer.php'); ?>
<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header""><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body" style="background-color: #009999;">
                 

                        <form role="form" method="post" action="HWCode.php?action=add">
                            
                            <div class="form-group">

                            <input class="form-control" type="text"  placeholder="name" name="NameOwnerHw">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="hidden" value="emtiaze@gmail.com" placeholder="Email" name="EmailOwnerHw">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="text" placeholder="class" name="ClassHw">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="text" placeholder="object" name="ObjectHw">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="text" placeholder="content" name="Content">
                            </div>
                            <?php
                            $time=Date('g: i  a');
                            $date=Date('F d, Y');
                            ?>
                            <div class="form-group">
                                <input class="form-control" type="hidden" value="<?php echo $time?>" name="TimeHw">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="hidden" value="<?php echo $date?>" name="DateHw">
                            </div>
                           
                            <button type="submit" name="id" class="btn btn-default"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-default"> <h6> Clear </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>
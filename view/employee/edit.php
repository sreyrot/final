

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <div class="card">
          
            <div class="card-body">
            <div class="card-header text-center alert alert-info"><b>Edit Employee</b></div>
            <?php
                if(isset($data['employee_data'])){
                    foreach($data['employee_data'] as $row){
            ?>
            <form action="index1.php?action=edit_form&id=<?php echo $row['emp_id']; ?>" method="post">
                <div class="form-group">
                    <label for="text">First Name</label>
                    <input type="text" value="<?php echo $row['emp_fname'];?>" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="text">Last Name</label>
                    <input type="text" value="<?php echo $row['emp_lname'];?>" name="lname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="text">Province</label>
                    <select name="province" class="form-control" id="">
                    <?php
                       
                            foreach($data['province_data'] as $rows){
                                ?>
                                <option <?php if($row['pro_name']== $rows['pro_name']){?> selected="selected"<?php }?> value="<?php echo $rows['pro_id']; ?>"><?php echo $rows['pro_name']; ?></option>
                                <?php
                        }
                    ?>
                   </select>
                </div>
                <!-- <button type="submit" class="btn btn-info">Add</button> -->
                <input type="submit" class="btn btn-info float-right" value="Submit">
            </form>
            <?php
                     
                    }
                }
            ?>
            </div>
        </div>
        </div>
    </div>
</div>
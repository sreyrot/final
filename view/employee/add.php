

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header text-center alert alert-info"><b>Add Employee</b></div>
            <div class="card-body">
            
            <form action="index1.php?action=add_form" method="post">
                <div class="form-group">
                    <label for="text">First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="text">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="text">Province</label>
                    <select name="province" class="form-control" id="">
                    <?php
                        if(isset($data['province_data'])){
                            foreach($data['province_data'] as $rows){
                                ?>
                                <option value=""></option>
                                <option  value="<?php echo $rows['pro_id']?>"><?php echo $rows['pro_name']; ?></option>
                                <?php
                            }
                        }
                    ?>
                   </select>
                </div>
                <!-- <button type="submit" class="btn btn-info">Add</button> -->
                <input type="submit" class="btn btn-info" value="Submit">
            </form>

            </div>
        </div>
        </div>
    </div>
</div>
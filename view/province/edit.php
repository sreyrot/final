<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Add Province</div>
                <div class="card-body">
                    <?php 
                        if(isset($data['province_data'])){
                            foreach($data['province_data'] as $row){
                    ?>
                    <form action="index2.php?action=edit_pro" method="post">
                        <div class="form-group">
                       
                            <label for="province">Province</label>
                            <input type="text" name="province" value="<?php echo $row['pro_name']?>" id="name" class="form-control">
                        </div>
                        
                        <input type="submit"  class="btn btn-info float-right" value="Submit">
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
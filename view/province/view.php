
<div class="container mt-5">
<div class="row">
    <div class="col-12">
        <a class="btn btn-info" href="index2.php?action=add_pro">Add New</a>
    
<table class="table table-bordered mt-4">

    <tr>
        <th>ID</th>
        <th>Province-Name</th>
        <th>Action</th>
       
    </tr>
    <?php 
    if(isset($data['province_data'])){
        foreach ($data['province_data'] as $row){

?>
    <tr>
        <td><?php echo $row['pro_id']?></td>
        <td><?php echo $row['pro_name']?></td>
        <td>
            <a href="index2.php?action=edit&id=<?php echo $row['pro_id']?>">Edit</a>
            <a href="index2.php?action=delete&id=<?php echo $row['pro_id']?>">Delete</a>
        </td>
    </tr>
    <?php
    
}
}
?>
</table>

</div>
</div>
</div>
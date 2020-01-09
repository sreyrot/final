
<div class="container mt-5">
<div class="row">
    <div class="col-12">
        <a class="btn btn-info" href="index1.php?action=add_emp">Add New</a>
    
<table class="table table-bordered mt-4">

<thead>
<tr>
        <th>ID</th>
        <th>First-Name</th>
        <th>Last-Name</th>
        <th>Province-Name</th>
        <th>Action</th>
    </tr>
</thead>
   
    <?php 
    if(isset($data['employee_data'])){
        foreach ($data['employee_data'] as $row){

?>
<tbody>
<tr>
        <td><?php echo $row['emp_id']?></td>
        <td><?php echo $row['emp_fname']?></td>
        <td><?php echo $row['emp_lname']?></td>
        <td><?php echo $row['pro_name']?></td>
        <td>
            <a href="index1.php?action=edit&id=<?php echo $row['emp_id']?>">Edit</a>
            <a href="index1.php?action=delete&id=<?php echo $row['emp_id']?>">Delete</a>
        </td>
    </tr>
</tbody>
<?php
    
}
}
?>
</table>


</div>
</div>
</div>
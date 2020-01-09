<?php
    function get_province(){
        $query = " SELECT * FROM tblprovince ";
        
            include "connection.php";
            $result = mysqli_query($connection, $query);
           return $result;
    }
    // add
    function add_pro_data(){
        include "connection.php";
        $province = $_POST['province'];
        $query = "INSERT INTO tblprovince(pro_name) VALUE('$province') ";
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function get_pro(){
        include "connection.php";
        $id = $_GET['id'];
        $query = " SELECT * FROM tblprovince WHERE pro_id = $id";
            $result = mysqli_query($connection, $query);
           return $result;
    }
    function edit_province(){
        include "connection.php";
        $id = $_GET['id'];
        $provine = $_POST['province'];
        $query = "UPDATE tblprovince SET pro_name = '$province' WHERE pro_id = $id";
        $result = mysqli_query($connection, $query);
        return $result;
    }
   
?>
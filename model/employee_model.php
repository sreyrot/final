<?php
    function get_employee(){
        
        $query = "SELECT e.emp_id,emp_fname,emp_lname,p.pro_name
        FROM tblemployee e LEFT JOIN tblprovince p ON e.pro_id = p.pro_id; ";
            include "connection.php";
            $result = mysqli_query($connection, $query);
           $row = [];
           if($result && mysqli_num_rows($result)){
               foreach($result as $record){
                   $row[] = $record;
               }
           }
           return $row;
    }
    

    function get_province() {
        $query = "select * from tblprovince";
        include "connection.php";
        $result = mysqli_query($connection,$query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0 ){
            foreach ($result as $record) {
                $rows[] = $record;
            }
        }
        return $rows;
    }
    
    function add_employee(&$data){
        include "connection.php";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $province = $_POST['province'];
        $query = "INSERT INTO tblemployee(emp_fname, emp_lname, pro_id )
        VALUE('$fname', '$lname', '$province')";
       
        $result = mysqli_query($connection, $query);
        return $result;
    }

    // get empl
    function get_emp(){
           include "connection.php";
           $id = $_GET['id'];
           $query = "SELECT e.emp_id,emp_fname,emp_lname,p.pro_name
           FROM tblemployee e LEFT JOIN tblprovince p ON e.pro_id = p.pro_id WHERE e.emp_id = $id";
           $result = mysqli_query($connection,$query);

           return $result;
    }

// edit
function edit_emp_data(){
    include "connection.php";
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $province = $_POST['province'];
    $query = " UPDATE tblemployee SET emp_fname = '$fname', emp_lname = '$lname', pro_id = $province WHERE emp_id = $id ";
    $result = mysqli_query($connection, $query);
    // var_dump($result); die();


    return $result;
}
  
  // delete
  function delete_emp(){
      include "connection.php";
      $id = $_GET['id'];
      $query = "DELETE FROM tblemployee WHERE emp_id = $id ";
      $delete = mysqli_query($connection, $query);
      return $delete;
  }

?>
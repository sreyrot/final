<?php
    $data = array();
    flix_employee($data);
    function flix_employee(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    function view(&$data){
        $data['employee_data'] = get_employee();
        $data['page'] = "employee/view.php";
        
    }
    function add_emp(&$data){
        $data['province_data'] = get_province($_POST);
        $data['page'] = "employee/add.php";
    }
    function add_form(&$data){
        $resutl = add_employee($_POST);
        if($resutl){
            $action= "view";
        }else{
            $action = "add";
        }
        header("Location:index1.php?action=$action");
    }
    function edit(&$data){
        $data['employee_data'] = get_emp();
        $data['province_data'] = get_province();
        $data['page'] = "employee/edit.php";
    }

    function edit_form(&$data){
        $resutl = edit_emp_data();
        // var_dump($resutl); die();
        if($resutl){
            $action = "view";
        }else{
           $action = "edit";
        }
        header("Location:index1.php?action=$action");
    }

    // delete
    function delete(&$data){
       $delete = delete_emp();
       if($delete){
           $action = "view";
       }else{
           echo("cannot delete .....");
       }
       header("Location:index1.php?action=$action");
    }
?>
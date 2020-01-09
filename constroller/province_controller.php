<?php
    $data = array();
    flix_province($data);
    function flix_province(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    function view(&$data){
        $data['province_data'] = get_province();
        $data['page'] = "province/view.php";
        
    }

    function add_pro(&$data){
        $data['page'] = "province/add.php";
    }
    function add_p(&$data){
        $result['province_data'] = add_pro_data();
        if($result){
            $action = "view";
        }else{
            $action = "add_pro";
        }
        header("Location: index2.php?action=$action");
    }

    // edit
    function edit(&$data){

        $data['province_data'] = get_pro();
        $data['page'] = "province/edit.php";
    }
    function edit_pro(&$ata){
        $resutl['province_data'] = edit_province();
        if($result){
            $action = "view";
        }else{
            $action = "edit";
        }
        header("Location:index2.php?action=$action");
    }
    
?>
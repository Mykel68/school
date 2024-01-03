<?php

function login($con){
    if($_SERVER['REQUEST_METHOD']=='POST')
        {
        $user_name = $_POST['uname'];
        $Email = $_POST['email'];
        $Subject = $_POST['subject'];
        $Msg = $_POST['msg'];

        if(!empty($user_name) && !empty($Email) && !is_numeric($Msg) && !empty($Subject))
        {
            $query = "select  from email where user_name,email,subject,msg = '$user_name','$Email','$Subject','$Msg' limit 1";
            $result = mysqli_query($con,$query);
            
        }
    }
}
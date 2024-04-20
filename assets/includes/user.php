<?php
    include("./connection.php");

    session_start();

    header('Content-Type: application/json');
    header('Access-Control-Allow-origin:*');
    header('Access-Control-Method:POST');


    $data = json_decode(file_get_contents("php://input"));
   

    $email = $data->email;
    // $eemail = $data->eemail;
    $user_type = $data->user_type;
    $password = $data->password;  
    // $epassword = $data->epassword;   
    
    if($user_type == "Employee Panel")
    {
        $sql = "SELECT COUNT(*) FROM `emp` WHERE emp_name = '{$email}' && emp_password = '{$password}' ";
    }
    else{
        $sql = "SELECT COUNT(*) FROM `users` WHERE username ='{$email}' && password = '{$password}'";
    }

    $result =$connection->query($sql); 
    $row =$result->fetch(PDO::FETCH_ASSOC);
    


    // $emp_result =$connection->query($emp_check); 
    // $emp_row =$emp_result->fetch(PDO::FETCH_ASSOC);

    if($row["COUNT(*)"] == 1)
    {
        echo 1;
        
        $_SESSION["user"]  = $email;   
        // $_SESSION["emp"]  = $eemail;   
        $_SESSION['user_type'] = $user_type;   
        // echo json_encode(array('status' => true, 'data' => $count));
    }
    else
    {
        echo 0;
    }
    // if($_SESSION['user_type'] = $user_type){
    //     header('Location: ../includes/show_Student.php');
    // }   
    // else{
    //     header('Location: ../../index.php');
    // }
?>
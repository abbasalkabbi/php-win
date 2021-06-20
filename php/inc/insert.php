<?php
// check is input not is empty
if(!empty($firstname) && !empty($lastname) && !empty($email)){
    // check is input email is email 
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        //if input is email
        
        //search is email is already 
        $email_check= mysqli_query($conn ,"SELECT * FROM users WHERE email ='{$email}'");
        if(mysqli_num_rows($email_check) > 0){
            // if email is already sign up 
            echo "$email -This email already exist!";
        }else{
            // if email new 
            $sql ="INSERT INTO users (firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";
            mysqli_query($conn,$sql);
            echo "successful";
        }
            
}else{
    // if input email is not email
    echo "$email - not validate";
}
}else{
// if anyone input is empty 
        echo"All input is requered";
}
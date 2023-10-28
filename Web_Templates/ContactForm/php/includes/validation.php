<?php
// Function to validate the name field
function validate_name($name){
    // Check if the name is empty
    if(empty($name)){
        return 'Name is required!';
    }elseif (!preg_match("/^[a-zA-Z ]*$/", $name)){
        return 'Only letters and white space allowed.';
    }
    return "";  // No errors
}

// Function to validate the email field
function validate_email($email){
    //Check if email field is empty
    if(empty($email)){
        return 'Email is required.';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return 'Invalid email format entered';
    }
    return "";  // No errors
}

// Function to validate message field
function validate_msg($message){
    // Check if message filed is empty
    if(empty($message)){
        return 'Message is required';
    }
    return "";
}

<?php
session_start();
include_once("db_connect.php");
    if (isset($_POST) && !empty($_POST)) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $profession = mysqli_real_escape_string($conn, $_POST['profession']);
        if($profession && $profession == 'developer'){
            $design = '';
            if(isset($_POST['language']) && !empty($_POST['language'])){
                $languages = explode(',', $_POST['language']);
                $language_encode = json_encode($languages);
                $language = mysqli_real_escape_string($conn, $language_encode);
            }else{
                $language = '';
            }
        }else{
            $language = '';
            if(isset($_POST['design']) && !empty($_POST['design'])){
                $designs = explode(',', $_POST['design']);
                $design_encode = json_encode($designs);
                $design = mysqli_real_escape_string($conn, $design_encode);
            }else{
                $design = '';
            }
        }
        $experience = mysqli_real_escape_string($conn, $_POST['experience']);
        //echo "<pre>";print_r($profession);exit();
        if(mysqli_query($conn, "INSERT INTO user(name, email, profession, language, design, experience) VALUES('".$name."', '" . $email . "', '". $profession."', '".$language."', '".$design."', '". $experience."')")) {
            $_SESSION['message'] = "You're Registered Successfully!";
            header('location: index.php');
        } else {
            $_SESSION['error_message'] = "You're Registered Failed!";
            header('location: index.php');
        }
    }

?>
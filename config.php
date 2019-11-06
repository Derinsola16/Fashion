<?php 
// Database Connection
$dbconn = new mysqli('localhost', 'root', '', 'fashion');

if ($dbconn->connect_error) {
    die("Connection Failed: " . $dbconn->connect_error);
}


function uploadFile()
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }




    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
            
    }
   return false;
}


// Inserting values into Database Table
// Script for register
if (isset($_POST['submit'])) {
    
    $url = uploadFile();
    if($url){
        $id = trim($_POST['userId']);
        $fullname = trim($_POST['fullname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $address = trim($_POST['address']);
        $work = trim($_POST['work']);
        $password = trim($_POST['password']);
        $confpass = trim($_POST['confpass']);



        // Checking if the password and confirm password matches
        if ($password == $confpass) {
            $sql = "INSERT INTO users (id,fullname,username,email,address,work,password, url) VALUES (''$id,'$fullname','$username','$email','$address','$work','$password', '$url')";

            // Checking if the form submitted into the database
            if ($dbconn->query($sql) === true) {
                session_start();
                $_SESSION['id'] = $fetchedid;
                $_SESSION['email'] = $fecthedemail;

                header("Location: blank.html");
            } else {
                echo "Error: " . $sql . "<br/>" . $dbconn->error;
            }
        } else {
            echo "<script>alert('Your password does not match!!!')</script>";
    }
    }
    
}



// Script for login

if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  
    $sql = "SELECT * FROM users WHERE username = '$username' AND Password = '$password' LIMIT 1";

    $result = $dbconn->query($sql);
    if ($result->num_rows > 0) {
            session_start();
            //$_SESSION['user'] = $result->fetch_assoc();
            $_SESSION['id'] = $fetchedid;
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $fullname;

            header("Location: profile.php");
            exit();
        } else {
            echo "<script>alert('Wrong Username or Password')</script>";
        }
}

// Script for Customer

if (isset($_POST['enter'])) {
    $fullname1 = trim($_POST['name']);
    $email1 = trim($_POST['email']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $number = trim($_POST['number']);
    $address1 = trim($_POST['address']);

        $sql = "INSERT INTO request(fullname,email,date,time,phonenumber,address)VALUES ('$fullname1','$email1','$date','$time','$number', '$address1')";;
    // Checking if the form submitted into the database
    if ($dbconn->query($sql) === true) {
        session_start();
        $_SESSION['id'] = $fetchedid;
        $_SESSION['email'] = $fecthedemail;

        header("Location: customer.php");
    } else {
        echo "Error: " . $sql . "<br/>" . $dbconn->error;
    }
} else {
    echo "<script>alert('Your password does not match!!!')</script>";
}
    

 
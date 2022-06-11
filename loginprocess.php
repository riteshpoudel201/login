<?php 
$conn = new mysqli("localhost","root","","login");
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='".$user."' AND password='$pass'";
    $result = mysqli_query($conn,$sql);
    if($result){
    $row_num = mysqli_num_rows($result);
    if($row_num > 0){
        echo "You have successfully logged in.";
    }
    else{
        echo "You are not logged in";
    }
}
else{
    echo "Invalid input supplied";
}
}
else{
    echo "Not Working";
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $countryCode = $_POST['countryCode'];
    $phoneNumber = $_POST['phone'];
    $about = $_POST['about'];
    $skill = $_POST['skill'];

    $success = mail("gmonetix@gmail.com","Message from ".$email,"Name - ".$name."<br/>Phone Number - ".$countryCode.$phoneNumber
        ."<br/>Email - ".$email."<br/>Skills - ".$skill."<br/>Mesage - ".$message);
    if ($success) {
        ?>
        <script type="text/javascript">
            window.location.href = 'http://www.gmonetix.in/contactUs/index.html#success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            window.location.href = 'http://www.gmonetix.in/contactUs/index.html#failed';
        </script>
        <?php
    }

} else {
    echo "Error";
}
?>
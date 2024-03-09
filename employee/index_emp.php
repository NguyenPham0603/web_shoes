<?php
    session_start();
    if(!isset($_SESSION['username_emp'])){
        header('Location: login_employee.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_emp.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="icon" href="../images/icon/Logo1.jpg" type="image/jpg">
    <title>XiYan Shop - The Women's Shose Employee</title>
</head>
<body>
    <div class = "wrapper_emp">
        <?php
            include('../admin/config/config.php');
            include ('../admin/module/ad_header.php');
            include ('pages/menu_emp.php');
            include ('pages/main_emp.php');
            echo "</br></br>";
            include ('../pages/footer.php');
        ?>
    </div>
    
</body>
</html>
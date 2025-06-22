<?php
if (isset($_GET['content'])) {
    $content = $_GET['content'];
} else {
    $content = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles/adminhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="adminDashboard-container">
        <div class="sidenav">

            <ul>
                <li><i class="fa fa-tachometer"></i><a href="?content=home">&nbsp;Dashboard</a></li>
                <li><i class="fa fa-users" aria-hidden="true"></i><a href="?content=manageUser">&nbsp;Manage&nbsp;Users</a></li>
                <li><i class="fa fa-square" aria-hidden="true"></i><a href="?content=managePackage">&nbsp;Manage&nbsp;Packages</a></li>
                <li><i class="fa fa-bookmark" aria-hidden="true"></i><a href="?content=manageBooking">&nbsp;Check&nbsp;Reservations</a></li>
                <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
        </div>


        <div class="content">
            <?php
            switch ($content) {
                case 'manageUser':
                    include 'manageUser.php';
                    break;
                case 'managePackage':
                    include 'managePackage.php';
                    break;
                case 'manageBooking':
                    include 'manageBooking.php';
                    break;
                default:
                    include 'home.php';
                    break;
            }
            ?>
        </div>

    </div>


</body>

</html>
<?php

session_start();


if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>






<!DOCTYPE html>


<html lang="en">

<head>
    <title>Home</title>
</head>


<?php include('header2.php') ?>

<body>




    <table align="center" border="8px" style="padding: 15px;">
        <tr>
            <td>
                <h2 align="center">Welcome</h2>
                <h2 align="center">To</h2>
                <h2 align="center">Classified System Home Portal</h2>
            </td>
        </tr>
    </table>



    <p><br></p>
    <p><br></p>

</body>

<?php include('footer.php') ?>

</html>
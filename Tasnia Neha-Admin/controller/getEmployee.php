



<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','classified-system');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    $sql="SELECT * FROM employee_info WHERE Name LIKE '%{$q}%'";
    $result = mysqli_query($con,$sql);

    
    echo '<table id="tableEmp2" style="background-color: lightcyan;" align="center" border="3px" style="padding: 15px;">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>User Name</th>
    <th>Password</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Action</th>
    </tr>';
    
    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['User_Name'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Dob'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        $username=$row['User_Name'];
        echo '<td><button style= "background-color: red" onclick="deleteEmployee(\''.$username.'\')">Delete</button></td>';
        echo "</tr>";
    }
    echo "</table>";
    

    mysqli_close($con);

  ?>
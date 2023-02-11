<?php
include "../Control/ContactUs_Verify.php";
//session_start();
?>
<!DOCTYPE html>
<html>
<body>


<font align="center" color="#483d8b" size="5" face="monospace">
    <h2 >Contact Us</h2>
</font>
    <form action="" method="post" enctype="multipart/form-data">

    <table border="0" width="500" align="center" cellspacing="0" cellpadding="8" bgcolor="#ffffff">
    <tr height="20px" bgcolor="#dcd0ff">
        <td  align="center"><h3>Have any Question?</h3></td>
</tr>
        <tr height="50px" bgcolor="#dcd0ff">
        <td>Name :
            <br>
            <input type="text" name="name" size="40">
            <br>
            <font color="red">
            <?php
           echo $nameerr;
           ?></font>
           </td>
</tr><tr height="70px" bgcolor="#dcd0ff">
            <td>Email:
            <br>
            <input type="text" name="email"size="40">
            <br>
            <font color="red">
            <?php
           echo $emerr;
           ?></font>
           </td>
</tr >
<tr height="80px" bgcolor="#dcd0ff">
            <td>Ask Question:
            <br>
            <textarea name="ques">Ask your question...</textarea>
            <br>
            <font color="red">
            <?php
           echo $queserr;
           ?></font>
           </td>
           
        </tr>  
        <tr height="70px" bgcolor="#dcd0ff">
        <td>   
        <input type="submit" name="submit" value="Submit" bgcolor="#48d1cc">
        <br>
        </td>
        </tr>
        <tr height="40px" bgcolor="#dcd0ff"><td>    
        Go back <a href="Home.php">Here</a>
            </td>
        
        </tr>
        <tr>
            <td>
                <?php echo "<strong>".$dataerr."</strong>"?>
            </td>
</tr>

</table>
</form>
</body>
</html>
     
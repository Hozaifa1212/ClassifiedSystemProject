function validateForm()
{   var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
    var contno=document.getElementById("contno").value;
    var email = document.getElementById("email").value;
    var pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var emailchk = pattern.test(email);
    var pass=document.getElementById("pass").value;
    var confpass=document.getElementById("confpass").value;
    
    if(fname=="" && fname.length<3)
    {
     document.getElementById("errfname").innerHTML="your first name is incorrect";
         return false;
    }
    if(lname=="" && lname.length<3)
    {
     document.getElementById("errlname").innerHTML="your last name is incorrect";
         return false;
    }
    if(age<10)
    {
     document.getElementById("errage").innerHTML="your age is less than 10!!!";
         return false;
    }
    if(contno=="" && contno!=11)
    {
     document.getElementById("errcontno").innerHTML="your contact no is not correct";
         return false;
    }
    if(email=="" && !emailchk)
    {
        document.getElementById("erremail").innerHTML="your email is not valid";
        return false;
          }
       if(pass=="" && pass.length<4)
    {
        document.getElementById("errpass").innerHTML="your password is less than 5 char";
        return false;
          }
          if(confpass=="" && confpass.length<4)
    {
        document.getElementById("errconfpass").innerHTML="your password is less than 5 char";
        return false;
          }
          if(pass != confpass)
          {
            alert("The two passwords must match!!");  
            return false;
                }
              }
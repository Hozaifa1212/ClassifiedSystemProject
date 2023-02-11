function validateForm()
{   var name=document.getElementById("firstname").value;
    var pass1=document.getElementById("pass").value;
    if(name.length>3)
    {
document.getElementById("errfname").innerHTML="your name is correct";
return true;
    }
    else{
        document.getElementById("errfname").innerHTML="inccorect name";
        return false;
    }
}



function fetchproduct()
{
var proname=document.getElementById("proname").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","/supplier/Control/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proname="+proname);



}

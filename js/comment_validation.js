function ValidateComment()

{    
    var _message = document.getElementById('message').value.trim();   
    if(_message=="")
    {
        alert("Du måste skriva en kommentar");
        return false;
    }  
  
return true;
}
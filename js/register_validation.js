//funktion för att validera regestreringsinput på clientsidan
function ValidateRegister()
{    
    var _name = document.getElementById('name').value.trim();
    var _email = document.getElementById('email').value.trim();
    var _password = document.getElementById('password').value.trim();
    var type = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  
    if(_password=="")
    {
        alert("Du måste skriva ett lösenord");
        return false;
    }
     if(_name=="")
    {
        alert("Du måste ange namn");
        return false;
    }
    if(!type.test(_email))
    {
        alert("Ange en korrekt mailadress");
        return false;
    }

return true;
}
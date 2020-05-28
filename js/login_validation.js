
//funktionför att validera inloggningsinput på clientsidan
function LoginValidation()
{
    var _email = document.getElementById('email').value.trim();
    var _password = document.getElementById('password').value.trim();
    var type = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      if(!type.test(_email))
    {
        alert("ange en korrekt mailadress");
        return false;
    }
    if(_password== "")
    {
        alert("ange ett lösenord");
        return false;
    }
return true;
}

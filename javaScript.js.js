function ValidateComment()

{
    
    var _name = document.getElementById('name').value.trim();
    
    var _message = document.getElementById('message').value.trim();
    var type = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(_message=="")
    {
        alert("Du måste skriva en kommentar");
        return false;
    }
     if(_name=="")
    {
        alert("Du måste ange namn");
        return false;
    }
  

return true;
}

function Test()
{
     var _name = document.getElementById('name').value.trim();
    
    var _message = document.getElementById('message').value.trim();

    if(_message=="")
    {
        alert("tomt meddelande");
        return false;
    }
    if(_name == "")
    {
        alert("tomt namnfält");
        return false;

    }
    return true;

}
function ValidateDelete()

{    
    var _message = document.getElementById('delete').value.trim();   
    if(_message=="")
    {
        alert("Du måste välja ett id");
        return false;
    }  
  
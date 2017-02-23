 function validateForm() {
    var fName = document.forms["myForm"]["fName"].value;
    var lName = document.forms["myForm"]["lName"].value;
    var email = document.forms["myForm"]["email"].value;
    var cName = document.forms["myForm"]["cName"].value;
    var telNum = document.forms["myForm"]["telNum"].value;
    var dob = document.forms["myForm"]["dob"].value;
    var wStatus = document.forms["myForm"]["wStatus"].value;
    var role = document.forms["myForm"]["role"].value;
    var pwd1 = document.forms["myForm"]["pwd1"].value;
    var pwd2 = document.forms["myForm"]["pwd2"].value;
    
    if (fName == "") {
        alert("First Name must be filled out");
        return false;
    }else if(lName == ""){
        alert("Last Name must be filled out");
        return false;
    }
    else if(email == ""){
        alert("Email must be filled out");
        return false;
    }
     else if(cName == ""){
        alert("Compagny Name must be filled out");
        return false;
    }
    else if(telNum == ""){
        alert("Telephone Number must be filled out");
        return false; 
    }
    else if(dob == ""){
        alert("Date Of Birth must be filled out");
        return false;  
    }
    else if(wStatus == ""){
        alert("Work Status must be filled out");
        return false;  
    }
    else if(role == ""){
        alert("Role must be filled out");
        return false;  
    }
    else if(pwd1 == ""){
        alert("Password must be filled out");
        return false;  
    }
    else if(pwd2 == ""){
        alert("Password Confirm must be filled out");
        return false;  
    }else{
        return true; 
    }
}
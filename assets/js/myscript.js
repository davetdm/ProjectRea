
// password validation for register form

// window.onload = function() {

//     var subButton = document.getElementById("submit");
//     subButton.onclick = function value(registerForm) {

//     }

// };

function value(registerForm) {

    //check for lower case
    if (!registerForm.password1.value.match(/[a-z]/)) {
        alert("Password must contain at least one lower case letter.");
        registerForm.password1.focus();
        return false;
    }

    //Validating length
    if ((registerForm.password1.value).length < 8) {
        alert("Your password has less than 8 characters.");
        registerForm.password1.focus();
        return false;
    }

    //Validating confirmation matches
    if (registerForm.cPassword.value != registerForm.password1.value) {
        alert("Your confirmation password does not match.");
        registerForm.password1.focus();
        return false;
    }

    //Validating confirmation input
    if (registerForm.cPassword.value == "") {
        alert("Please confirm your password.");
        registerForm.password1.focus();
        return false;
    }

    //check for upper case
    if (!registerForm.password1.value.match(/[A-Z]/)) {
        alert("Password must contain at least one upper case letter.");
        registerForm.password1.focus();
        return false;
    }

    //check for number
    if (!registerForm.password1.value.match(/\d+/g)) {
        alert("Password must contain at least one number.");
        registerForm.password1.focus();
        return false;
    }


    //confirm passwords match and have been created
    if ((registerForm.password1.value) == (registerForm.cPassword.value)) {
        alert("Your password has been created!");
        return true;
    }

};

//Email validation for register form

$('#registerForm').submit(function () {

    var a = document.forms["registerForm"]["email"].value;
    if (a == null || a == "") {
        alert("You forgot to enter your Email!");
        return false;
    } else {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (a.match(mailformat)) {
            document.registerForm.email.focus();
        } else {
            alert("You have entered an invalid Email Address!");
            document.registerForm.email.focus();
            return false;
        }
    }

});

$('#registerForm').submit(function(){

    var url = $('#registerForm').attr("action");
    var method = $('#registerForm').attr("method");
    var data = $('#registerForm').serialize();

    $.ajax({
        type: method,
        url: url,
        data: data,
        success: function(response){
            console.log(response);
            alert('Registration successful');
            window.location.reload();
        }
    });

    return false;
});

$("#first_name").keypress(function(d){
    var input = d.which;
    if(!(input >= 65 && input <= 120) && (input != 32 && input != 0)) {
        d.preventDefault();
        alert('Please Enter Alphabatic Only');
        return false;
    }
});

$("#surname").keypress(function(e){
    var input = e.which;
    if(!(input >= 65 && input <= 120) && (input != 32 && input != 0)) {
        e.preventDefault();
        alert('Please Enter Alphabatic Only');
        return false;
    }
});

function validate() {
    var username = document.getElementById("userName").value;
    var password = document.getElementById("password1").value;
    if (username == null || username == "") {
        alert("Please enter the username.");
        return false;
    }
    if (password == null || password == "") {
        alert("Please enter the password.");
        return false;
    }
    alert('Login successful');

} 

$('#productForm').submit(function() {

    var url = $('#productForm').attr("action");
    var method = $('#productForm').attr("method");
    var data = $('#productForm').serialize();
   
    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function (resp) {
            console.log(resp);
            alert("Product successfully added");
            window.location.reload();
        }
    });
    return false;

});
function validatePrice($price) {
    if (preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
        return true;  
    }
    return false;
}
$("#name").keypress(function(betswe){
    var input = betswe.which;
    if(!(input >= 65 && input <= 120) && (input != 32 && input != 0)) {
        betswe.preventDefault();
        alert('Please Enter Alphabatic Only');
        return false;
    }
});

$("#color").keypress(function(red){
    var input = red.which;
    if(!(input >= 65 && input <= 120) && (input != 32 && input != 0)) {
        red.preventDefault();
        alert('Please choose a correct color');
        return false;
    }
});

function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');
 
   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Yellow';
        alert(error);
		return false;
 
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters. Don't include dash (-)\n";
       // fld.style.background = 'Yellow';
        alert(error);
		return false;
    } else if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length. Make sure you included an area code. Don't include dash (-)\n";
        fld.style.background = 'Yellow';
        alert(error);
		return false;
    }
    return true;
}
    $('#saveForm').submit(function() {

    var url = $('#saveForm').attr("action");
    var method = $('#saveForm').attr("method");
    var data = $('#saveForm').serialize();

    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function (resp) {
            console.log(resp);
            alert("Product successfully saved");
            window.location.reload();
        }
    });
    return false;

});

$(document).ready(function(){
    $('$deleteData').click(function(){
        var id = $(this).attr("id");
        if(Confirm("Are you sure you want to delete?"))
        {
            window.location="<?php echo base_url(); ?>Product/deleteData/"+id;
        }
        else 
        { 
            return false
        }       
    });
});

//cart 

$(document).ready(function()
{
    $('.add_cart').click(function(){
        var id    = $(this).data("id");
        var name  = $(this).data("name");
        //var color = $(this).data("color");
        var price = $(this).data("price");
        var quantity = $('#' + id).val();
        $.ajax({
            url : $(this).data("url"),
            method : "POST",
            data : {id: id, name: name, price: price,quantity: quantity},
            success: function(data){
                $('#detail_cart').html(data);
            }
        });
    });
   
    $('#detail_cart').load(cart_url);
  
    $(document).on('click','.remove_cart',function(){
        var row_id=$(this).attr("id"); 
        $.ajax({
            url : carts_url,
            method : "POST",
            data : {row_id : row_id},
            success :function(data){
                $('#detail_cart').html(data);
            }
        });
    });
});




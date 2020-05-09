function change() {
    /*var valor = document.getElementById("password").value;
    console.log(valor); */

    /*if($("#password").val() === "") {
        $("#password").css("border", "1px solid red");
    }
    else{
      $("#password").css("background-color", "");
    }

    if($("#username").val() === "") {
        $("#username").css("border", "1px solid red");
    }
    else{
      $("#username").css("background-color", "");
    }
  }*/

  if($("#password").val() === "" && $("#username").val() === "" && $("#email").val() === "") {
    $("#password").css("border", "1px solid red");
    $("#username").css("border", "1px solid red");
    $("#email").css("border", "1px solid red");
  }else{
    $("#password").css("border", "");
    $("#username").css("border", "");
    $("#email").css("border", "");
  }

  if($("#password").val() != $("#pass").val() ) {
    alert('las contraseñas no coinciden');
  }
}
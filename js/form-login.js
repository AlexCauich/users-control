function change() {
    /*var valor = document.getElementById("password").value;
    console.log(valor); */

    if($("#password").val() === "") {
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
  }
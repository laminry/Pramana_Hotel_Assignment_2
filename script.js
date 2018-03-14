function myFunction() {

  if (document.getElementByName("name").value == ""){
      document.getElementByName("name").style.borderColor = "red";
      return false;
    }
    if (document.getElementByName("email").value == ""){
      document.getElementByName("email").style.borderColor = "red";
      return false;
    }
      if (document.getElementByName("phone").value == ""){
      document.getElementByName("phone").style.borderColor = "red";
      return false;
    }
          if (document.getElementByName("lof").value == ""){
      document.getElementByName("lof").style.borderColor = "red";
      return false;
    }
}



$(document).ready(function(){
    $("input").click(function(){
      $(this).css("border", "black");
    });
  });






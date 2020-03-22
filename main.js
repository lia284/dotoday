function logIn() {
  var uid = $("#email").val();
  var psw  = $("#psw").val();
  console.log(uid + " " + psw);
  if(validateLogin(uid, psw)) {
    // load new page
    window.location = 'profile.html';
  }
  else {
    $('.alert').show();
  }

}

function validateLogin(uid, psw) {
  //get database data
  var uid_db = "julia";
  var psw_db = "test";

  if(uid == uid_db) {
    if(psw == psw_db) {
      return true;
    }
    else {
      return false;
    }
  }
  else {
    return false;
  }
}

function signIn() {
  var name = $("#name").val();
  var age  = $("#age").val();
  var city = $("#city").val();
  var country = $("#country").val();
  var uid = $("#email").val();
  var psw  = $("#psw").val();

  //input in database
  //bei success
  $(".signin").hide();
  $(".preferences").show();

}

function toggleState(element) {
  if($(element).attr('class') == 'btn large btn-outline-light') {
    console.log("att")
    $(element).removeClass('btn-outline-light');
    $(element).addClass('btn-light');

    console.log($(element).attr('class'))
  }
  else {
    console.log("e")
    $(element).removeClass('btn-light');
    $(element).addClass('btn-outline-light');
      console.log($(element).attr('class'))


  }
}

function searchCatSec(input) {
  $(".search-overlay").show();
}

function closeSearch(element) {
  console.log("herer");
  $(".search-overlay").hide();
}

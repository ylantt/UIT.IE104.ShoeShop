document.getElementById("login-btn").addEventListener("click", function (e) {
  e.preventDefault();

  var arrInfoSignIn = getDataSignIn();

  var name = arrInfoSignIn["name"].value;
  var password = arrInfoSignIn["password"].value;
  var errorNoti = arrInfoSignIn["errorNoti"];

  if (isEmptyInput(name, password) !== false) {
    throwError("Fill in all fields!", "result-data__error", errorNoti);
  } else {
    isUserExistsLogin(getDataSignIn);
  }
});

function isUserExistsLogin(functionType) {
  var arrInfo = functionType();

  var errorNoti = arrInfo["errorNoti"];
  var password = arrInfo["password"].value;
  var name = arrInfo["name"].value;

  var xmlHttp = new XMLHttpRequest();

  xmlHttp.open("POST", "Login/checkUserExists", true);

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      if (xmlHttp.responseText === "error") {
        throwError(
          "Something when wrong, try again!",
          "result-data__error",
          errorNoti
        );
      } else if (xmlHttp.responseText === "wronglogin") {
        throwError(
          "Invalid Username or Password!",
          "result-data__error",
          errorNoti
        );
      } else {
        var currentLocation = document.querySelector("input[name='location']")
          .value;
        location.replace("/" + currentLocation);
      }
    }
  };

  xmlHttp.setRequestHeader("Content-Type", "application/json");

  var data = { name: name, password: password };
  xmlHttp.send(JSON.stringify(data));
}

function getDataSignIn() {
  var name = document.querySelector('.login input[name="name"]');
  var password = document.querySelector('.login input[name="password"]');
  var errorNoti = document.querySelector(".login .result-data");

  return {
    name: name,
    password: password,
    errorNoti: errorNoti,
  };
}

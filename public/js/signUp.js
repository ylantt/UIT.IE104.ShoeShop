document.getElementById("reg-btn").addEventListener("click", function (e) {
  e.preventDefault();

  var arrInfoSignup = getDataSignUp();

  var email = arrInfoSignup["email"];
  var password = arrInfoSignup["password"];
  var pwdRepeat = arrInfoSignup["pwdRepeat"];
  var email = arrInfoSignup["email"];
  var username = arrInfoSignup["username"];
  var errorNoti = arrInfoSignup["errorNoti"];

  if (
    isEmptyInput(
      username.value,
      email.value,
      password.value,
      pwdRepeat.value
    ) !== false
  ) {
    throwError("Fill in all fields!", "result-data__error", errorNoti);
  } else if (isInvalidUsername(username.value) !== false) {
    throwError("Choose a proper username!", "result-data__error", errorNoti);
  } else if (isInvalidEmail(email.value) !== false) {
    throwError("Choose a proper email!", "result-data__error", errorNoti);
  } else if (isPwdNotMatch(password.value, pwdRepeat.value) !== false) {
    throwError("Password doesn't match!", "result-data__error", errorNoti);
  } else {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "Register/insertUser", true);

    xmlHttp.onreadystatechange = function () {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if (xmlHttp.responseText === "error") {
          throwError(
            "Something when wrong, try again!",
            "result-data__error",
            errorNoti
          );
        } else if (xmlHttp.responseText === "success") {
          throwError("You have sign up!", "result-data__success", errorNoti);
          clearInput(email, password, pwdRepeat, username);
        }
      }
    };

    xmlHttp.setRequestHeader("Content-Type", "application/json");

    var data = {
      username: username.value,
      email: email.value,
      password: password.value,
    };
    xmlHttp.send(JSON.stringify(data));
  }
});

function isUserExistsSignUp(functionType) {
  var arrInfo = functionType();
  var errorNoti = arrInfo["errorNoti"];

  var username = arrInfo["username"].value;
  var email = arrInfo["email"].value;

  var xmlHttp = new XMLHttpRequest();

  xmlHttp.open("POST", "Register/checkUserExists", true);

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      if (xmlHttp.responseText === "error") {
        throwError(
          "Something when wrong, try again!",
          "result-data__error",
          errorNoti
        );
      } else if (xmlHttp.responseText === "usernametaken") {
        throwError("User already exists!", "result-data__error", errorNoti);
      } else {
        errorNoti.style.visibility = "hidden";
      }
    }
  };

  xmlHttp.setRequestHeader("Content-Type", "application/json");

  var data = { username: username, email: email };
  xmlHttp.send(JSON.stringify(data));
}

document
  .querySelector('.reg input[name="username"]')
  .addEventListener("keyup", function () {
    return isUserExistsSignUp(getDataSignUp);
  });

document
  .querySelector('.reg input[name="email"]')
  .addEventListener("keyup", function () {
    return isUserExistsSignUp(getDataSignUp);
  });

function getDataSignUp() {
  var email = document.querySelector('.reg input[name="email"]');
  var password = document.querySelector('.reg input[name="password"]');
  var pwdRepeat = document.querySelector('.reg input[name="pwdrepeat"]');
  var username = document.querySelector('.reg input[name="username"]');
  var errorNoti = document.querySelector(".reg .result-data");

  return {
    email: email,
    password: password,
    pwdRepeat: pwdRepeat,
    username: username,
    errorNoti: errorNoti,
  };
}

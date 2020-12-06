document.getElementById("reg-btn").addEventListener("click", function (e) {
  e.preventDefault();

  var arrInfoSignup = getDataSignUp();

  var email = arrInfoSignup["email"].value;
  var password = arrInfoSignup["password"].value;
  var pwdRepeat = arrInfoSignup["pwdRepeat"].value;
  var email = arrInfoSignup["email"].value;
  var username = arrInfoSignup["username"].value;
  var errorNoti = arrInfoSignup["errorNoti"];

  if (isEmptyInput(username, email, password, pwdRepeat) !== false) {
    throwError("Fill in all fields!", "result-data__error", errorNoti);
  } else if (isInvalidUsername(username) !== false) {
    throwError("Choose a proper username!", "result-data__error", errorNoti);
  } else if (isInvalidEmail(email) !== false) {
    throwError("Choose a proper email!", "result-data__error", errorNoti);
  } else if (isPwdNotMatch(password, pwdRepeat) !== false) {
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
        throwError("Username already taken!", "result-data__error", errorNoti);
      } else {
        // username is not taken
        errorNoti.style.visibility = "hidden";
      }
    }
  };

  xmlHttp.setRequestHeader("Content-Type", "application/json");

  var data = { username: username, email: email };
  xmlHttp.send(JSON.stringify(data));
}

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
        var currentLocation = document.querySelector("input[name='location']").value;
        location.replace("/" + currentLocation);
      }
    }
  };

  xmlHttp.setRequestHeader("Content-Type", "application/json");

  var data = { name: name, password: password };
  xmlHttp.send(JSON.stringify(data));
}

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

function throwError(str, type, errorNoti) {
  errorNoti.classList.add(type);
  errorNoti.style.visibility = "visible";
  errorNoti.textContent = str;
}

function isEmptyInput() {
  for (var input in arguments) {
    if (!arguments[input]) {
      return true;
    }
  }

  return false;
}

function isInvalidUsername(username) {
  var regex = /^[a-zA-Z0-0]*$/;
  if (!regex.test(username)) {
    return true;
  }

  return false;
}

function isInvalidEmail(email) {
  var regex = /^\S+@\S+\.\S+$/;
  if (!regex.test(email)) {
    return true;
  }

  return false;
}

function isPwdNotMatch(password, pwdRepeat) {
  if (password !== pwdRepeat) {
    return true;
  }

  return false;
}

function clearInput() {
  for (var input in arguments) {
    arguments[input] = "";
  }
}

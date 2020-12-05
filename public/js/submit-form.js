var email = document.querySelector('.reg input[name="email"]');
var password = document.querySelector('.reg input[name="password"]');
var pwdRepeat = document.querySelector('.reg input[name="pwdrepeat"]');
var username = document.querySelector('.reg input[name="username"]');

document.getElementById("reg-btn").addEventListener("click", function (e) {
  e.preventDefault();
  if (isEmptyInput(username.value, email.value, password.value, pwdRepeat.value) !== false) {
    throwError("Fill in all fields!", "result-data__error");
  } else if (isInvalidUsername(username.value) !== false) {
    throwError("Choose a proper username!", "result-data__error");
  } else if (isInvalidEmail(email.value) !== false) {
    throwError("Choose a proper email!", "result-data__error");
  } else if (isPwdNotMatch(password.value, pwdRepeat.value) !== false) {
    throwError("Password doesn't match!", "result-data__error");
  } else {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "Register/insertUser", true);

    xmlHttp.onreadystatechange = function () {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if (xmlHttp.responseText === "error") {
          throwError("Something when wrong, try again!", "result-data__error");
        } else if (xmlHttp.responseText === "success") {
          throwError("You have sign up!", "result-data__success");
          clearInput(email, password, pwdRepeat, username);
        }
      }
    };

    xmlHttp.setRequestHeader("Content-Type", "application/json");

    var data = { username: username.value, email: email.value, password: password.value };
    xmlHttp.send(JSON.stringify(data));
  }
});

username.addEventListener("keyup", isUserExists);
email.addEventListener("keyup", isUserExists);

function isUserExists() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "Register/checkUserExists", true);

    xmlHttp.onreadystatechange = function () {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if (xmlHttp.responseText === "error") {
          throwError("Something when wrong, try again!", "result-data__error");
        } else if (xmlHttp.responseText === "usernametaken") {
          throwError("Username already taken!", "result-data__error");
        } else {
          document.querySelector(".reg .result-data").style.visibility =
            "hidden";
        }
      }
    };

    xmlHttp.setRequestHeader("Content-Type", "application/json");

    var data = { username: username.value , email: email.value };
    xmlHttp.send(JSON.stringify(data));
}

function throwError(str, type) {
  var errorNoti = document.querySelector(".reg .result-data");
  errorNoti.classList.add(type);
  console.log(type);
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
    arguments[input].value = "";
  }
}
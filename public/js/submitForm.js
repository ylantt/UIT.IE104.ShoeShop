function throwError(str, type, errorNoti) {
  errorNoti.classList.remove("result-data__error");
  errorNoti.classList.remove("result-data__success");
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
    arguments[input].value = "";
  }
}

function checkSubmitButton() {
    var n = document.getElementById("numPlayers").value
    var isNum = /^\d+$/.test(n)
    var submitButton = document.getElementById("Submit")
    if ((isNum && (n > 0)) && (n <= 5000)) {
        submitButton.removeAttribute("disabled")
    }
    else {
        submitButton.setAttribute("disabled", true)
    }
}

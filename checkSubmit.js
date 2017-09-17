function checkSubmitButton(sender) {
  console.log("Hi!");
  var n = sender.value;
  var submitButton = document.getElementById("Submit");
  if ((typeof n === "number") && (n >== 0) && (n <== 5000)) {
	   submitButton.removeAttribute("disabled");
  }
  else {
	   submitButton.setAttribute("disabled");
  }
}

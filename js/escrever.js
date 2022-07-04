function addText() {
    document.getElementById("text2").innerHTML =
      document.getElementById("myText").value;
  }
  var out = document.querySelector("#text2");
  var text = out.textContent;
  var str = text.replace(/(.{10})/g, "$1<br/>");
  out.innerHTML = str;
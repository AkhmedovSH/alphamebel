

var links = document.querySelectorAll(".office_button");
var content = document.querySelectorAll(".google_map");

for (var i = 0; i < links.length; i++) {
  (function (i) {
    var link = links[i];
    link.onclick = function () {
      for (var j = 0; j < content.length; j++) {
        var display = window.getComputedStyle(content[j]).display;
        if (display == "flex") {
          content[j].style.display = "none";
        }
      }
      content[i].style.display = "flex";
    };
  })(i);
}

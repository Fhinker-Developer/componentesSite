const btn_os = document.querySelector(".btn-menu-os");

const navegation_btns = document.querySelectorAll(".menu-os nav a");

btn_os.addEventListener("click", function () {
  const menu = document.querySelector(".menu-os");
  menu.classList.toggle("menu-os-close");

  navegation_btns.forEach(function (btn, index) {
    btn.style.left = "0";
  });
});

navegation_btns.forEach(function (btn, index) {
  btn.addEventListener("click", function (e) {
    for (n = 0; n <= 4; n++) {
      if (n == index) {
        var effect = "2rem";

        if (btn.style.left == effect) {
          btn.style.left = "0";
        } else {
          btn.style.left = "2rem";
        }
      } else {
        navegation_btns[n].style.left = "0";
      }
    }
  });
});

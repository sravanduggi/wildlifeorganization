const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");

  burger.addEventListener("click", () => {
    // Toggle view
    nav.classList.toggle("nav-active");

    //Animation of links
    navLinks.forEach((link, index) => {
      const num = index / 7 + 0.5;
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation =
          "navLinkFade 0.5s ease forwards" + " " + num + "s";
      }
    });

    //Burger Animate
    burger.classList.toggle("cross-mark");
  });
};

navSlide();

//for editing profile

const edit = () => {
  const OutBox = document.getElementsByClassName("edit_box");
  const PwdBox = document.getElementsByClassName("edit_pswrd");
  const NmbrBox = document.getElementsByClassName("edit_number");

  const passwordEdit_Icon = document.getElementById("edit_password");
  const NmbrEditIcon = document.getElementById("edit_phno");

  //functions

  passwordEdit_Icon.addEventListener("click", () => {
    OutBox.style.display = "block";
    PwdBox.style.display = "block";
  });
  NmbrEditIcon.addEventListener("click", () => {
    
  });
  OutBox.style.display = "block";
  NmbrBox.style.display = "block";
};

edit();

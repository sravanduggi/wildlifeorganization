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

// leave checking

const LeaveCheck = () => {
    const from = document.getElementById("from").value;
    const to = document.getElementById("to").value;
    const btn = document.getElementById("submit");
    if (to < from) {
        alert("The date entered should be valid");
        btn.disable = true;
    }
};

LeaveCheck();
document.addEventListener("DOMContentLoaded", function () {

    /*
    ==========================================
    VECTORQ HOME PAGE JAVASCRIPT
    ==========================================
    */


    // ==========================================
    // PERFORMANCE CAR PARALLAX
    // ==========================================

    const hero = document.querySelector(".hero-section");
    const car = document.querySelector(".car-scene");


    if (hero && car && window.matchMedia("(pointer: fine)").matches) {

        hero.addEventListener("mousemove", function (event) {

            const rect = hero.getBoundingClientRect();

            const mouseX =
                (event.clientX - rect.left) /
                rect.width -
                0.5;

            const mouseY =
                (event.clientY - rect.top) /
                rect.height -
                0.5;


            car.style.transform =
                `translate(${mouseX * 12}px, ${mouseY * 8}px)`;

        });


        hero.addEventListener("mouseleave", function () {

            car.style.transform =
                "translate(0, 0)";

        });

    }


    // ==========================================
    // SERVICE CARD SCROLL REVEAL
    // ==========================================

    const serviceCards =
        document.querySelectorAll(".service-card");


    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "card-visible"
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.15
                }
            );


        serviceCards.forEach(function (card) {

            observer.observe(card);

        });

    }


    // ==========================================
    // BUTTON CLICK EFFECT
    // ==========================================

    const buttons =
        document.querySelectorAll(
            ".btn, .cta-button"
        );


    buttons.forEach(function (button) {

        button.addEventListener(
            "mousedown",
            function () {

                button.style.transform =
                    "scale(.97)";

            }
        );


        button.addEventListener(
            "mouseup",
            function () {

                button.style.transform =
                    "";

            }
        );


        button.addEventListener(
            "mouseleave",
            function () {

                button.style.transform =
                    "";

            }
        );

    });


    // ==========================================
    // SMOOTH INTERNAL LINKS
    // ==========================================

    const internalLinks =
        document.querySelectorAll(
            'a[href^="#"]'
        );


    internalLinks.forEach(function (link) {

        link.addEventListener(
            "click",
            function (event) {

                const targetId =
                    link.getAttribute("href");


                if (targetId === "#") {
                    return;
                }


                const target =
                    document.querySelector(targetId);


                if (target) {

                    event.preventDefault();


                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });

                }

            }
        );

    });


    // ==========================================
    // VECTORQ CONSOLE MESSAGE
    // ==========================================

    console.log(
        "VECTORQ Auto Parts & Performance"
    );

    console.log(
        "Built to Drive. Tuned to Last."
    );

});
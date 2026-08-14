document.addEventListener("DOMContentLoaded", function () {

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


    console.log("%c VECTORQ Auto Parts & Performance ", "font-weight: bold; font-size: 14px; color: #d71920; background: #0a0a0a; padding: 4px 10px; border-left: 3px solid #d71920;");
    console.log("%c Built to Drive. Tuned to Last. ", "font-size: 11px; color: #888; background: #0a0a0a; padding: 2px 10px;");

});
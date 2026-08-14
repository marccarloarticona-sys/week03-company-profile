document.addEventListener("DOMContentLoaded", function () {

    const serviceItems =
        document.querySelectorAll(".service-item");

    const wheelCards =
        document.querySelectorAll(".wheel-card");

    const detailPackages =
        document.querySelectorAll(".detail-package");


    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "service-visible"
                            );

                            observer.unobserve(
                                entry.target
                            );
                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );

        serviceItems.forEach(function (item) {
            observer.observe(item);
        });

        wheelCards.forEach(function (card) {
            observer.observe(card);
        });

        detailPackages.forEach(function (card) {
            observer.observe(card);
        });
    }


    serviceItems.forEach(function (item) {

        item.addEventListener("mouseenter", function () {

            serviceItems.forEach(function (other) {

                if (other !== item) {
                    other.style.opacity = "0.45";
                }

            });

        });


        item.addEventListener("mouseleave", function () {

            serviceItems.forEach(function (other) {
                other.style.opacity = "";
            });

        });

    });


    wheelCards.forEach(function (card) {

        card.addEventListener("mouseenter", function () {

            const wheel =
                card.querySelector(".wheel");

            if (wheel) {
                wheel.style.animationDuration = "3s";
            }

        });


        card.addEventListener("mouseleave", function () {

            const wheel =
                card.querySelector(".wheel");

            if (wheel) {
                wheel.style.animationDuration = "";
            }

        });

    });


    detailPackages.forEach(function (card) {

        card.addEventListener("click", function () {

            const link =
                card.querySelector("a");

            if (link) {
                link.focus();
            }

        });

    });


    console.log(
        "VECTORQ Services Page loaded."
    );

});
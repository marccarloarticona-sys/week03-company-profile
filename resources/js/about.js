document.addEventListener("DOMContentLoaded", function () {

    const timelineItems =
        document.querySelectorAll(".timeline-item");

    const valueCards =
        document.querySelectorAll(".value-card");

    const teamCards =
        document.querySelectorAll(".team-card");

    const animatedElements = [
        ...timelineItems,
        ...valueCards,
        ...teamCards
    ];

    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "about-visible"
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

        animatedElements.forEach(function (element) {
            observer.observe(element);
        });
    }

    teamCards.forEach(function (card) {

        card.addEventListener("mouseenter", function () {

            const image =
                card.querySelector(".team-image");

            if (image) {
                image.style.transform =
                    "scale(1.02)";
            }

        });

        card.addEventListener("mouseleave", function () {

            const image =
                card.querySelector(".team-image");

            if (image) {
                image.style.transform =
                    "";
            }

        });

    });

    console.log(
        "VECTORQ About Page loaded."
    );

});
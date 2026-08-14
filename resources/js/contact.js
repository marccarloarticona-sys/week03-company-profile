document.addEventListener("DOMContentLoaded", function () {

    const contactForm = document.getElementById("contactForm");
    const formSuccess = document.getElementById("formSuccess");

    if (!contactForm) {
        return;
    }

    contactForm.addEventListener("submit", function (event) {

        event.preventDefault();

        const submitButton =
            contactForm.querySelector(".contact-submit");

        const originalText =
            submitButton.innerHTML;

        submitButton.innerHTML =
            "PROCESSING <span>...</span>";

        submitButton.disabled = true;

        setTimeout(function () {

            formSuccess.classList.add("show");

            submitButton.innerHTML =
                "INQUIRY SENT <span>✓</span>";

            contactForm.reset();

            setTimeout(function () {

                submitButton.innerHTML =
                    originalText;

                submitButton.disabled = false;

            }, 2500);

        }, 900);

    });

});
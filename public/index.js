const form = document.querySelector("form");

function sendEmail() {
    const params = {
        name: document.getElementById("floating_first_name").value,
        lastName: document.getElementById("floating_last_name").value,
        email: document.getElementById("floating_email").value,
        company: document.getElementById("floating_company").value,
        phone: document.getElementById("floating_phone").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
    };

    emailjs.send("service_wy2bsty", "template_jzb9zga", params).then(
        () => {
            Swal.fire({
                title: "SUCCEED!",
                text: "Your message has been sent!",
                icon: "success",
            });
        },
        (err) => {
            console.error(err);
            alert("Failed to send your message. Please try again later.");
        }
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    sendEmail();

    form.reset();
    return false;
});

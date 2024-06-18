import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("inquiryForm");
    const notification = document.getElementById("notification");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);

            // Honeypot logic to prevent spammer bot to submitting form into the server
            if (formData.get("business-industry")) {
                location.reload();
                alert("You are a SPAM BOT!");
            } else {
                axios
                    .post("/send-inquiry", formData)
                    .then(function (response) {
                        // Hide the form by adding 'hidden' and removing 'block'
                        form.classList.add("hidden");
                        form.classList.remove("block");

                        // Show the notification by adding 'block' and removing 'hidden'
                        notification.classList.add("block");
                        notification.classList.remove("hidden");
                    })
                    .catch(function (error) {
                        console.error("There was an error!", error);
                    });
            }
        });
    }
});

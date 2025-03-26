(function () {
  emailjs.init({
    publicKey: "yRBlX-VUb3sFPTq16",
  });
})();

document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita la recarga de la página
    let params = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value,
    }
    document.getElementById('name').value = "";
    document.getElementById('email').value = "";
    document.getElementById('subject').value = "";
    document.getElementById('message').value = "";

    // Show success message
    let alertMessage = document.getElementById("alert-message");
    alertMessage.classList.remove("hidden"); // Make it visible

    // Hide message after 5 seconds
    setTimeout(() => {
        alertMessage.classList.add("hidden"); // Hide it again
    }, 5000);

    emailjs.send('service_0qucbok', 'template_x3f2exs', params)
        .then(() => console.log('Email sent!'))
        .catch(error => console.error('Error sending email:', error));
});


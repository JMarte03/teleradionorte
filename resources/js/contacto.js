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

/* 

    <div role="alert" class="alert alert-success">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Your purchase has been confirmed!</span>
</div>

*/
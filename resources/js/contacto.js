(function () {
  emailjs.init({
    publicKey: "yRBlX-VUb3sFPTq16",
  });
})();

document.getElementById('enviar-mensaje').addEventListener('click', sendMail)

function sendMail(){
    let params = {
        nombre: document.getElementById('nombre').value,
        email: document.getElementById('email').value,
        asunto: document.getElementById('asunto').value,
        comentario: document.getElementById('comentario').value,
    }
    emailjs.send('service_0qucbok', 'template_xh9ym3d', params).then(console.log('Email sent!'))
}
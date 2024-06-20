<script src="{{ asset('js/card_home.js') }}"></script>
<script src="{{ asset('js/card_we.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.more-info-button');
        const modalTitle = document.getElementById('exampleModalLabel');
        const modalDescription = document.getElementById('productDescription');
        const emailLink = document.getElementById('emailLink');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const description = this.getAttribute('data-description');
                const productName = this.previousElementSibling.previousElementSibling
                    .textContent.trim();
                modalTitle.textContent = productName;
                modalDescription.textContent = description;
                const emailMessage =
                    `Hola, estoy interesado en ${productName}. ¿Podrían proporcionarme más información al respecto?`;
                emailLink.href =
                    `mailto:gerenciaadm@velamar.com.co?subject=Solicitud%20de%20cotización&body=${encodeURIComponent(emailMessage)}`;
                $('#exampleModal').modal('show');
            });
        });
    });

    function enviarMensajeWhatsapp() {
        const productName = document.getElementById('exampleModalLabel').textContent.trim();
        const message =
        `Hola, estoy interesado en ${productName}. ¿Podrían proporcionarme más información al respecto?`;
        const whatsappURL =
        `https://wa.me/3138153006?text=${encodeURIComponent(message)}`; // Replace with actual WhatsApp number
        window.open(whatsappURL, '_blank');
    }
</script>
<script>
    function loadPage(url) {
        // Realizar una petición AJAX para obtener el contenido de la URL
        fetch(url)
            .then(response => response.text())
            .then(data => {
                // Insertar el contenido obtenido en el contenedor
                document.getElementById('content-wrapper').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    }
</script>

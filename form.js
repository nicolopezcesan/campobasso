
$(document).ready(function () {
    $("#formContact").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        
        const h2 = document.getElementById('h2Consulta');
        h2.innerHTML = 'Gracias por tu consulta!';
        h2.style.fontSize = '50px';
        h2.style.marginBottom = '20px';

        const p = document.getElementById('pConsultas');
        p.innerHTML = 'Nos pondremos en contacto a la brevedad';
        p.style.fontSize = '21px';
        
        document.getElementById('formContact').remove();
        
        $.ajax({
            type: "POST",
            url: "form-contact.php",
            data: formData,
            processData: true,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function (data) {
                console.log('Consulta enviada exitosamente!', data);
            },
            error: function (err) {
                console.error("Error al enviar la consulta > ", err);
            }
        });
    });

    $("#formNewsletter").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        document.getElementById('uniteCampobassoContainer2').remove();
        document.getElementById('formNewsletter').remove();
        
        const div = document.getElementById('uniteCampobassoContainer1');
        const h1 = document.createElement('h1');
        h1.textContent = 'Gracias por suscribirte!';
        div.appendChild(h1);

        $.ajax({
            type: "POST",
            url: "form-newsletter.php",
            // url: "test3.php",
            data: formData,
            processData: true,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function (data) {
                const form = document.querySelector('#formNewsletter');
                form.remove();

                console.log('Newsletter enviada exitosamente!', data);
            },
            error: function (err) {
                console.error("Error al enviar newsletter => ", err);
            }
        });
    });
});
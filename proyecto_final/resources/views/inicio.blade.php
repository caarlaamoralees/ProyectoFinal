<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- estilos css -->
    <link rel="stylesheet" href="css/estilosInicio.css">
</head>
<body>

    <!-- encabezado con botenes al inicio de sesion -->
    <header>
        <h1>Bienvenido a mi pagina de motos</h1>
        <nav>
            <a href="{{url('iniciar-sesion')}}" class="boton">Iniciar sesión</a>
            <a href="{{url('registro')}}" class="boton">Registrarse</a>
        </nav>
    </header>
    <!-- seccion del carrusel -->
    <section class="carrusel">   
    <div class="carousel">
        <img class="mySlides" src="imagenes/aprilia.jpeg" alt="Aprilia">
        <img class="mySlides" src="imagenes/bmw.jpeg" alt="BMW">
        <img class="mySlides" src="imagenes/ducati.jpeg" alt="Ducati">
        <img class="mySlides" src="imagenes/honda.jpeg" alt="Honda">
        <img class="mySlides" src="imagenes/kawasaki.jpeg" alt="Kawasaki">
        <img class="mySlides" src="imagenes/ktm.jpeg" alt="KTM">
        <img class="mySlides" src="imagenes/suzuki.jpeg" alt="Suzuki">
        <img class="mySlides" src="imagenes/yamaha.jpeg" alt="Yamaha">

        <button class="left-arrow" onclick="plusDivs(-1)">&#10094;</button>
        <button class="right-arrow" onclick="plusDivs(1)">&#10095;</button>

    </div>

    <!-- script para el carrusel -->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        startAutoSlide();

        function plusDivs(n) {
            stopAutoSlide();
            showDivs(slideIndex += n);
            setTimeout(startAutoSlide, 5000);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");

            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            x[slideIndex - 1].style.display = "block";

        }

        function startAutoSlide() {
            slideInterval = setInterval(function () {
                plusDivs(1); // Avanza automáticamente a la siguiente imagen
            }, 5000); // Cambia la imagen cada 5 segundos
        }

        function stopAutoSlide() {
            clearInterval(slideInterval); // Detiene el intervalo del carrusel automático
        }

        function showButton(img) {
            if (img == 1) {
                btn.style.display = "none";
            }
        }

    </script>
    </section>
    
    <!-- contenido principal -->
    <main>
        <h2>Explora nuestros productos</h2>
        <p>Descubre una amplia gama de motos y accesorios.</p>
        <a href="{{url('iniciar-sesion')}}" class="boton">Ver Productos</a>
    </main>

    <!-- seccion de informacion -->
    <section class="informacion">
        <h2>Información de la tienda</h2>
        <p>Estamos ubicados en la calle Pirineos, 55, Madrid, España.</p>
        <p>Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.</p>
        <p>Teléfono: 91 544 70 40</p>
        <p>Nuestra tienda se encuentra situada junto al parque de la Dehesa de la Villa, en una privilegiada Zona Universitaria.
    </section>

    <!-- seccion de mapa -->
    <section class="mapa">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.994514937489!2d-3.7215956239780303!3d40.45325837143386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229b4b3bc02f3%3A0x14915ba151b290b5!2sC%2F%20de%20los%20Pirineos%2C%2055%2C%20Moncloa%20-%20Aravaca%2C%2028040%20Madrid!5e0!3m2!1ses-419!2ses!4v1747414021979!5m2!1ses-419!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- seccion de preguntas frecuentes -->
    <section class="preguntas-frecuentes">
        <h2>Preguntas Frecuentes</h2>
        <ul>
            <li><strong>¿Cómo puedo realizar un pedido?</strong> Puedes realizar un pedido a través de nuestra página web.</li>
            <li><strong>¿Cuáles son los métodos de pago aceptados?</strong> Aceptamos tarjetas de crédito, PayPal y transferencias bancarias.</li>
            <li><strong>¿Cuál es la política de devoluciones?</strong> Puedes devolver los productos dentro de los 30 días posteriores a la compra.</li>
        </ul>
    </section>

    <!-- seccion de comentarios -->
    <section class="testimonios">
        <h2>Testimonios de Clientes</h2>
        <!-- para citas textuales de otras fuentes -->
        <blockquote>
            <p>"Excelente servicio y productos de alta calidad. ¡Recomiendo esta tienda!" - Juan Pérez</p>
        </blockquote>
        <blockquote>
            <p>"La atención al cliente es excepcional. Estoy muy satisfecho con mi compra." - María López</p>
        </blockquote>
    </section>

    <!-- seccion de redes sociales -->
    <section class="redes-sociales">
        <h2>Síguenos en nuestras redes sociales</h2>
        <a href="https://www.facebook.com" target="_blank">Facebook</a>
        <a href="https://www.instagram.com" target="_blank">Instagram</a>
        <a href="https://www.twitter.com" target="_blank">Twitter</a>
    </section>

    <!-- footer -->
    <footer>
        <p>&copy; 2025 - Página hecha por Carla Morales Jimenez</p>
    </footer>

</body>
</html> 

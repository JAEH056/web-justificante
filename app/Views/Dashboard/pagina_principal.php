<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="<?=base_url('assets/imagenes/logo.ico')?>" rel="icon" type="image/x-icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <link href="<?=base_url('assets/css/principal.css')?>" type="text/css" rel="stylesheet">
    <link href="<?=base_url('assets/css/slider.css')?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <br>
    <header class="header">
        <div class="logo-container">
            <a href="https://www.gob.mx/" target="_blank" id="pleca_1">
                <img loading="lazy" src="<?=base_url('assets/imagenes/pleca_1.png')?>" alt="Gobierno de México" class="plecaGob">
            </a>
        </div>
        <div class="separador"></div>
        <div class="logo-container">
            <a href="https://www.gob.mx/sep" target="_blank" id="pleca_2">
                <img loading="lazy" src="<?=base_url('assets/imagenes/pleca_2.png')?>" alt="Educación" class="plecaGob">
            </a>
        </div>
        <div class="separador"></div>
        <div class="logo-container">
            <a href="https://tecnm.mx/" target="_blank" id="pleca_tecnm">
                <img loading="lazy" src="<?=base_url('assets/imagenes/pleca_tecnm.png')?>" alt="tecnm" class="plecaTecnm">
            </a>
        </div>
        <div class="separador"></div>
        <div class="logo-container">
            <a href="https://huatusco.tecnm.mx/" target="_blank" id="pleca_itsh">
                <img loading="lazy" src="<?=base_url('assets/imagenes/pleca_itsh.png')?>" alt="tecnm" class="plecaTecnm">
            </a>
        </div>
    </header>

    <br>
    <nav class="menu">
        <div class="menu-header">
            <button class="menu-toggle" aria-label="Abrir menú">☰</button>
        </div>
        <ul class="menu-list">
            <li><a href="https://serranosistemas.xyz/">Inicio</a></li>
            <li><a href="https://ead.huatusco.tecnm.mx/" target="_blank">Plataforma EAD</a></li>
            <li><a href="https://huatusco.tecnm.mx/" target="_blank">ITSH</a></li>
            <li><a href="<?=base_url('#!')?>">Contacto</a></li>
            <li class="menu-item-login"><a href="/view/acceso.php"><img src="<?=base_url('assets/imagenes/Inicio_Sesion.png')?>"
                        alt="Inicar Sesión" title="Inicar Sesión"></a></li>
        </ul>
    </nav>
    <script src="<?=base_url('assets/js/menu.js')?>"></script>

    <main class="page">
        <center>
            <div class="container">
                <br>
                <div class="slide-container">
                    <div class="slides">
                        <img src="<?=base_url('assets/imagenes/bienvenidos.jpg')?>" class="active">
                        <img src="<?=base_url('assets/imagenes/itsh.jpg')?>">
                    </div>
                    <div class="buttons">
                        <span class="next" aria-label="Siguiente">&#10095;</span>
                        <span class="prev" aria-label="Anterior">&#10094;</span>
                    </div>
                    <div class="dotsContainer">
                        <div class="dot active" attr="0" onclick="switchImage(this)"></div>
                        <div class="dot" attr="1" onclick="switchImage(this)"></div>
                    </div>
                </div>
                <script src="<?=base_url('assets/js/slider.js')?>"></script>
                <br>
            </div>
        </center>
    </main>

    <section id="footer">
        <div class="m-footer">
            <div class="logoinfo" data-aos="fade-up">
                <div class="contact-details">
                    <h1>Dirección</h1>
                    <li>
                        <div class="fa fa-map-marker-alt"></div>
                        <a>Av. 25 Poniente No. 100, <br> Col. Reserva Territorial, Huatusco, Veracruz, México, <br> C.P.
                            94100</a>
                    </li>
                    <h1>Contacto</h1>
                    <li>
                        <div class="fa fa-envelope"></div><a
                            href="mailto:itsh@itshuatusco.edu.mx">itsh@itshuatusco.edu.mx</a><br>
                        <div class="fa fa-phone"></div><a>+52 273-734-4000 o 800-836-3307</a>
                    </li>
                </div>
            </div>
            <div class="com" data-aos="fade-up">
                <h1>Enlaces</h1>
                <ul>
                    <li><a href="https://huatusco.tecnm.mx/" target="_blank">Oferta Educativa del ITSH</a></li>
                    <li><a href="https://www.ovh.gob.mx/" target="_blank">OVH</a></li>
                </ul>
                <h1>Número de Visita: VISITAS_AQUI</h1>
            </div>
            <div class="info" data-aos="fade-up">
                <h1>Síguenos en</h1>
                <div class="sociallogos">
                    <div class="logobox">
                        <i></i>
                        <a href="https://www.facebook.com/ITSHuatusco/" class="fa-brands fa-facebook" title="Facebook"
                            target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            © Copyright 2024 ITSH - Todos los Derechos Reservados
            <br><a onclick='window.avisoprivacidad.showModal();'>Aviso de Privacidad</a>
            <dialog id="avisoprivacidad">
                <h2>Aviso de Privacidad</h2>
                <p>
                    Responsable del Tratamiento de los Datos Personales
                    Instituto Tecnológico Superior de Huatusco, con domicilio en Av. 25 Poniente No. 100,
                    Col. Reserva Territorial, Huatusco, Veracruz, México,
                    C.P. 94100, y con el compromiso de proteger la privacidad de sus usuarios,
                    es el responsable del tratamiento de los datos personales recabados a través de este sitio web.
                    <br><br>
                    Recopilamos los siguientes datos personales:
                <ul>
                    <li>Nombre de usuario.</li>
                    <li>Correo electrónico.</li>
                    <li>Contraseñas.</li>
                    <li>Dirección.</li>
                </ul>

                <br>Finalidades del Tratamiento de Datos Personales. <br><br>
                Utilizamos los datos personales recabados para los siguientes fines:
                <ul>
                    <li>Consultar, crear, y analizar justificantes relacionados con los estudiantes.</li>
                    <li>Facilitar a los jefes de carrera la consulta y envío de información relevante.</li>
                    <li>Mantener una comunicación eficiente entre el sitio y los usuarios.</li>
                    <li>Transferencia de Datos Personales.</li>
                </ul>

                <br>Sus datos personales no serán compartidos con terceros sin su consentimiento, salvo en los casos
                establecidos por la legislación aplicable.

                <br><br>Medidas de Seguridad
                <br>Implementamos medidas de seguridad administrativas, técnicas, y físicas para proteger sus datos
                personales contra daño, pérdida, alteración, destrucción o uso no autorizado.

                <br>Nos reservamos el derecho de realizar modificaciones o actualizaciones a este Aviso de Privacidad en
                cualquier momento, las cuales serán publicadas en este mismo sitio web.

                <br><br>Contacto
                <br>Si tiene dudas o comentarios sobre este Aviso de Privacidad, puede comunicarse con nosotros a través
                del formulario, que se encuentra en el apartado de Contacto.

                <br><br>Fecha de última actualización: [01/01/2025].
                </p>
                <button onclick="window.avisoprivacidad.close();" class="b_privacidad">Cerrar</button>
            </dialog>
        </footer>
    </section>

    <script src='https://framework-gb.cdn.gob.mx/gobmx.js'></script>
</body>

</html>
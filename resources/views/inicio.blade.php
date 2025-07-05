<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
  <meta name="author" content="Grayrids">

  <title>Jornadas</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.5.0.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/LineIcons.2.0.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.2.3.4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <link rel="stylesheet" href="https://kit-digital-uc-prod.s3.amazonaws.com/uc-kitdigital/css/uc-kitdigital.css" />
  <!-- Custom CSS for IX Jornadas de Postcosecha -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom-jornadas.css') }}">
</head>

<body>
  <!-- HEADER UC -->
  <header class="uc-header">
    <div id="uc-global-topbar"></div>
    <nav class="uc-navbar">
      <!-- Menú para versión Escritorio -->
      <div class="container d-none d-lg-block">
        <div class="row">
          <div class="col-lg-3 col-xl-2">
            <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/logo-uc-azul.svg"
              alt="Pontificia Universidad Católica de Chile" class="img-fluid" />
          </div>
          <div class="col-lg-8 col-xl-9 pl-60">
            <div class="h2 text-font--serif text-color--blue mt-24">IX JORNADAS DE POSTCOSECHA 2025</div>
            <div class="text-color--gray p-size--lg">
              FACULTAD DE AGRONOMÍA Y SISTEMAS NATURALES UC
            </div>
          </div>
        </div>
        <ul class="uc-navbar_nav">
          <li class="nav-item">
            <a href="#slider-area" class="uc-btn btn-inline page-scroll">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="#services" class="uc-btn btn-inline page-scroll">Jornadas</a>
          </li>
          <li class="nav-item">
            <a href="#features" class="uc-btn btn-inline page-scroll">Beneficios</a>
          </li>
          <li class="nav-item">
            <a href="#portfolios" class="uc-btn btn-inline page-scroll">Programa</a>
          </li>
          <li class="nav-item">
            <a href="#pricing" class="uc-btn btn-inline page-scroll">Inscripciones</a>
          </li>
          <li class="nav-item">
            <a href="#team" class="uc-btn btn-inline page-scroll">Exponentes</a>
          </li>
          <li class="nav-item">
            <a href="#subscribe" class="uc-btn btn-inline page-scroll">Auspiciadores</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="uc-btn btn-inline page-scroll">Contacto</a>
          </li>
        </ul>
      </div>
      <!-- Menú para versión Móvil -->
      <div class="uc-navbar_mobile d-block d-lg-none">
        <div class="uc-navbar_mobile-bar navbar-brand">
          <div class="uc-navbar_mobile-logo navbar-light">
            <div class="h2 text-font--serif text-color--blue">IX JORNADAS DE POSTCOSECHA 2025</div>
          </div>
          <a href="javascript:void(0);" class="uc-navbar_mobile-button" data-collapse="collapseMobileNav3">
            <span class="uc-icon"></span>
            Menú
          </a>
        </div>
        <div class="uc-navbar_mobile-content" data-toggle="collapseMobileNav3" data-open="false" style="height: 0">
          <div class="uc-navbar_mobile-list">
            <a href="#slider-area" class="list-item page-scroll">Inicio</a>
            <a href="#services" class="list-item page-scroll">Jornadas</a>
            <a href="#features" class="list-item page-scroll">Beneficios</a>
            <a href="#portfolios" class="list-item page-scroll">Programa</a>
            <a href="#pricing" class="list-item page-scroll">Inscripciones</a>
            <a href="#team" class="list-item page-scroll">Exponentes</a>
            <a href="#subscribe" class="list-item page-scroll">Auspiciadores</a>
            <a href="#contact" class="list-item page-scroll">Contacto</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Seccion principal del carrusel -->
  <section id="slider-area">
    <div id="carousel-area">
      <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="{{ asset('assets/img/slider/bg-1.jpg') }}" alt="IX Jornadas de Postcosecha">
            <div class="carousel-caption text-left">
              <h3 class="wow fadeInRight" data-wow-delay="0.2s">Santiago, Chile</h3>
              <h2 class="wow fadeInRight" data-wow-delay="0.4s">IX JORNADAS DE POSTCOSECHA 2025</h2>
              <h4 class="wow fadeInRight" data-wow-delay="0.6s">15 y 16 de octubre - Chile 2025</h4>
              <a href="#services" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Conoce
                Más</a>
              <a href="#contact" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Inscríbete</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/slider/bg-3.jpg') }}" alt="Pontificia Universidad Católica de Chile">
            <div class="carousel-caption text-center">
              <h3 class="wow fadeInDown" data-wow-delay="0.3s">ANUNCIO (1/3):</h3>
              <h2 class="wow bounceIn" data-wow-delay="0.6s">FACULTAD DE AGRONOMÍA Y SISTEMAS NATURALES UC</h2>
              <h4 class="wow fadeInUp" data-wow-delay="0.9s">IX JORNADAS DE POSTCOSECHA 2025</h4>
              <a href="#features" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">Ver
                Programa</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/slider/bg-2.jpg') }}" alt="Expertos en Postcosecha">
            <div class="carousel-caption text-center">
              <h3 class="wow fadeInDown" data-wow-delay="0.3s">Patrocinado por</h3>
              <h2 class="wow fadeInRight" data-wow-delay="0.6s">Frutas de Chile y Fedefruta</h2>
              <h4 class="wow fadeInUp" data-wow-delay="0.6s">Con apoyo de importantes auspiciadores nacionales e
                internacionales</h4>
              <a href="#team" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Ver Auspiciadores</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Seccion principal del carrusel -->

  <!-- Inicio de las Jornadas -->
  <section id="services" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Jornadas</h2>
        <span>Información</span>
        <p class="section-subtitle">Reuniones anuales que reúnen a la academia y la industria en torno a la actualización de temáticas relacionadas a la postcosecha.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
            <div class="icon color-1">
              <i class="lni lni-calendar"></i>
            </div>
            <h4>Fechas del Evento</h4>
            <p>Miércoles 15 y jueves 16 de octubre de 2025 en la Facultad de Agronomía y Sistemas Naturales UC,
              Santiago, Chile.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
            <div class="icon color-2">
              <i class="lni lni-graduation"></i>
            </div>
            <h4>Expertos Internacionales</h4>
            <p>Conferencias magistrales, talleres prácticos y demostraciones con los mejores especialistas en
              postcosecha a nivel mundial.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon color-3">
              <i class="lni lni-leaf"></i>
            </div>
            <h4>Innovación Tecnológica</h4>
            <p>Últimas tendencias en conservación, procesamiento y control de calidad de productos agrícolas frescos.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
            <div class="icon color-4">
              <i class="lni lni-users"></i>
            </div>
            <h4>Networking</h4>
            <p>Oportunidades únicas de networking con profesionales, investigadores y empresarios del sector
              agroindustrial.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
            <div class="icon color-5">
              <i class="lni lni-certificate"></i>
            </div>
            <h4>Certificación</h4>
            <p>Certificado de participación otorgado por la Pontificia Universidad Católica de Chile a todos los
              asistentes.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
            <div class="icon color-6">
              <i class="lni lni-heart"></i>
            </div>
            <h4>Apoyo Institucional</h4>
            <p>Patrocinado por Frutas de Chile y Fedefruta, con apoyo de importantes auspiciadores nacionales e
              internacionales.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de las Jornadas -->

  <!-- Inicio Sección de información -->
  <section class="about-section section"
    style="background-image: url('assets/img/frutas-background.jpg'); background-size: cover; background-position: center; position: relative;">
    <div class="overlay"
      style="background: rgba(3, 18, 46, 0.95); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
    </div>
    <div class="container" style="position: relative; z-index: 2;">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="about-content text-white" style="color: #FFFFFF !important;">
            <h2 class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms"
              style="color: #FFFFFF !important; text-shadow: 3px 3px 6px rgba(0,0,0,1) !important; font-weight: bold !important;">
              Innovación en Postcosecha</h2>
            <p class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms"
              style="font-size: 16px; line-height: 1.8; color: #FFFFFF !important; text-shadow: 2px 2px 4px rgba(0,0,0,1) !important; font-weight: 500 !important;">
              Durante estas jornadas, destacados expertos comparten herramientas y estrategias innovadoras para
              enfrentar los desafíos en temas climáticos, logística y comercialización, proporcionando las claves para
              responder a las demandas actuales de los consumidores a nivel global.
            </p>
            <p class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms"
              style="font-size: 16px; line-height: 1.8; color: #FFFFFF !important; text-shadow: 2px 2px 4px rgba(0,0,0,1) !important; font-weight: 500 !important;">
              Este encuentro representa una valiosa oportunidad para fortalecer la colaboración entre la academia, la
              industria y el sector público, impulsando así la competitividad y calidad de nuestras frutas en los
              mercados internacionales.
            </p>
            <a href="#contact" class="btn btn-common btn-effect wow fadeInLeft" data-wow-delay="700ms"
              style="margin-top: 20px;">¡Únete a las Jornadas!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Sección de información -->

  <!-- inicio Llamado a inscribirse -->
  <section class="call-action section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10 col-sm-12">
          <div class="cta-trial text-center">
            <h3>¿Listo para ser parte de las IX Jornadas de Postcosecha?</h3>
            <p>No te pierdas este evento de prestigio internacional. Inscríbete ahora y forma parte de la comunidad de
              profesionales más importante del sector postcosecha en Chile.</p>
            <a href="#contact" class="btn btn-common btn-effect">¡Inscríbete Ahora!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fin Llamado a inscribirse  -->

  <!-- inicio porque participar ? -->
  <section id="features" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">¿Por qué participar?</h2>
        <span>Beneficios</span>
        <p class="section-subtitle">Las IX Jornadas de Postcosecha Chile 2025 te ofrecen oportunidades únicas de
          aprendizaje y networking.</p>
      </div>
      <div class="row">
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-world"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-world"></i></div>
              <h4>Alcance Internacional</h4>
              <p>Conecta con expertos y profesionales de todo el mundo en el área de postcosecha y tecnología
                agroalimentaria.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-cog"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-cog"></i></div>
              <h4>Tecnología de Vanguardia</h4>
              <p>Conoce las últimas innovaciones en equipamiento, software y procesos para el manejo postcosecha.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-rocket"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-rocket"></i></div>
              <h4>Impacto Inmediato</h4>
              <p>Aplica los conocimientos adquiridos de inmediato en tu empresa o investigación para obtener resultados
                tangibles.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-certificate"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-certificate"></i></div>
              <h4>Prestigio Académico</h4>
              <p>Respaldado por la Pontificia Universidad Católica de Chile, garantizando excelencia académica y
                científica.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-users"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-users"></i></div>
              <h4>Networking de Calidad</h4>
              <p>Establece conexiones estratégicas con líderes de la industria, investigadores y tomadores de
                decisiones.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
        <!-- Start featured -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="featured-box">
            <div class="featured-icon">
              <i class="lni lni-support"></i>
            </div>
            <div class="featured-content">
              <div class="icon-o"><i class="lni lni-support"></i></div>
              <h4>Soporte Continuo</h4>
              <p>Acceso a materiales, presentaciones y red de contactos posterior al evento para seguir aprendiendo.</p>
            </div>
          </div>
        </div>
        <!-- End featured -->
      </div>
    </div>
  </section>
  <!-- fin porque participar ? -->

  <!-- inicio valores de inscripcion -->
  <div id="pricing" class="section pricing-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Inscripciones</h2>
        <span>Tarifas</span>
        <p class="section-subtitle">Elige la modalidad de inscripción que se ajuste a tu perfil profesional para las IX
          Jornadas de Postcosecha 2025.</p>
      </div>

      <div class="row pricing-tables justify-content-md-start justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="pricing-table">
            <div class="pricing-details">
              <p>Alumnos de pregrado</p>
              <p>Alumnos de postgrado</p>
              <br>
              <div class="price">$80.000 <span>CLP</span></div>
            </div>
            <div class="plan-button">
              <a href="#contact" class="btn btn-common btn-effect">Inscribirse</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="pricing-table pricing-big">
            <div class="pricing-details">
              <h2>Investigadores</h2>
              <div class="price">$140.000 <span>CLP</span></div>
            </div>
            <div class="plan-button">
              <a href="#contact" class="btn btn-common btn-effect">Inscribirse</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="pricing-table">
            <div class="pricing-details">
              <h2>Inscripción General</h2>
              <div class="price">$160.000 <span>CLP</span></div>
            </div>
            <div class="plan-button">
              <a href="#contact" class="btn btn-common btn-effect">Inscribirse</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Información de transferencia bancaria -->
      <div class="row justify-content-center mt-5">
        <div class="col-lg-8 col-md-10 col-sm-12">
          <div class="payment-info"
            style="background-color: var(--uc-gris-claro); padding: 30px; border-radius: 10px; border-left: 5px solid var(--uc-celeste);">
            <h4 style="color: var(--uc-azul-oscuro); margin-bottom: 20px; text-align: center;">
              <i class="lni lni-credit-cards" style="margin-right: 10px;"></i>
              Información para Transferencia Bancaria
            </h4>
            <div class="row">
              <div class="col-md-6">
                <p><strong>Titular de la Cuenta:</strong><br>Pontificia Universidad Católica de Chile</p>
                <p><strong>RUT:</strong><br>81.698.900-0</p>
                <p><strong>Banco:</strong><br>Banco Santander</p>
              </div>
              <div class="col-md-6">
                <p><strong>Tipo de Cuenta:</strong><br>Cuenta Corriente</p>
                <p><strong>Número de Cuenta:</strong><br>801041908</p>
                <!-- <p style="color: var(--uc-azul); font-weight: bold;"><strong>Importante:</strong><br>Enviar comprobante de pago al correo de contacto</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin valores de inscripcion -->

  <!-- inicio comite cientifico -->
  <section id="team" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Comité Científico</h2>
        <span>Expertos</span>
        <p class="section-subtitle">Reconocidos investigadores y académicos que garantizan la excelencia científica de
          las IX Jornadas de Postcosecha Chile 2025.</p>
      </div>
      <div class="row justify-content-md-start justify-content-center">
        <!-- Presidente Comité Científico -->
        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team" style="border: 3px solid var(--uc-celeste); border-radius: 10px; overflow: hidden;">
            <div
              style="background: linear-gradient(135deg, var(--uc-celeste), var(--uc-azul)); height: 150px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-graduation" style="font-size: 4rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 25px 20px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.3rem; margin-bottom: 8px;">
                  Bruno Defilippi</h4>
                <p style="color: var(--uc-celeste); font-weight: bold; margin-bottom: 5px;">Presidente Comité Científico
                </p>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.9rem; line-height: 1.4;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Miembros del Comité Científico -->
        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Víctor Escalona</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Universidad de Chile</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Reinaldo Campos</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Universidad de Chile</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Claudia Fuentealba</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Pontificia Universidad
                  Católica de Valparaíso</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Romina Pedreschi</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Pontificia Universidad
                  Católica de Valparaíso</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">Lida
                  Fuentes</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Centro Regional de
                  Estudios en Alimentos Saludables</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Pablo Ulloa</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Daniela Olivares</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">Juan
                  Pablo Zoffoli</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Pontificia Universidad
                  Católica de Chile</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Edgard Álvarez</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Soledad Sánchez</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
          <div class="single-team"
            style="border: 1px solid var(--uc-gris-claro); border-radius: 10px; overflow: hidden; transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div
              style="background: linear-gradient(135deg, var(--uc-azul), var(--uc-azul-oscuro)); height: 120px; display: flex; align-items: center; justify-content: center;">
              <i class="lni lni-user" style="font-size: 3rem; color: white;"></i>
            </div>
            <div class="team-details" style="padding: 20px 15px;">
              <div class="team-inner text-center">
                <h4 class="team-title" style="color: var(--uc-azul-oscuro); font-size: 1.1rem; margin-bottom: 5px;">
                  Cristina Vergara</h4>
                <p style="color: var(--uc-gris-oscuro); font-size: 0.85rem; line-height: 1.3;">Instituto de
                  Investigaciones Agropecuarias</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fin comite cientifico -->

  <!-- inicio seccion auspiciadores -->
  <div id="subscribe" class="section"
    style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="section-title"
          style="color: var(--uc-azul-oscuro); font-size: 2.5rem; font-weight: 700; margin-bottom: 15px;">Auspiciadores
        </h2>
        <!-- <span style="color: var(--uc-celeste); font-size: 1.1rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; display: inline-block;">Patrocinadores</span> -->
        <p class="section-subtitle"
          style="color: var(--uc-gris-oscuro); font-size: 1.1rem; line-height: 1.6; margin-bottom: 0; max-width: 800px; margin-left: auto; margin-right: auto;">
          Agradecemos el apoyo de nuestros valiosos auspiciadores que hacen posible las IX Jornadas de Postcosecha Chile
          2025</p>
      </div>

      <!-- Auspiciadores Principales -->
      <div class="sponsors-section mb-5">
        <h4 class="text-center mb-4" style="color: var(--uc-azul-medio); font-weight: 600;">Auspiciadores Principales
        </h4>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="sponsor-item main-sponsor"
              style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; transition: all 0.3s ease; height: 150px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'">
              <img src="https://picsum.photos/200/80?random=1&blur=0" alt="Frutas de Chile"
                style="max-width: 100%; max-height: 80px; object-fit: contain; border-radius: 8px;">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="sponsor-item main-sponsor"
              style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; transition: all 0.3s ease; height: 150px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'">
              <img src="https://picsum.photos/200/80?random=2&blur=0" alt="Fedefruta"
                style="max-width: 100%; max-height: 80px; object-fit: contain; border-radius: 8px;">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="sponsor-item main-sponsor"
              style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; transition: all 0.3s ease; height: 150px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'">
              <img src="https://picsum.photos/200/80?random=3&blur=0"
                alt="INIA - Instituto de Investigaciones Agropecuarias"
                style="max-width: 100%; max-height: 80px; object-fit: contain; border-radius: 8px;">
            </div>
          </div>
        </div>
      </div>

      <!-- Auspiciadores Colaboradores -->
      <div class="sponsors-section">
        <h4 class="text-center mb-4" style="color: var(--uc-azul-medio); font-weight: 600;">Auspiciadores Colaboradores
        </h4>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=4&blur=0" alt="ANID - Agencia Nacional de Investigación"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=5&blur=0" alt="ASOEX - Asociación de Exportadores de Chile"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=6&blur=0" alt="Fundación Chile"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=7&blur=0" alt="AgroTech Solutions"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=8&blur=0" alt="SAG - Servicio Agrícola y Ganadero"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=9&blur=0" alt="CORFO - Corporación de Fomento"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
            <div class="sponsor-item"
              style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; height: 120px; display: flex; align-items: center; justify-content: center;"
              onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'">
              <img src="https://picsum.photos/150/60?random=10&blur=0" alt="Fundación para el Desarrollo Frutícola"
                style="max-width: 100%; max-height: 60px; object-fit: contain; border-radius: 6px;">
            </div>
          </div>
        </div>
      </div>

      <!-- Call to Action para patrocinadores -->
      <!-- <div class="sponsors-cta mt-5 pt-4" style="border-top: 2px solid var(--uc-gris-claro);">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h5 style="color: var(--uc-azul-oscuro); margin-bottom: 15px;">¿Quieres ser parte de nuestros auspiciadores?</h5>
              <p style="color: var(--uc-gris-oscuro); margin-bottom: 25px;">Únete a las empresas líderes que apoyan la innovación en postcosecha y conecta con profesionales del sector.</p>
              <a href="#contact" class="btn btn-outline-primary" style="border-color: var(--uc-azul-medio); color: var(--uc-azul-medio); padding: 12px 30px; border-width: 2px; font-weight: 600;" onmouseover="this.style.backgroundColor='var(--uc-azul-medio)'; this.style.color='white'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--uc-azul-medio)'">
                <i class="lni lni-handshake me-2"></i>Ser Auspiciador
              </a>
            </div>
          </div>
        </div> -->
    </div>
  </div>
  <!-- fin seccion auspiciadores -->

  <!-- Sección de clientes inicio -->
  <div id="clients" class="section">
    <!-- Container Ends -->
    <div class="container">
      <!-- Row and Scroller Wrapper Starts -->
      <div class="row owl-carousel" id="clients-scroller">
        <div class="client-item-wrapper">
          <img src="img/clients/img1.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/img2.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/img3.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/img4.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/img5.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/img6.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Sección de clientes fin -->

  <!-- Sección de contacto inicio -->
  <section id="contact" class="section">
    <div class="contact-form">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Contacto e Inscripciones</h2>
          <span>Contacto</span>
          <p class="section-subtitle">¿Tienes preguntas sobre las IX Jornadas de Postcosecha? Contáctanos o completa el
            formulario de inscripción.</p>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre *" required
                        data-error="Por favor ingrese su nombre">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno"
                        placeholder="Apellido Paterno *" required data-error="Por favor ingrese su apellido paterno">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="apellido_materno" name="apellido_materno"
                        placeholder="Apellido Materno *" required data-error="Por favor ingrese su apellido materno">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email"
                        placeholder="Correo Electrónico *" required data-error="Por favor ingrese un email válido">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono *"
                        required data-error="Por favor ingrese su teléfono">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="institucion" name="institucion"
                        placeholder="Institución/Empresa *" required
                        data-error="Por favor ingrese su institución o empresa">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <select class="form-control" id="asunto" name="asunto" required
                        data-error="Por favor seleccione un asunto">
                        <option value="">Seleccione el asunto *</option>
                        <option value="inscripcion_estudiante">Inscripción - Estudiante ($80.000)</option>
                        <option value="inscripcion_investigador">Inscripción - Investigador ($140.000)</option>
                        <option value="inscripcion_general">Inscripción - General ($160.000)</option>
                        <option value="informacion_programa">Información sobre el programa</option>
                        <option value="informacion_alojamiento">Información sobre alojamiento</option>
                        <option value="patrocinio">Consultas sobre patrocinio</option>
                        <option value="otro">Otro</option>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje adicional"
                        rows="5" data-error="Por favor escriba su mensaje"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common btn-effect" id="submit" type="submit">Enviar Consulta</button>
                      <div id="msgSubmit" class="h3 hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="contact-deatils">
              <!-- Content Info -->
              <div class="contact-info_area">
                <div class="contact-info">
                  <i class="lni lni-map"></i>
                  <h5>Ubicación</h5>
                  <p>Facultad de Agronomía y Sistemas Naturales UC<br>Santiago, Chile</p>
                </div>
                <!-- Content Info -->
                <div class="contact-info">
                  <i class="lni lni-envelope"></i>
                  <h5>E-mail</h5>
                  <p>jornadas.postcosecha@uc.cl</p>
                </div>
                <!-- Content Info -->
                <div class="contact-info">
                  <i class="lni lni-phone"></i>
                  <h5>Teléfono</h5>
                  <p>+56 2 2354 4000</p>
                </div>
                <!-- Content Info -->
                <div class="contact-info">
                  <i class="lni lni-calendar"></i>
                  <h5>Fechas</h5>
                  <p>15 y 16 de Octubre 2025</p>
                </div>
                <!-- Icon -->
                <ul class="footer-social">
                  <li><a class="facebook" href="#"><i class="lni lni-facebook-filled"></i></a></li>
                  <li><a class="twitter" href="#"><i class="lni lni-twitter-filled"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i></a></li>
                  <li><a class="instagram" href="#"><i class="lni lni-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sección de contacto fin -->

  <!-- Sección de ubicación y transporte inicio -->
  <section id="google-map-area" style="position: relative; overflow: hidden;">
    <!-- Información del venue y transporte -->
    <div class="transport-info-section"
      style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 60px 0;">
      <div class="container">
        <!-- Título principal -->
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h3 style="color: var(--uc-azul-oscuro); font-weight: 700; font-size: 2.2rem; margin-bottom: 15px;">
              Ubicación y Cómo llegar</h3>
            <p style="color: var(--uc-gris-oscuro); font-size: 1.1rem; max-width: 700px; margin: 0 auto;">IX Jornadas de
              Postcosecha Chile 2025 - Campus San Joaquín, Universidad Católica de Chile</p>
          </div>
        </div>

        <!-- Información del evento -->
        <div class="row mb-5">
          <div class="col-lg-10 mx-auto">
            <div class="venue-info venue-bounce"
              style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 6px solid var(--uc-celeste); animation: bounceIn 1.2s ease-out; transition: all 0.3s ease;"
              onmouseover="this.style.transform='scale(1.02)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.15)'"
              onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
              <div class="row">
                <div class="col-md-8">
                  <h4 style="color: var(--uc-azul-oscuro); font-weight: 600; margin-bottom: 20px; font-size: 1.5rem;">
                    <i class="lni lni-map-marker" style="color: var(--uc-celeste); margin-right: 10px;"></i>
                    Campus San Joaquín UC
                  </h4>
                  <div class="venue-details">
                    <p style="color: var(--uc-gris-oscuro); margin-bottom: 10px; font-size: 1rem;">
                      <strong style="color: var(--uc-azul-oscuro);">Dirección:</strong> Vicuña Mackenna 4860, Macul,
                      Santiago
                    </p>
                    <p style="color: var(--uc-gris-oscuro); margin-bottom: 10px; font-size: 1rem;">
                      <strong style="color: var(--uc-azul-oscuro);">Facultad:</strong> Agronomía e Ingeniería Forestal
                    </p>
                    <p style="color: var(--uc-gris-oscuro); margin-bottom: 0; font-size: 1rem;">
                      <strong style="color: var(--uc-azul-oscuro);">Aula:</strong> Aula Magna
                    </p>
                  </div>
                </div>
                <div class="col-md-4 text-center text-md-right">
                  <div class="event-dates"
                    style="background: linear-gradient(135deg, var(--uc-celeste), var(--uc-azul)); padding: 25px 20px; border-radius: 15px; color: white;">
                    <h5 style="color: white; margin-bottom: 8px; font-weight: 600;">
                      <i class="lni lni-calendar" style="margin-right: 8px;"></i>
                      15 y 16 Octubre
                    </h5>
                    <p style="color: white; margin-bottom: 5px; font-size: 0.9rem; opacity: 0.9;">2025</p>
                    <p style="color: white; margin: 0; font-size: 0.9rem; opacity: 0.9;">
                      <i class="lni lni-timer" style="margin-right: 5px;"></i>
                      9:00 - 18:00 hrs
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Opciones de transporte -->
        <div class="row mb-4">
          <div class="col-md-12 text-center">
            <h4 style="color: var(--uc-azul-oscuro); font-weight: 600; font-size: 1.6rem; margin-bottom: 30px;">Opciones
              de Transporte</h4>
          </div>
        </div>

        <div class="row justify-content-center">
          <!-- Metro -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="transport-card h-100"
              style="background: white; padding: 35px 25px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; border-top: 4px solid var(--uc-celeste);"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.08)'">
              <div class="transport-icon mb-3">
                <i class="lni lni-train" style="font-size: 3rem; color: var(--uc-celeste); margin-bottom: 20px;"></i>
              </div>
              <h5 style="color: var(--uc-azul-oscuro); font-weight: 600; margin-bottom: 15px; font-size: 1.3rem;">Metro
              </h5>
              <div class="transport-details">
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;"><strong>Línea
                    5</strong></p>
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;">Estación San Joaquín
                </p>
                <p style="color: var(--uc-celeste); margin: 0; font-weight: 600; font-size: 0.9rem;">10 min caminando
                </p>
              </div>
            </div>
          </div>

          <!-- Auto particular -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="transport-card h-100"
              style="background: white; padding: 35px 25px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; border-top: 4px solid var(--uc-azul);"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.08)'">
              <div class="transport-icon mb-3">
                <i class="lni lni-car" style="font-size: 3rem; color: var(--uc-azul); margin-bottom: 20px;"></i>
              </div>
              <h5 style="color: var(--uc-azul-oscuro); font-weight: 600; margin-bottom: 15px; font-size: 1.3rem;">Auto
                Particular</h5>
              <div class="transport-details">
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;">Estacionamiento
                  disponible</p>
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;">En el campus</p>
                <p style="color: var(--uc-azul); margin: 0; font-weight: 600; font-size: 0.9rem;">Acceso directo</p>
              </div>
            </div>
          </div>

          <!-- Transporte público -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="transport-card h-100"
              style="background: white; padding: 35px 25px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease; border-top: 4px solid var(--uc-amarillo);"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.12)'"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.08)'">
              <div class="transport-icon mb-3">
                <i class="lni lni-bus" style="font-size: 3rem; color: var(--uc-amarillo); margin-bottom: 20px;"></i>
              </div>
              <h5 style="color: var(--uc-azul-oscuro); font-weight: 600; margin-bottom: 15px; font-size: 1.3rem;">
                Bus/Micro</h5>
              <div class="transport-details">
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;">Múltiples recorridos
                </p>
                <p style="color: var(--uc-gris-oscuro); margin-bottom: 8px; font-size: 0.95rem;">Por Vicuña Mackenna</p>
                <p style="color: var(--uc-amarillo); margin: 0; font-weight: 600; font-size: 0.9rem;">Parada cercana</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Recomendaciones para visitantes -->
        <div class="row mt-5">
          <div class="col-lg-8 mx-auto">
            <div class="additional-transport-info"
              style="background: var(--uc-gris-claro); padding: 30px; border-radius: 15px; border-left: 5px solid var(--uc-celeste);">
              <h6 style="color: var(--uc-azul-oscuro); margin-bottom: 15px; font-weight: 600;">
                <i class="lni lni-information" style="margin-right: 8px; color: var(--uc-celeste);"></i>
                Información Importante para Visitantes
              </h6>
              <div class="row">
                <div class="col-md-6">
                  <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
                    <strong>Acreditación:</strong><br>
                    Llegar 30 minutos antes del inicio
                  </p>
                </div>
                <div class="col-md-6">
                  <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
                    <strong>Estacionamiento:</strong><br>
                    Disponible en el campus (gratuito)
                  </p>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
                    <strong>Acceso desde Metro:</strong><br>
                    Salida por calle Vicuña Mackenna
                  </p>
                </div>
                <div class="col-md-6">
                  <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
                    <strong>Cafeterías:</strong><br>
                    Disponibles en el campus
                  </p>
                </div>
              </div>
              <p style="margin: 15px 0 0 0; font-size: 0.85rem; color: var(--uc-azul); font-style: italic;">
                Para consultas sobre accesibilidad o necesidades especiales, contactar al comité organizador.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mapa embebido -->
    <div class="map-container" style="position: relative;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.8147858935894!2d-70.61088368423737!3d-33.49848638076203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0a5b2d7c9c3%3A0x3b1f1b1f1b1f1b1f!2sFacultad%20de%20Econom%C3%ADa%20y%20Administraci%C3%B3n%20UC%2C%20Campus%20San%20Joaqu%C3%ADn!5e0!3m2!1ses!2scl!4v1647892345678!5m2!1ses!2scl"
              style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>

      <!-- Overlay con información del evento -->
      <div class="map-overlay position-absolute"
        style="top: 20px; left: 20px; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15); max-width: 350px; border-left: 4px solid var(--uc-celeste);">
        <h6 style="color: var(--uc-azul-oscuro); margin-bottom: 12px; font-weight: 700; font-size: 1.1rem;">IX Jornadas
          de Postcosecha Chile 2025</h6>
        <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
          <i class="lni lni-calendar" style="color: var(--uc-celeste); margin-right: 8px;"></i>
          15 y 16 de Octubre, 2025
        </p>
        <p style="margin-bottom: 8px; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
          <i class="lni lni-timer" style="color: var(--uc-celeste); margin-right: 8px;"></i>
          9:00 AM - 6:00 PM
        </p>
        <p style="margin: 0; font-size: 0.9rem; color: var(--uc-gris-oscuro);">
          <i class="lni lni-map-marker" style="color: var(--uc-celeste); margin-right: 8px;"></i>
          Campus San Joaquín UC
        </p>
      </div>
    </div>


  </section>
  <!-- Sección de ubicación y transporte fin -->

  <!-- Inicio Footer -->
  <footer class="uc-footer" style="background-color: var(--uc-azul-oscuro); padding: 60px 0 0;">
    <div class="container pb-48">
      <div class="row">
        <div class="col-7 col-md-3 col-xl-2 mb-32">
          <a href="https://www.uc.cl" target="_blank">
            <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/logo-uc-blanco.svg"
              alt="Pontificia Universidad Católica de Chile" class="img-fluid" style="max-width: 180px;" />
          </a>
        </div>
        <div class="col-lg-8 offset-lg-1">
          <div class="h2 text-font--serif mt-28"
            style="color: white; font-family: serif; font-size: 2.5rem; font-weight: 300; margin-bottom: 30px;">
            IX Jornadas de Postcosecha
          </div>
          <p style="color: white; font-size: 16px; margin-bottom: 30px; opacity: 0.9;">
            Facultad de Agronomía y Sistemas Naturales UC<br>
            15 y 16 de Octubre 2025 • Santiago, Chile
          </p>
          <ul class="uc-footer_social" style="list-style: none; padding: 0; display: flex; gap: 15px; margin: 0;">
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-twitter.svg" alt="Twitter"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-facebook.svg" alt="Facebook"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-instagram.svg" alt="Instagram"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-linkedin.svg" alt="Linkedin"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-youtube.svg" alt="Youtube"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
            <li>
              <a href="#" style="display: inline-block; transition: opacity 0.3s;"
                onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                <img src="https://kit-digital-uc-prod.s3.amazonaws.com/assets/social-icon-flickr.svg" alt="Flickr"
                  style="width: 32px; height: 32px;" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="uc-global-footer"
      style="background-color: var(--uc-azul-oscuro); border-top: 1px solid rgba(255,255,255,0.1); padding: 20px 0; text-align: center; color: #ccc; font-size: 14px;">
      <div class="container">
        <p style="margin: 0;">© 2025 Pontificia Universidad Católica de Chile. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
  <!-- Fin Footer -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni lni-arrow-up"></i>
  </a>

  <!-- spinner de carga -->
  <div id="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery-3.5.1-min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-4.5.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/classie.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.2.3.4.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.vide.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
  <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://kit-digital-uc-prod.s3.amazonaws.com/uc-kitdigital/js/uc-kitdigital.js"></script>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->

</body>

</html>
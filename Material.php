<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Preparado pra desafios">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Material</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Material.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/KagiCursosLogotipo.png",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Material">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Material">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-3dcc"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/KagiCursosLogotipo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contatos.php" style="padding: 10px 20px;">Contatos</a>
</li><?php if(isset($_SESSION['email'])){ echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Perfil.php" style="padding: 10px 20px;">Perfil</a></li> 
  <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="sair.php" style="padding: 10px 20px;">Sair</a>
  </li>';} else{ echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Loguin.php" style="padding: 10px 20px;">Login</a>
</li>'; }?>
</ul>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-edb5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img class="u-align-left u-image u-image-1" data-image-width="800" data-image-height="600" src="images/img31.png">
        <div class="u-container-style u-group u-palette-1-light-3 u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1">Preparado pra desafios</h2>
            <p class="u-text u-text-2">Teste seus conhecimentos com os testes e evolua mais e mais.</p>
            <a href="" class="u-border-2 u-border-palette-1-base u-btn u-button-style u-hover-palette-1-light-2 u-none u-text-black u-text-hover-white u-btn-1">VaMOS LA</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-1 u-section-2" id="sec-4294">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Cursos</h1>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 35 35" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a87"></use></svg><svg class="u-svg-content" viewBox="0 0 35 35" x="0px" y="0px" id="svg-8a87" style="enable-background:new 0 0 35 35;"><g><path d="M25.302,0H9.698c-1.3,0-2.364,1.063-2.364,2.364v30.271C7.334,33.936,8.398,35,9.698,35h15.604   c1.3,0,2.364-1.062,2.364-2.364V2.364C27.666,1.063,26.602,0,25.302,0z M15.004,1.704h4.992c0.158,0,0.286,0.128,0.286,0.287   c0,0.158-0.128,0.286-0.286,0.286h-4.992c-0.158,0-0.286-0.128-0.286-0.286C14.718,1.832,14.846,1.704,15.004,1.704z M17.5,33.818   c-0.653,0-1.182-0.529-1.182-1.183s0.529-1.182,1.182-1.182s1.182,0.528,1.182,1.182S18.153,33.818,17.5,33.818z M26.021,30.625   H8.979V3.749h17.042V30.625z"></path>
</g></svg></span>
                <h5 class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-2"> MOBILE</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-3"> MOBILE <br>Android <br>Arquitetura Android <br>Flutter <br>Testes automatizados no Android
                </p>
                <a href="https://nicepage.com/html5-template" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-palette-1-light-1 u-radius-3 u-text-active-black u-text-hover-black u-text-white u-btn-1">Acessar material</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.997 511.997" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b0d8"></use></svg><svg class="u-svg-content" viewBox="0 0 511.997 511.997" x="0px" y="0px" id="svg-b0d8" style="enable-background:new 0 0 511.997 511.997;"><g><g><path d="M506.76,242.828l-118.4-125.44c-7.277-7.718-19.424-8.07-27.142-0.787c-7.706,7.277-8.064,19.43-0.781,27.142    l105.965,112.256L360.437,368.268c-7.283,7.712-6.925,19.859,0.781,27.142c3.712,3.501,8.454,5.235,13.178,5.235    c5.101,0,10.195-2.022,13.965-6.01l118.4-125.446C513.742,261.785,513.742,250.226,506.76,242.828z"></path>
</g>
</g><g><g><path d="M151.566,368.262L45.608,255.999l105.958-112.262c7.277-7.712,6.925-19.866-0.787-27.142    c-7.706-7.277-19.866-6.925-27.142,0.787l-118.4,125.44c-6.982,7.398-6.982,18.963,0,26.362L123.643,394.63    c3.776,4,8.864,6.016,13.965,6.016c4.723,0,9.466-1.741,13.171-5.242C158.498,388.127,158.843,375.974,151.566,368.262z"></path>
</g>
</g><g><g><path d="M287.061,52.697c-10.477-1.587-20.282,5.606-21.882,16.083l-56.32,368.64c-1.6,10.483,5.6,20.282,16.083,21.882    c0.986,0.147,1.958,0.218,2.925,0.218c9.325,0,17.504-6.803,18.957-16.301l56.32-368.64    C304.744,64.095,297.544,54.297,287.061,52.697z"></path>
</g>
</g></svg></span>
                <h5 class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-4"> PROGRAMAÇÃO</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-5"> Arquiteto PHP <br>Arquitetura e Design de Projetos Java <br>ASP.NET Core REST APIs <br>C# e orientação a objetos <br>Certificação C# Programming <br>
                </p>
                <a href="https://nicepage.com/css-templates" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-palette-1-light-1 u-radius-3 u-text-active-black u-text-hover-black u-text-white u-btn-2"> Acessar material</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e45"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-1e45"><g><g><path d="m497 512h-301c-8.291 0-15-6.709-15-15v-301c0-8.291 6.709-15 15-15h301c8.291 0 15 6.709 15 15v301c0 8.291-6.709 15-15 15z"></path>
</g><path d="m151 196c0-24.814 20.186-45 45-45h135v-136c0-8.291-6.709-15-15-15h-301c-8.291 0-15 6.709-15 15v301c0 8.291 6.709 15 15 15h136z"></path>
</g></svg></span>
                <h5 class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-6"> FRONT-END</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-7"> Acessibilidade Web <br>Angular <br>Front-end <br>HTML e CSS <br>React JS <br>Vue.js
                </p>
                <a href="https://nicepage.com/website-builder" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-palette-1-light-1 u-radius-3 u-text-active-black u-text-hover-black u-text-white u-btn-3"> Acessar material</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-1 u-section-3" id="sec-8926">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.765 511.765" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-186a"></use></svg><svg class="u-svg-content" viewBox="0 0 511.765 511.765" id="svg-186a"><path d="m491.945 353.116c.15-.305.283-.617.389-.937 30.321-69.981 24.903-155.775-14.478-221.349 21.024-25.133-6.285-61.125-36.149-47.199-5.248-5.363-10.758-10.503-16.468-15.363 11.208-30.468-26.198-55.462-49.494-32.698-67.711-34.191-151.928-33.758-219.265 1.157-23.954-25.385-64.183 1.833-49.68 33.683-8.306 7.263-16.168 15.109-23.417 23.406-6.259 7.164 5.08 16.983 11.296 9.869 6.744-7.718 14.051-15.019 21.769-21.785 14.925 10.765 36.566 5.281 44.754-11.151 27.021 7.778 52.825 18.941 76.87 33.268-2.013 7.259-1.191 15.366 2.263 22.067-19.79 17.095-37.612 36.433-53.088 57.626-14.287-4.317-30.035 2.909-36.248 16.439-31.507.169-63.112 3.558-94.142 10.117-2.74-5.106-6.894-9.337-11.93-12.171 5.83-22.735 15.064-44.362 27.502-64.359 4.956-7.97-7.554-16.255-12.737-7.923-13.224 21.26-23.046 44.251-29.258 68.419-35.93.61-41.962 50.316-7.757 59.878-.504 70.742 30.082 139.52 83.12 186.372-11.064 29.887 24.855 54.539 48.559 33.459 69.178 36.785 156.607 36.79 225.789.012 24.109 23.844 62.723-2.794 49.143-33.965 27.335-24.293 48.57-54.006 62.657-86.872zm-9.45-16.774c-20.761-20.626-43.481-39.337-67.738-55.762 3.445-10.791.451-22.932-7.594-30.898 20.398-33.915 36.411-70.281 47.683-108.27 3.756.013 7.367-.68 10.694-1.934 34.539 58.333 40.856 133.543 16.955 196.864zm-345.126 84.784c-6.312-61.825 4.764-123.504 32.177-179.243 17.03 5.314 35.437-5.885 38.744-23.366 51.715 6.375 101.522 21.558 148.264 45.203-2.248 8.738-.387 18.373 4.968 25.642-52.687 66.749-122.234 116.976-201.83 145.763-4.823-7.637-12.934-12.98-22.323-13.999zm233.227-149.806c0-8.499 6.864-15.413 15.301-15.413 20.298.845 20.292 29.984 0 30.826-8.437 0-15.301-6.914-15.301-15.413zm99.617-160.32c0 8.499-6.864 15.413-15.301 15.413-20.299-.845-20.294-29.984 0-30.826 8.437 0 15.301 6.914 15.301 15.413zm-39.967-17.632c-10.366 14.565-5.555 35.62 10.073 44.277-10.919 36.644-26.399 71.722-46.092 104.441-4.117-1.184-8.687-1.478-12.92-.83-20.584-43.955-50.535-83.546-87.123-115.17 3.457-6.705 4.281-14.798 2.265-22.067 23.159-13.798 47.966-24.672 73.907-32.402 8.622 16.646 31.751 21.346 46.11 8.885 4.759 4.094 9.366 8.395 13.78 12.866zm-178.287 18.793c0-8.499 6.864-15.413 15.301-15.413 20.299.845 20.293 29.983 0 30.825-8.437 0-15.301-6.914-15.301-15.412zm145.068-70.379c8.438 0 15.302 6.914 15.302 15.413-.842 20.447-29.764 20.442-30.603 0 0-8.499 6.864-15.413 15.301-15.413zm-262.94 30.825c-8.437 0-15.301-6.914-15.301-15.413.842-20.448 29.764-20.441 30.603 0 0 8.499-6.865 15.413-15.302 15.413zm30.273-16.563c-.078-2.082-.364-4.109-.84-6.065 62.783-32.467 141.216-33.033 204.483-1.51-.813 2.719-1.258 5.594-1.273 8.571-27.286 8.072-53.377 19.474-77.735 33.961-11.708-12.111-31.757-12.115-43.469-.001-25.383-15.098-52.63-26.834-81.166-34.956zm85.905 81.282c10.142 6.922 23.845 6.923 33.988.001 34.932 30.161 63.548 67.916 83.259 109.841-1.336 1.027-2.584 2.164-3.732 3.395-49.279-24.995-101.867-40.887-156.491-47.281-1.475-4.464-3.951-8.472-7.165-11.753 14.66-19.915 31.484-38.104 50.141-54.203zm-71.738 60.095c8.437 0 15.301 6.914 15.301 15.413-.842 20.448-29.764 20.442-30.603 0 .001-8.499 6.865-15.413 15.302-15.413zm-163.668 27.218c0-8.499 6.864-15.413 15.301-15.413 20.298.845 20.292 29.983 0 30.825-8.436.001-15.301-6.913-15.301-15.412zm22.817 29.465s22.781-4.968 22.781-29.267c0 0 58.456-9.344 87.867-9.672.552 7.266 3.655 13.823 8.414 18.771-29.228 58.801-41.017 123.993-34.231 189.321-2.922 1.218-5.612 2.883-7.99 4.907-48.931-43.834-76.841-117.278-76.841-174.06zm96.411 212.665c-8.437 0-15.301-6.914-15.301-15.413s6.864-15.413 15.301-15.413c8.324 0 15.302 7.21 15.302 15.413 0 8.499-6.865 15.413-15.302 15.413zm133.173 19.877c-36.401 0-72.397-8.718-104.569-25.269 1.306-3.743 1.882-8.007 1.628-11.979 82.338-29.679 154.289-81.546 208.795-150.513 4.478 2.1 9.447 3.064 14.384 2.805 3.332 12.367 5.965 24.984 7.831 37.6 1.429 9.658 16.272 7.5 14.839-2.194-1.981-13.396-4.786-26.794-8.347-39.916 1.793-1.116 3.459-2.417 4.977-3.872 25.028 16.991 48.362 36.496 69.501 58.083-13.11 28.981-32.191 55.222-56.434 76.905-2.397-1.8-5.07-3.248-7.939-4.278 1.474-13.943 2.116-28.021 1.9-41.945-.152-9.798-15.151-9.568-14.998.232.208 13.384-.412 26.917-1.836 40.32-17.689 2.813-29.258 21.155-24.384 38.345-32.374 16.814-68.649 25.676-105.348 25.676zm134.49-18.573c-8.437 0-15.301-6.914-15.301-15.413.842-20.448 29.764-20.441 30.603 0 0 8.499-6.864 15.413-15.302 15.413z"></path></svg></span>
                <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-1"> DEVOPS</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-2"> Administrador de Redes <br>Amazon Web Services <br>Apache Kafka <br>AWS Certified Cloud Practitioner <br>AWS Certified Solutions Architect - Associate <br>Certificação AZ-900: Microsoft&nbsp;
                </p>
                <a href="https://nicepage.com/html5-template" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-palette-1-light-1 u-radius-3 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-1"> Acessar material</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2555"></use></svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-2555"><g id="Outline"><g><path d="M40,28h5a1,1,0,0,0,0-2H40a1,1,0,0,0,0,2Z"></path><path d="M61,26a1,1,0,0,0-1,1V60H9a5,5,0,1,1,5-5,1,1,0,0,0,2,0V28h3a1,1,0,0,0,0-2H16V23A7,7,0,0,0,2,23V55a7.008,7.008,0,0,0,7,7H61a1,1,0,0,0,1-1V27A1,1,0,0,0,61,26ZM4,23a5,5,0,0,1,10,0v27.1a6.991,6.991,0,0,0-10,0Z"></path><path d="M48.071,38.372l1.6,4v0l2.4,6a1,1,0,0,0,1.858,0l2.4-6v0l1.6-4a.988.988,0,0,0,.063-.334c0-.013.008-.024.008-.038V21a1,1,0,0,0-2,0V37H54V14h2v3a1,1,0,0,0,2,0V7A5,5,0,0,0,48,7V38c0,.014.007.025.008.039A.987.987,0,0,0,48.071,38.372ZM52.077,43h1.846L53,45.308Zm2.646-2H51.277l-.8-2h5.046ZM52,37H50V14h2ZM50,12V10h6v2Zm0-5a3,3,0,0,1,6,0V8H50Z"></path><path d="M24,21.7v.481a2.982,2.982,0,0,0,0,5.632V28a6.007,6.007,0,0,0,4.138,5.7,8.3,8.3,0,0,1-3.879,2.2l-1.525.382A4.931,4.931,0,0,0,23.93,46H26a1,1,0,0,0,0-2H23.93a2.931,2.931,0,0,1-.71-5.774l1.525-.381a10.3,10.3,0,0,0,5.779-3.871A6.005,6.005,0,0,0,36,28v-.184a2.982,2.982,0,0,0,0-5.632V21.7a8.972,8.972,0,0,0,1.747-11.269,1,1,0,0,0-1.723,1.017,6.972,6.972,0,0,1-1.65,9.009,1,1,0,0,0-.374.78V22h-.883l.877-7.89a1,1,0,0,0-1.31-1.059L30,13.946l-2.684-.895a1,1,0,0,0-1.31,1.059L26.883,22H26v-.76a1,1,0,0,0-.374-.78A6.993,6.993,0,0,1,33.549,8.975a1,1,0,1,0,1.017-1.723A8.994,8.994,0,0,0,24,21.7ZM30,32a4,4,0,0,1-4-4h8A4,4,0,0,1,30,32ZM28.167,15.443l1.517.506a1,1,0,0,0,.632,0l1.517-.506L31.105,22H28.9ZM28,24h7a1,1,0,0,1,0,2H25a1,1,0,0,1,0-2Z"></path><circle cx="18" cy="15" r="1"></circle><circle cx="42" cy="15" r="1"></circle><circle cx="30" cy="3" r="1"></circle><path d="M19.108,9.866A1,1,0,1,0,18.742,8.5,1,1,0,0,0,19.108,9.866Z"></path><path d="M39.892,21.866a1,1,0,1,0-.366-1.366A1,1,0,0,0,39.892,21.866Z"></path><circle cx="36" cy="4.608" r="1" transform="translate(0.034 9.475) rotate(-15)"></circle><path d="M40.892,9.866A1,1,0,1,0,39.526,9.5,1,1,0,0,0,40.892,9.866Z"></path><path d="M20.474,20.5a1,1,0,1,0-.366,1.366A1,1,0,0,0,20.474,20.5Z"></path><path d="M24.5,5.474a1,1,0,1,0-1.366-.366A1,1,0,0,0,24.5,5.474Z"></path><path d="M35,54h4a1,1,0,0,0,1-1V51.319a6.87,6.87,0,0,0,.974-.561l1.454.84a1,1,0,0,0,1.366-.366l2-3.464a1,1,0,0,0-.366-1.366l-1.452-.839c.016-.189.024-.376.024-.563s-.008-.374-.024-.563l1.452-.839a1,1,0,0,0,.366-1.366l-2-3.464a1,1,0,0,0-1.366-.366l-1.454.84A6.87,6.87,0,0,0,40,38.681V37a1,1,0,0,0-1-1H35a1,1,0,0,0-1,1v1.681a6.87,6.87,0,0,0-.974.561l-1.454-.84a1,1,0,0,0-1.366.366l-2,3.464a1,1,0,0,0,.366,1.366l1.452.839c-.016.189-.024.376-.024.563s.008.374.024.563l-1.452.839a1,1,0,1,0,1,1.732L31.6,46.96a1,1,0,0,0,.484-1.047,4.78,4.78,0,0,1,0-1.826A1,1,0,0,0,31.6,43.04l-1.166-.674,1-1.732,1.166.674a1,1,0,0,0,1.15-.106,4.994,4.994,0,0,1,1.58-.911A1,1,0,0,0,36,39.349V38h2v1.349a1,1,0,0,0,.666.942,4.994,4.994,0,0,1,1.58.911,1,1,0,0,0,1.15.106l1.166-.674,1,1.732L42.4,43.04a1,1,0,0,0-.484,1.047,4.78,4.78,0,0,1,0,1.826A1,1,0,0,0,42.4,46.96l1.166.674-1,1.732L41.4,48.692a1,1,0,0,0-1.15.106,4.994,4.994,0,0,1-1.58.911,1,1,0,0,0-.666.942V52H36V50.651a1,1,0,0,0-.666-.942,4.994,4.994,0,0,1-1.58-.911,1,1,0,0,0-1.15-.106l-2.032,1.174a1,1,0,1,0,1,1.732l1.454-.84a6.87,6.87,0,0,0,.974.561V53A1,1,0,0,0,35,54Z"></path><path d="M40,45a3,3,0,1,0-3,3A3,3,0,0,0,40,45Zm-4,0a1,1,0,1,1,1,1A1,1,0,0,1,36,45Z"></path><path d="M38,58H50a4,4,0,0,0,4-4V52a1,1,0,0,0-2,0v2a2,2,0,0,1-2,2H38a1,1,0,0,0,0,2Z"></path><path d="M20,54a3,3,0,1,0,3-3A3,3,0,0,0,20,54Zm4,0a1,1,0,1,1-1-1A1,1,0,0,1,24,54Z"></path>
</g>
</g></svg></span>
                <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-3"> UX &amp; DESIGN</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-4"> Adobe XD <br>Blender <br>Desenho básico <br>Desenvolvimento de Carreira em UX <br>Design de Jogos <br>Design Gráfico
                </p>
                <a href="https://nicepage.com/css-templates" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-palette-1-light-1 u-radius-3 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-2"> Acessar material</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-palette-2-light-3 u-spacing-27 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510.833 510.833" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cc8d"></use></svg><svg class="u-svg-content" viewBox="0 0 510.833 510.833" id="svg-cc8d"><g><path d="m255.417 65.563c4.143 0 7.5-3.357 7.5-7.5v-50.563c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v50.563c0 4.143 3.357 7.5 7.5 7.5z"></path><path d="m115.487 119.132c2.93 2.928 7.677 2.928 10.607 0 2.929-2.93 2.929-7.678 0-10.607l-35.754-35.755c-2.929-2.927-7.677-2.929-10.607 0-2.929 2.93-2.929 7.678 0 10.607z"></path><path d="m65.027 240.953h-50.564c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.563c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.499-7.5z"></path><path d="m115.487 377.775-35.754 35.754c-2.929 2.93-2.929 7.678 0 10.607 2.93 2.928 7.677 2.928 10.607 0l35.754-35.754c2.929-2.93 2.929-7.678 0-10.607-2.929-2.927-7.677-2.927-10.607 0z"></path><path d="m395.346 377.775c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607l35.754 35.754c2.93 2.928 7.677 2.928 10.607 0 2.929-2.93 2.929-7.678 0-10.607z"></path><path d="m496.37 240.953h-50.563c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.563c4.143 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z"></path><path d="m420.493 72.77-35.754 35.755c-2.929 2.93-2.929 7.678 0 10.607 2.93 2.928 7.677 2.928 10.607 0l35.754-35.755c2.929-2.93 2.929-7.678 0-10.607-2.93-2.928-7.678-2.928-10.607 0z"></path><path d="m403.579 233.293c0-82.872-66.465-150.293-148.162-150.293-28.618 0-56.394 8.293-80.324 23.982-23.282 15.265-41.842 36.74-53.673 62.103-1.751 3.754-.127 8.217 3.626 9.968 3.757 1.753 8.217.127 9.968-3.626 21.939-47.035 69.2-77.427 120.403-77.427 73.426 0 133.162 60.692 133.162 135.293 0 35.434-13.39 68.934-37.702 94.327-14.013 14.635-25.941 28.619-29.01 48.213h-130.939c-3.867-20.341-17.742-34.612-30.21-47.425-24.803-25.49-38.463-59.27-38.463-95.115 0-8.851.847-17.703 2.516-26.312.789-4.066-1.868-8.002-5.935-8.791-4.066-.783-8.002 1.869-8.791 5.936-1.852 9.547-2.79 19.36-2.79 29.167 0 39.775 15.169 77.27 42.713 105.576 15.819 16.256 27.017 29.232 27.017 48.251 0 .066.001.134.003.2l.43 44.013c0 14.279 7.617 26.812 19 33.752v8.248c0 20.678 16.822 37.5 37.5 37.5h46c20.678 0 37.5-16.822 37.5-37.5v-8.248c11.383-6.94 19-19.473 19-33.752 0 0-.053-49.026-.153-49.515 1.423-17.382 11.959-29.737 25.447-43.825 26.997-28.199 41.867-65.383 41.867-104.7zm-101.162 240.04c0 12.406-10.094 22.5-22.5 22.5h-46c-12.406 0-22.5-10.094-22.5-22.5v-2.891c1.799.252 3.633.391 5.5.391h80c1.867 0 3.701-.14 5.5-.391zm-5.5-17.5h-80c-13.51 0-24.5-10.99-24.5-24.5v-.5h76c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-76v-25h128.768l.232 25h-18c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h18v.5c0 13.51-10.991 24.5-24.5 24.5z"></path><path d="m304.177 234.285c-2.54 3.271-1.947 7.983 1.324 10.523 3.27 2.541 7.982 1.949 10.523-1.324l14.848-19.121c3.932-5.063 5.656-11.354 4.856-17.715-.801-6.361-4.03-12.029-9.094-15.961-5.063-3.932-11.358-5.666-17.715-4.855-6.361.8-12.029 4.029-15.96 9.093l-48.439 62.384-27.8-30.759c-8.875-9.816-24.082-10.582-33.897-1.711-4.756 4.299-7.553 10.192-7.877 16.595-.323 6.402 1.866 12.547 6.164 17.304l47.001 52c9.461 10.974 28.156 10.301 36.761-1.374l29.685-38.23c2.54-3.271 1.947-7.983-1.324-10.523s-7.982-1.949-10.523 1.324l-29.685 38.23c-3.222 4.378-10.253 4.633-13.785.515l-47-52c-3.328-3.682-3.04-9.384.643-12.712 3.68-3.324 9.383-3.04 12.711.643l33.8 37.396c2.946 3.416 8.802 3.22 11.488-.43l53.927-69.451c2.887-3.882 8.873-4.635 12.628-1.589 3.883 2.888 4.635 8.869 1.589 12.629z"></path>
</g></svg></span>
                <h5 class="u-align-center u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-5"> INOVAÇÃO &amp; GESTÃO</h5>
                <p class="u-text u-text-palette-2-dark-2 u-text-6"> Aprendizagem <br>Business Agility <br>Certificação Cobit 5<br>Certificação PMP e CAPM do PMI <br>Comunicação <br>Comunicação para líderes<br>Certificação da biblioteca&nbsp;<br>
                </p>
                <a href="https://nicepage.com/website-builder" class="u-border-2 u-border-active-grey-30 u-border-hover-grey-30 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-palette-1-light-1 u-radius-3 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-3"> Acessar material<br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-0b56">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="images/p32.png" alt="" data-image-width="800" data-image-height="600">
        <h1 class="u-text u-text-default u-title u-text-1">Kagi Idiomas</h1>
        <h2 class="u-subtitle u-text u-text-2">Estude o ingles do basico ao avançado com foco em programação</h2>
        <a href="https://nicepage.com/c/text-on-image-html-templates" class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-50 u-btn-1">Acessar material</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e455"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.me" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+55 (19) 98320-9955
        </a>
        <p class="u-small-text u-text u-text-variant u-text-1"> Mergulhe em Tecnologia!&nbsp;<br>Você vai estudar, praticar, discutir e se aprofundar em uma plataforma que respira tecnologia.
        </p>
        <h3 class="u-headline u-text u-text-2">
          <a href="/">
            <span style="font-weight: 700; font-size: 3rem;">KagiCursos</span>
            <span style="font-weight: 700;">
              <span class="u-text-palette-2-base">
                <span style="font-size: 2.25rem;"></span>
              </span>
            </span>
          </a>
        </h3>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-91df"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-91df"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d7d0"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d7d0"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-885b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-885b"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
        </div>
        <p class="u-text u-text-3">Kagicursos@kagiGmail.com</p>
      </div></footer>
  </body>
</html>
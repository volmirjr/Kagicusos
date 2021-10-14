<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contato/Feedback">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>contatos</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="contatos.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
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
    <meta name="twitter:title" content="contatos">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="contatos">
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
    <section class="u-clearfix u-white u-section-1" id="carousel_39fa">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-palette-1-base u-group-1">
          <div class="u-container-layout u-valign-middle-xl u-valign-middle-xs u-container-layout-1">
            <h1 class="u-text u-text-1">Contato/Feedback</h1>
            <div class="u-align-left u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
              <form action="#" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                <div class="u-form-group u-form-name u-form-group-1">
                  <label for="name-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                  <input type="text" placeholder="Nome:" id="name-5a14" name="name" class="u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-email u-form-group u-form-group-2">
                  <label for="email-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                  <input type="email" placeholder="Email:" id="email-5a14" name="email" class="u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-group u-form-message u-form-group-3">
                  <label for="message-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                  <textarea rows="4" cols="50" id="message-5a14" name="message" class="u-input u-input-rectangle u-white" required=""></textarea>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-form-group-4">
                  <a href="#" class="u-active-palette-2-base u-border-2 u-border-black u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-1 u-radius-24 u-text-black u-text-hover-white u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                </div>
                <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
              </form>
            </div>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-spacing-10 u-text-black u-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-077e"></use></svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-077e" style="enable-background:new 0 0 52 52;"><path style="fill:currentColor;" d="M38.853,5.324L38.853,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C6.751,11.72,6.031,23.763,11.459,31L26,52l14.541-21C45.969,23.763,45.249,11.72,38.853,5.324z M26.177,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S29.491,24,26.177,24z"></path></svg></span>
                <h5 class="u-text u-text-2">Localização</h5>
                <p class="u-text u-text-3">Rua Sinimbu 520,&nbsp;<br>134-254&nbsp; Liberdade<br>São Paulo - SP&nbsp;&nbsp;
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-spacing-10 u-text-black u-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9786"></use></svg><svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-9786" style="enable-background:new 0 0 513.64 513.64;"><g><g><path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-4">Telefone</h5>
                <p class="u-text u-text-5">(11) 9 8569-8547&nbsp;<br>(11) 9 8593-4556
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-spacing-10 u-text-black u-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d01e"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-d01e"><path d="m201 12.714v184.286h267v-184.286c0-7.022-5.692-12.714-12.714-12.714h-241.572c-7.022 0-12.714 5.692-12.714 12.714zm63.89 33.131h70.271c8.284 0 15 6.716 15 15s-6.716 15-15 15h-70.271c-8.284 0-15-6.716-15-15s6.715-15 15-15zm0 75.142h139.22c8.284 0 15 6.716 15 15s-6.716 15-15 15h-139.22c-8.284 0-15-6.716-15-15s6.715-15 15-15z"></path><path d="m472 227h-275c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h275c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40zm-207.5 217.5h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path><path d="m87 227h-47c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h47c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40z"></path></svg></span>
                <h5 class="u-text u-text-6">Sac</h5>
                <p class="u-text u-text-7">1-234-567-8900</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-icon u-icon-circle u-spacing-10 u-text-black u-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f82"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9f82" style="enable-background:new 0 0 512 512;"><g><g><path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z"></path>
</g>
</g><g><g><path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z"></path>
</g>
</g><g><g><path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"></path>
</g>
</g><g><g><path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-8">Email</h5>
                <p class="u-text u-text-9">
                  <a href="mailto:kagi@kagigmail.com.br" class="u-active-none u-border-1 u-border-black u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2">kagi@kagigmail.com.br</a>
                </p>
              </div>
            </div>
          </div>
        </div>
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
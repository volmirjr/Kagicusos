<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pro​, ​12X R$120 à vista&nbsp;R$1.440">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>comprapro</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="comprapro.css" media="screen">
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
    <meta name="twitter:title" content="comprapro">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="comprapro">
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
    <section class="u-clearfix u-section-1" id="sec-e401">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                      <div class="u-form-group u-form-name">
                        <label for="name-bc86" class="u-label">Nome:</label>
                        <input type="text" placeholder="Insira seu nome:" id="name-bc86" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-bc86" class="u-label">Email:</label>
                        <input type="email" placeholder="Insira um endereço de email válido:" id="email-bc86" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-group u-form-group-3">
                        <label for="text-09fe" class="u-label">Senha:</label>
                        <input type="text" placeholder="Senha:" id="text-09fe" name="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-329e" class="u-label">Sexo:</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-329e" name="select" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            <option value="--------------------------">--------------------------</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                      <div class="u-form-group u-form-phone u-form-group-5">
                        <label for="phone-4198" class="u-label">Telefone:</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Insira seu telefone (ex: +14155552675)" id="phone-4198" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-date u-form-group u-form-group-6">
                        <label for="date-6c81" class="u-label">Data de nascimento:</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-6c81" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-align-center u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-26">Continuar<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                      <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-palette-1-light-3 u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 -92 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-654d"></use></svg><svg class="u-svg-content" viewBox="0 -92 512 512" id="svg-654d"><path d="m419.25 277.976562h-326.5c-4.988281 0-9.648438-2.464843-12.457031-6.585937-43.078125-63.171875-46.382813-184.691406-46.632813-202.730469-.015625-.707031-.023437-1.421875-.023437-2.132812 0-8.316406 6.734375-15.0625 15.050781-15.078125h.03125c8.300781 0 15.046875 6.714843 15.078125 15.019531 0 .101562.003906.992188.039063 2.570312 1.328124 42.902344 36.644531 77.390626 79.863281 77.390626 44.058593 0 79.902343-35.84375 79.902343-79.902344 0-8.328125 6.753907-15.078125 15.078126-15.078125h34.636718c8.328125 0 15.078125 6.75 15.078125 15.078125 0 44.058594 35.847657 79.902344 79.90625 79.902344 43.257813 0 78.597657-34.550782 79.867188-77.507813.027343-1.507813.035156-2.351563.035156-2.449219.03125-8.308594 6.773437-15.023437 15.078125-15.023437h.027344c8.316406.015625 15.050781 6.761719 15.050781 15.078125 0 .714844-.007813 1.425781-.019531 2.136718-.253906 18.035157-3.558594 139.558594-46.632813 202.730469-2.808593 4.117188-7.472656 6.582031-12.457031 6.582031zm0 0" fill="#fff780"></path><path d="m463.308594 51.449219c-.007813 0-.015625 0-.027344 0-8.300781 0-15.046875 6.714843-15.078125 15.019531 0 .101562-.003906.945312-.035156 2.453125-1.269531 42.953125-36.609375 77.507813-79.867188 77.507813-44.058593 0-79.902343-35.84375-79.902343-79.902344 0-8.328125-6.753907-15.078125-15.078126-15.078125h-17.316406v226.523437h163.246094c4.988281 0 9.648438-2.464844 12.457031-6.582031 43.078125-63.171875 46.382813-184.695313 46.632813-202.730469.015625-.707031.023437-1.421875.023437-2.132812-.003906-8.316406-6.738281-15.0625-15.054687-15.078125zm0 0" fill="#ffc02e"></path><path d="m256 0c-26.863281 0-48.71875 21.855469-48.71875 48.71875s21.855469 48.714844 48.71875 48.714844 48.71875-21.851563 48.71875-48.714844-21.855469-48.71875-48.71875-48.71875zm0 0" fill="#ffc02e"></path><path d="m256.003906 0v97.4375c26.863282-.003906 48.714844-21.855469 48.714844-48.71875s-21.855469-48.71484375-48.714844-48.71875zm0 0" fill="#ffa73b"></path><path d="m48.71875 37.597656c-26.863281 0-48.71875 21.855469-48.71875 48.71875 0 26.863282 21.855469 48.71875 48.71875 48.71875s48.714844-21.855468 48.714844-48.71875c0-26.863281-21.851563-48.71875-48.714844-48.71875zm0 0" fill="#ffc02e"></path><path d="m463.28125 37.597656c-26.863281 0-48.714844 21.855469-48.714844 48.71875 0 26.859375 21.851563 48.714844 48.714844 48.714844s48.71875-21.855469 48.71875-48.714844c0-26.863281-21.855469-48.71875-48.71875-48.71875zm0 0" fill="#ffa73b"></path><path d="m419.25 327.441406h-326.5c-8.328125 0-15.078125-6.75-15.078125-15.078125v-44.964843h356.65625v44.964843c0 8.328125-6.75 15.078125-15.078125 15.078125zm0 0" fill="#ffc02e"></path><path d="m256.003906 327.441406h163.246094c8.328125 0 15.078125-6.75 15.078125-15.078125v-44.964843h-178.324219zm0 0" fill="#ffa73b"></path></svg></span>
                  <h2 class="u-subtitle u-text u-text-default u-text-1">
                    <span style="font-size: 1.875rem; font-weight: 700;" class="u-text-custom-color-1">Pro</span>
                    <span style="font-size: 1.5rem;"></span>
                  </h2>
                  <h2 class="u-align-center u-subtitle u-text u-text-default u-text-2"> 12X <span style="font-weight: 700; font-size: 2.5rem;">R$120</span>
                    <span style="font-size: 1.25rem;" class="u-text-grey-50">
                      <br>à vista&nbsp;R$1.440
                    </span>
                  </h2>
                  <p class="u-text u-text-default u-text-3">Acesso a TODOS os cursos da plataforma<br>
                    <br>Kagi Challenges<br>
                    <br>Kagi Cases<br>
                    <br>Certificado<br>
                    <br>Kagi Língua (incluindo curso Inglês para Devs)
                  </p>
                </div>
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
<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Nome, Material, Tarefas">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Dasktop</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Perfil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.25.0, nicepage.com">
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
    <meta name="twitter:title" content="Perfil">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Perfil">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contatos.php" style="padding: 10px 20px;">Contatos</a>
</li><?php if(isset($_SESSION['email'])){ echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Perfil.php" style="padding: 10px 20px;">Perfil</a></li> 
  <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="sair.php" style="padding: 10px 20px;">Sair</a>
  </li>';} else{ echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Loguin.php" style="padding: 10px 20px;">Login</a>
</li>'; }?>
</ul>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-7008">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="images/f1884abfb5ac4ada7910ec7d9260c8a50ed3c270a865e3559998dc4604db98d9cedf74fa121a7342c6a3a266a9ca94389c1811f42d8516797842fc_1280.png" alt="" data-image-width="1280" data-image-height="1280">
            <img class="u-image u-image-circle u-preserve-proportions u-image-2" src="images/f1884abfb5ac4ada7910ec7d9260c8a50ed3c270a865e3559998dc4604db98d9cedf74fa121a7342c6a3a266a9ca94389c1811f42d8516797842fc_1280.png" alt="" data-image-width="1280" data-image-height="1280">

            <h1 class="u-text u-text-default u-title u-text-1"><?php echo $_SESSION['nome'];?></h1>

            <p class="u-small-text u-text u-text-default u-text-variant u-text-2"><?php echo $_SESSION['re'];?></p>
            <p class="u-small-text u-text u-text-default u-text-variant u-text-3"><?php echo $_SESSION['email'];?></p>
            <p class="u-small-text u-text u-text-default u-text-variant u-text-4"><?php echo $_SESSION['data'];?></p>
            <img class="u-image u-image-default u-image-3" src="images/p32.png" alt="" data-image-width="800" data-image-height="600">
          </div>
        </div>
        <div class="u-container-style u-group u-white u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <div class="u-border-2 u-border-custom-color-1 u-container-style u-expanded-width u-group u-white u-group-3">
              <div class="u-container-layout u-container-layout-3">
                <h1 class="u-text u-text-default u-title u-text-5">Material</h1><span class="u-border-2 u-border-custom-color-1 u-icon u-icon-circle u-spacing-10 u-text-custom-color-1 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c68b"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c68b"><g><path d="m507.786 64.62c-.304-.286-60.445-57.641-60.445-57.641-2.299-2.206-4.677-4.486-9.117-4.486h-242.12c-7.072 0-12.826 5.753-12.826 12.825v39.383l-85.335 14.628c-6.84 1.2-11.44 7.746-10.255 14.579l4.331 25.252c-27.737 9.334-56.214 18.956-83.705 28.831-6.496 2.375-9.905 9.598-7.587 16.133l54.685 152.016c1.1 3.059 3.983 4.964 7.058 4.964.842 0 1.7-.143 2.538-.445 3.898-1.402 5.921-5.698 4.519-9.596l-53.876-149.768c25.9-9.273 52.722-18.349 78.935-27.172l25.771 150.245 29.654 173.032c1.071 6.108 6.44 10.454 12.5 10.454.686 0 1.382-.056 2.08-.171l80.316-13.783 62.76-10.758-94.391 33.927-74.435 26.763-57.808-160.789c-1.401-3.898-5.696-5.921-9.595-4.52-3.898 1.401-5.921 5.697-4.52 9.595l58.628 163.074c1.875 5.128 6.733 8.316 11.868 8.316 1.419 0 2.86-.244 4.264-.757l76.671-27.566 174.094-62.574 33.259-5.701h73.471c7.072 0 12.826-5.766 12.826-12.854v-326.985c.001-4.489-2.435-6.779-4.213-8.451zm-19.871 1.776h-37.53l-.93.004c-1.797.012-6.004.043-7.071-1.017-.246-.245-.534-1.063-.534-2.582l-.087-40.415zm9.085 331.512h-298.722v-146.167c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v148.313c0 7.087 5.754 12.854 12.826 12.854h140.812l-94.545 16.206-77.982 13.383-29.248-170.665-32.269-188.13 80.405-13.783v147.022c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-199.449h228.475l.098 45.326c0 5.494 1.671 9.938 4.966 13.21 5.063 5.027 12.22 5.377 16.663 5.377.382 0 .744-.003 1.083-.005l47.438-.003z"></path><path d="m234.43 118.949c0 4.142 3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-214.436c-4.142 0-7.5 3.358-7.5 7.5z"></path><path d="m456.366 164.731h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"></path><path d="m456.366 218.013h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"></path><path d="m456.366 271.295h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"></path><path d="m456.366 324.578h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"></path>
</g></svg></span>
                <p class="u-align-center u-small-text u-text u-text-variant u-text-6">Por aqui você tera acesso a todo o material da Kagi pra fazer&nbsp;bom proveito de tudo aproveite tudo oq a kagi tem a oferece.</p>
                <a href="https://nicepage.com/one-page-template" class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-palette-1-base u-btn-1">Acessar</a>
              </div>
            </div>
            <div class="u-border-2 u-border-custom-color-1 u-container-style u-expanded-width u-group u-white u-group-4">
              <div class="u-container-layout u-container-layout-4">
                <h1 class="u-text u-text-default u-title u-text-7">Tarefas</h1><span class="u-border-2 u-border-custom-color-1 u-icon u-icon-circle u-spacing-11 u-text-custom-color-1 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6ee0"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-6ee0" style="enable-background:new 0 0 512 512;"><g><g><path d="M414.007,148.75c5.522,0,10-4.477,10-10V30c0-16.542-13.458-30-30-30h-364c-16.542,0-30,13.458-30,30v452    c0,16.542,13.458,30,30,30h364c16.542,0,30-13.458,30-30v-73.672c0-5.523-4.478-10-10-10c-5.522,0-10,4.477-10,10V482    c0,5.514-4.486,10-10,10h-364c-5.514,0-10-4.486-10-10V30c0-5.514,4.486-10,10-10h364c5.514,0,10,4.486,10,10v108.75    C404.007,144.273,408.485,148.75,414.007,148.75z"></path>
</g>
</g><g><g><path d="M212.007,54c-50.729,0-92,41.271-92,92c0,26.317,11.11,50.085,28.882,66.869c0.333,0.356,0.687,0.693,1.074,1    c16.371,14.979,38.158,24.13,62.043,24.13c23.885,0,45.672-9.152,62.043-24.13c0.387-0.307,0.741-0.645,1.074-1    c17.774-16.784,28.884-40.552,28.884-66.869C304.007,95.271,262.736,54,212.007,54z M212.007,218    c-16.329,0-31.399-5.472-43.491-14.668c8.789-15.585,25.19-25.332,43.491-25.332c18.301,0,34.702,9.747,43.491,25.332    C243.405,212.528,228.336,218,212.007,218z M196.007,142v-6.5c0-8.822,7.178-16,16-16s16,7.178,16,16v6.5c0,8.822-7.178,16-16,16    S196.007,150.822,196.007,142z M269.947,188.683c-7.375-10.938-17.596-19.445-29.463-24.697c4.71-6.087,7.523-13.712,7.523-21.986    v-6.5c0-19.851-16.149-36-36-36s-36,16.149-36,36v6.5c0,8.274,2.813,15.899,7.523,21.986    c-11.867,5.252-22.088,13.759-29.463,24.697c-8.829-11.953-14.06-26.716-14.06-42.683c0-39.701,32.299-72,72-72s72,32.299,72,72    C284.007,161.967,278.776,176.73,269.947,188.683z"></path>
</g>
</g><g><g><path d="M266.007,438h-54c-5.522,0-10,4.477-10,10s4.478,10,10,10h54c5.522,0,10-4.477,10-10S271.529,438,266.007,438z"></path>
</g>
</g><g><g><path d="M266.007,382h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,382,266.007,382z"></path>
</g>
</g><g><g><path d="M266.007,326h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,326,266.007,326z"></path>
</g>
</g><g><g><path d="M88.366,272.93c-1.859-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.211,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.87,1.86,4.439,2.93,7.07,2.93c2.64,0,5.21-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,274.79,88.366,272.93z"></path>
</g>
</g><g><g><path d="M88.366,328.93c-1.869-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.2,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.87,1.86,4.439,2.93,7.07,2.93c2.64,0,5.21-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,330.79,88.366,328.93z"></path>
</g>
</g><g><g><path d="M88.366,384.93c-1.869-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.2,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.859,1.86,4.439,2.93,7.07,2.93c2.64,0,5.22-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,386.79,88.366,384.93z"></path>
</g>
</g><g><g><path d="M266.007,270h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,270,266.007,270z"></path>
</g>
</g><g><g><path d="M491.002,130.32c-9.715-5.609-21.033-7.099-31.871-4.196c-10.836,2.904-19.894,9.854-25.502,19.569L307.787,363.656    c-0.689,1.195-1.125,2.52-1.278,3.891l-8.858,79.344c-0.44,3.948,1.498,7.783,4.938,9.77c1.553,0.896,3.278,1.34,4.999,1.34    c2.092,0,4.176-0.655,5.931-1.948l64.284-47.344c1.111-0.818,2.041-1.857,2.73-3.052l125.841-217.963    C517.954,167.638,511.058,141.9,491.002,130.32z M320.063,426.394l4.626-41.432l28.942,16.71L320.063,426.394z M368.213,386.996    l-38.105-22l100.985-174.91l38.105,22L368.213,386.996z M489.054,177.693l-9.857,17.073l-38.105-22l9.857-17.073    c2.938-5.089,7.682-8.729,13.358-10.25c5.678-1.522,11.606-0.74,16.694,2.198c5.089,2.938,8.729,7.682,10.25,13.358    C492.772,166.675,491.992,172.604,489.054,177.693z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-small-text u-text u-text-variant u-text-8">Aqui você tera todo acesso as atividades dos cursos para se conseguir o certificado e preciso com que se realize todas&nbsp;as atividades que a kagi tem a oferecer desde o basico ao avançado.</p>
                <a href="https://nicepage.com/one-page-template" class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-palette-1-base u-btn-2">Acessar</a>
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
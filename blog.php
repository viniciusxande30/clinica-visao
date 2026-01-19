<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L6EQPQP27R"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-L6EQPQP27R');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>Blog | Clínica Visão</title>

  <!-- Fav Icon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

  <!-- Google Fonts (mantendo o padrão do layout) -->
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Stylesheets (mantém o layout/tema) -->
  <link href="assets/css/font-awesome-all.css" rel="stylesheet">
  <link href="assets/css/flaticon.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="assets/css/jquery-ui.css" rel="stylesheet">
  <link href="assets/css/nice-select.css" rel="stylesheet">
  <link href="assets/css/elpath.css" rel="stylesheet">
  <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/module-css/banner.css" rel="stylesheet">
  <link href="assets/css/module-css/news.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">

  <style>
    /* Ajustes mínimos só para o blog (sem quebrar o tema) */
    .blog-hero .content-box { max-width: 740px; }
    .blog-wrap { padding: 80px 0; }
    .blog-card {
      background: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
      transition: all .25s ease;
      height: 100%;
    }
    .blog-card:hover { transform: translateY(-6px); box-shadow: 0 14px 34px rgba(0,0,0,0.08); }
    .blog-card .thumb { height: 210px; background-size: cover; background-position: center; }
    .blog-card .body { padding: 22px 22px 20px; }
    .blog-meta { font-size: 13px; opacity: .85; margin-bottom: 8px; }
    .blog-title { font-size: 20px; line-height: 1.25; margin-bottom: 10px; }
    .blog-excerpt { font-size: 15px; line-height: 1.7; opacity: .9; margin-bottom: 16px; }
    .blog-actions { display:flex; gap:10px; align-items:center; justify-content: space-between; }
    .tag-pill {
      display:inline-flex; align-items:center; gap:6px;
      padding: 6px 10px; border-radius: 999px;
      background: rgba(0,120,183,0.08);
      color: #0078b7; font-size: 12px; font-weight: 600;
    }
    .blog-search {
      background: #fff;
      border-radius: 16px;
      padding: 18px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
      position: sticky;
      top: 110px;
    }
    .blog-search .form-group { margin: 0; }
    .blog-search input {
      height: 48px;
      border-radius: 12px;
      border: 1px solid rgba(0,0,0,0.08);
      padding: 0 14px;
      width: 100%;
      outline: none;
    }
    .blog-search small { display:block; margin-top:10px; opacity:.8; }
    .category-list { list-style: none; padding: 0; margin: 12px 0 0; }
    .category-list li a {
      display:flex; justify-content: space-between; align-items:center;
      padding: 10px 10px;
      border-radius: 12px;
      transition: .2s ease;
    }
    .category-list li a:hover { background: rgba(0,0,0,0.04); }
    .category-list .count { opacity:.7; font-size: 12px; }
    @media (max-width: 991px){
      .blog-search { position: static; top: auto; margin-bottom: 26px; }
    }
  </style>
</head>

<body>

<!-- Cabeçalho Principal (mantido) -->
<header class="main-header">
  <!-- Topo -->
  <div class="header-top">
    <div class="outer-container">
      <div class="top-inner">
        <ul class="info-list clearfix">
          <li><i class="icon-46"></i><a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a></li>
          <li><i class="icon-3"></i>Horário de Atendimento: <span>Seg a Sex: 8h às 18h</span></li>
        </ul>
        <ul class="social-links clearfix">
          <li><h6>Siga-nos</h6></li>
          <li><a href="https://www.instagram.com/draelianemacedooftalmo/" target="_BLANK"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Menu -->
  <div class="header-lower">
    <div class="outer-container">
      <div class="outer-box">
        <div class="logo-box">
          <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="Clínica Visão"></a></figure>
        </div>
        <div class="menu-area">
          <div class="mobile-nav-toggler">
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
          </div>
          <nav class="main-menu navbar-expand-md navbar-light clearfix">
            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
              <ul class="navigation clearfix">
                <li><a href="index.php">Site</a></li>
                <li><a href="blog.php" class="current">Blog</a></li>
                <li><a href="#ultimos">Últimos posts</a></li>
                <li><a href="#categorias">Categorias</a></li>
                <li><a href="#footer">Contato</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="menu-right-content">
          <div class="support-box">
            <div class="icon-box"><img src="assets/images/icons/icon-1.svg" alt=""></div>
            <span>Agende por Telefone</span>
            <h6><a href="tel:+5598981324929">(98)98132-4929</a></h6>
          </div>
          <div class="btn-box">
            <a href="index.php#agendamento" class="theme-btn btn-one"><span>Agendar Consulta</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu Fixo ao Rolar -->
  <div class="sticky-header">
    <div class="outer-container">
      <div class="outer-box">
        <div class="logo-box">
          <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
        </div>
        <div class="menu-area">
          <nav class="main-menu clearfix">
            <!-- Menu carregado via JS -->
          </nav>
        </div>
        <div class="menu-right-content">
          <div class="support-box">
            <div class="icon-box"><img src="assets/images/icons/icon-1.svg" alt=""></div>
            <span>Agende por Telefone</span>
            <h6><a href="tel:+5598981324929">(98)98132-4929</a></h6>
          </div>
          <div class="btn-box">
            <a href="index.php#agendamento" class="theme-btn btn-one"><span>Agendar Consulta</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Menu Mobile (mantido, simples) -->
<div class="mobile-menu">
  <div class="menu-backdrop"></div>
  <div class="close-btn"><i class="fas fa-times"></i></div>

  <nav class="menu-box">
    <div class="nav-logo">
      <a href="index.php"><img src="assets/images/logo-2.png" alt="Clínica Visão" title="Clínica Visão"></a>
    </div>

    <div class="menu-outer">
      <!-- Menu copiado automaticamente do cabeçalho -->
    </div>

    <div class="contact-info">
      <h4>Fale Conosco</h4>
      <ul>
        <li>Av. Contorno Leste Oeste, 03 COHATRAC</li>
        <li><a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es">(98)8132-4929</a></li>
        <li><a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a></li>
      </ul>
    </div>

    <div class="social-links">
      <ul class="clearfix">
        <li><a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" aria-label="WhatsApp"><span class="fab fa-whatsapp"></span></a></li>
        <li><a href="https://www.instagram.com/draelianemacedooftalmo/" aria-label="Instagram"><span class="fab fa-instagram"></span></a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- Hero do Blog (reaproveita o banner-style-two) -->
<section class="banner-style-two p_relative blog-hero" id="topo-blog">
  <div class="bg-layer" style="background-image: url(assets/images/clinica_visao/clinica_visao_1.jpg);"></div>
  <div class="pattern-layer">
    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-25.png);"></div>
    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-26.png);"></div>
    <div class="pattern-3" style="background-image: url(assets/images/shape/shape-27.png);"></div>
  </div>
  <div class="auto-container">
    <div class="content-box">
      <span class="sub-title">Blog Clínica Visão</span>
      <h2>Conteúdos sobre <span>Saúde Ocular</span></h2>
      <p>Dicas, orientações e artigos para você cuidar melhor da sua visão, com informação clara e confiável.</p>
      <div class="lower-box">
        <div class="btn-box">
          <a href="#ultimos" class="theme-btn btn-two"><span>Ver últimos posts</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Conteúdo do Blog -->
<section class="blog-wrap" id="ultimos">
  <div class="auto-container">
    <div class="row clearfix">

      <!-- Sidebar -->
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="blog-search" id="categorias">
          <h4 style="margin-bottom:14px;">Buscar no blog</h4>
          <div class="form-group">
            <input type="text" placeholder="Digite um termo (ex: catarata, glaucoma...)">
          </div>
          <small>Dica: use palavras-chave curtas para filtrar.</small>

          <hr style="margin:18px 0; opacity:.12;">

          <h4 style="margin-bottom:10px;">Categorias</h4>
          <ul class="category-list">
            <li><a href="#"><span>Prevenção</span> <span class="count">6</span></a></li>
            <li><a href="#"><span>Exames</span> <span class="count">4</span></a></li>
            <li><a href="#"><span>Doenças Oculares</span> <span class="count">9</span></a></li>
            <li><a href="#"><span>Lentes e Óculos</span> <span class="count">3</span></a></li>
          </ul>

          <hr style="margin:18px 0; opacity:.12;">

          <a href="index.php#agendamento" class="theme-btn btn-one" style="width:100%; text-align:center;">
            <span>Agendar Consulta</span>
          </a>
        </div>
      </div>

      <!-- Lista de Posts -->
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="sec-title mb_30">
          <span class="sub-title mb_5">Últimos artigos</span>
          <h2>Confira os conteúdos mais recentes</h2>
        </div>

        <div class="row clearfix">

          <!-- Card 1 -->
          <div class="col-lg-6 col-md-6 col-sm-12 mb_30">
            <div class="blog-card">
              <div class="thumb" style="background-image:url('assets/images/resource/about-1.jpg');"></div>
              <div class="body">
                <div class="blog-meta">10 Jan 2026 • 4 min de leitura</div>
                <div class="tag-pill"><i class="fas fa-tag"></i> Doenças Oculares</div>
                <h3 class="blog-title">Sinais de catarata: quando procurar um oftalmologista?</h3>
                <p class="blog-excerpt">Entenda os sintomas mais comuns e quais exames ajudam a identificar a catarata com segurança.</p>
                <div class="blog-actions">
                  <a href="post-catarata.php" class="theme-btn btn-two"><span>Ler artigo</span></a>
                  <a href="post-catarata.php" style="font-weight:600;">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-6 col-md-6 col-sm-12 mb_30">
            <div class="blog-card">
              <div class="thumb" style="background-image:url('assets/images/clinica_visao/clinica_visao_2.jpg');"></div>
              <div class="body">
                <div class="blog-meta">05 Jan 2026 • 3 min de leitura</div>
                <div class="tag-pill"><i class="fas fa-tag"></i> Prevenção</div>
                <h3 class="blog-title">Olho seco: hábitos simples que ajudam no dia a dia</h3>
                <p class="blog-excerpt">Confira ajustes de rotina que reduzem o desconforto e quando é hora de investigar.</p>
                <div class="blog-actions">
                  <a href="post-olho-seco.php" class="theme-btn btn-two"><span>Ler artigo</span></a>
                  <a href="post-olho-seco.php" style="font-weight:600;">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- Rodapé (mantido simples) -->
<footer class="main-footer" id="footer">
  <div class="widget-section p_relative">
    <div class="auto-container">
      <div class="row clearfix">

        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
          <div class="footer-widget about-widget">
            <div class="widget-title"><h3>Sobre a Clínica</h3></div>
            <div class="widget-content">
              <p>Conteúdos e orientações sobre saúde ocular, com foco em prevenção, diagnóstico e bem-estar visual.</p>
              <ul class="social-links clearfix">
                <li><a href="https://www.instagram.com/draelianemacedooftalmo/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es"><i class="fab fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
          <div class="footer-widget links-widget ml_70">
            <div class="widget-title"><h3>Navegação</h3></div>
            <div class="widget-content">
              <ul class="links-list clearfix">
                <li><a href="index.php">Site</a></li>
                <li><a href="#ultimos">Últimos posts</a></li>
                <li><a href="#categorias">Categorias</a></li>
                <li><a href="index.php#agendamento">Agendamento</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
          <div class="footer-widget contact-widget">
            <div class="widget-title"><h3>Contato</h3></div>
            <div class="widget-content">
              <ul class="info-list clearfix">
                <li><img src="assets/images/icons/icon-5.svg" alt="">Email: <a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a></li>
                <li><img src="assets/images/icons/icon-6.svg" alt="">Telefone: <a href="tel:+5598981324929">(98)98132-4929</a></li>
                <li><img src="assets/images/icons/icon-7.svg" alt="">Av. Contorno Leste Oeste, 03 COHATRAC</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="footer-menu mt_60">
        <figure class="logo-box"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
      </div>
    </div>
  </div>

  <div class="footer-bottom centred">
    <div class="auto-container">
      <div class="copyright">
        <p>© 2026 Blog Clínica Visão — Feito com 🧡 pela <a href="https://rsweb.com.br" target="_BLANK">RS Solutions</a></p>
      </div>
    </div>
  </div>
</footer>

<div class="phone-call cbh-phone cbh-green cbh-show cbh-static" id="clbh_phone_div">
  <a id="WhatsApp-button" href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="phoneJs">
    <div class="cbh-ph-circle"></div>
    <div class="cbh-ph-circle-fill"></div>
    <div class="cbh-ph-img-circle1"></div>
  </a>
</div>

<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jQuery.style.switcher.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/pagenav.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>

</body>
</html>

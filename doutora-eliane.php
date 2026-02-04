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

  <title>Dra. Eliane Lopes Macedo | Clínica Visão</title>

  <!-- Fav Icon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

  <!-- Google Fonts (mesmas do site) -->
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- CSS do tema (reaproveitando a identidade visual) -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/font-awesome-all.css" rel="stylesheet">
  <link href="assets/css/flaticon.css" rel="stylesheet">
  <link href="assets/css/elpath.css" rel="stylesheet">
  <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">

  <style>
    :root{
      --title-font: 'Source Sans Pro', sans-serif;
      --text-font: 'Roboto', sans-serif;
      --accent: #0078b7;
      --bg: #f9fbfd;
    }

    body{ font-family: var(--text-font); }

    /* Hero simples */
    .doctor-hero{
      position: relative;
      padding: 50px 0 60px;
      background: var(--bg);
      overflow: hidden;
    }
    .doctor-hero .pattern-layer{
      position:absolute; inset:0; pointer-events:none; opacity:.8;
      background: radial-gradient(circle at 20% 20%, rgba(0,120,183,.08), transparent 45%),
                  radial-gradient(circle at 80% 30%, rgba(0,120,183,.06), transparent 40%);
    }
    .doctor-card{
      background:#fff;
      border-radius: 18px;
      box-shadow: 0 12px 28px rgba(0,0,0,.08);
      padding: 34px;
    }
    .doctor-title .sub-title{
      display:inline-block;
      font-weight:700;
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing:.8px;
      font-size:.9rem;
      margin-bottom:10px;
    }
    .doctor-title h1{
      font-family: var(--title-font);
      font-weight: 800;
      font-size: 2.2rem;
      margin-bottom: 8px;
      color:#111;
      line-height: 1.2;
    }
    .doctor-title p.lead{
      margin: 0;
      color:#444;
      line-height:1.7;
    }

    .profile-wrap{
      display:flex;
      gap: 28px;
      align-items: flex-start;
    }
    .profile-photo{
      width: 210px;
      min-width: 210px;
    }
    .profile-photo .photo{
      width: 230px;
      height: 330px;
      border-radius: 18px;
      overflow: hidden;
      background: #e9eef3;
      position: relative;
      box-shadow: 0 10px 20px rgba(0,0,0,.08);
      border: 1px solid rgba(0,0,0,.05);
    }
    .profile-photo img{
      width:100%;
      height:100%;
      object-fit: cover;
      display:block;
    }
    .profile-photo .badge{
      display:inline-flex;
      margin-top: 12px;
      font-size: .85rem;
      padding: 10px 12px;
      border-radius: 999px;
      background: rgba(0,120,183,.10);
      color: #0a4f76;
      font-weight: 700;
      gap: 8px;
      align-items: center;
    }

    .doctor-text h2{
      font-family: var(--title-font);
      font-weight: 800;
      font-size: 1.5rem;
      margin: 18px 0 10px;
      color: var(--accent);
    }
    .doctor-text p{
      margin: 0 0 14px;
      color:#2c2c2c;
      line-height: 1.8;
      font-size: 1.02rem;
    }
    .doctor-tags{
      display:flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 8px;
    }
    .doctor-tag{
      background:#f2f6fa;
      border: 1px solid rgba(0,0,0,.06);
      padding: 10px 12px;
      border-radius: 12px;
      font-size: .95rem;
      color:#1f1f1f;
    }

    .cta-row{
      display:flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 20px;
      align-items: center;
    }
    .cta-row a.theme-btn{
      padding: 14px 18px;
    }
    .cta-row .mini{
      color:#444;
      font-size:.95rem;
    }
    .cta-row .mini a{ color: var(--accent); font-weight: 700; }

    @media (max-width: 992px){
      .profile-wrap{ flex-direction: column; }
      .profile-photo{ width: 100%; min-width: 0; }
      .profile-photo .photo{ width: 100%; height: 320px; }
    }
  </style>
</head>

<body>

  <!-- Cabeçalho reaproveitando o seu -->
  <header class="main-header">
    <div class="header-top">
      <div class="outer-container">
        <div class="top-inner">
          <ul class="info-list clearfix">
            <li><i class="icon-46"></i><a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a></li>
            <li><i class="icon-3"></i>Horário de Atendimento: <span>Seg a Sex: 8h às 18h</span></li>
          </ul>
          <ul class="social-links clearfix">
            <li><h6>Siga-nos</h6></li>
            <li><a href="https://www.instagram.com/draelianemacedooftalmo/" target="_BLANK" rel="noopener"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

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
                  <li><a href="index.php">Início</a></li>
                  <li><a href="#conteudo">Sobre a Doutora</a></li>
                  <li><a href="#contato">Contato</a></li>
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
              <a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20agendar%20uma%20consulta%20com%20a%20Dra.%20Eliane%20Lopes%20Macedo."
                 class="theme-btn btn-one" target="_blank" rel="noopener">
                <span>Agendar Consulta</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Conteúdo -->
  <section class="doctor-hero" id="conteudo">
    <div class="pattern-layer"></div>

    <div class="auto-container">
      <div class="doctor-card">
        <div class="profile-wrap">

          <!-- IMAGEM (troque o src pelo caminho da foto) -->
          <div class="profile-photo">
            <div class="photo">
              <img src="assets/images/clinica_visao/doutora-eliane.jpeg" alt="Dra. Eliane Lopes Macedo - Oftalmologista em São Luís do Maranhão">
            </div>
            <div class="badge">
              <i class="fas fa-user-md"></i>
              +20 anos de experiência
            </div>
          </div>

          <!-- TEXTO -->
          <div class="doctor-text">
            <div class="doctor-title">
              <span class="sub-title">Clínica Visão do Quatrac</span>
              <h1>Dra. Eliane Lopes Macedo</h1>
              <p class="lead">Oftalmologista em São Luís do Maranhão</p>
            </div>

            <h2>Atendimento com precisão, cuidado e evidência</h2>

            <p>
              A <strong>Dra. Eliane Lopes Macedo</strong> é médica oftalmologista em São Luís do Maranhão, com mais de
              <strong>20 anos de experiência</strong> no cuidado da saúde ocular. Graduou-se em Medicina pela
              <strong>Universidade Federal do Piauí (UFPI)</strong> e realizou sua especialização em Oftalmologia no
              <strong>Hospital Oftalmológico de Sorocaba (HOS)</strong>, referência nacional na área.
            </p>

            <p>
              Possui especialidade em <strong>Córnea e Catarata</strong>, atuando no diagnóstico, acompanhamento e tratamento
              das principais doenças oculares, incluindo avaliação oftalmológica completa, cirurgia de catarata e
              acompanhamento de doenças da córnea.
            </p>

            <p>
              Atua há mais de duas décadas na <strong>Clínica Visão do Quatrac</strong>, em São Luís – MA, onde é reconhecida
              pelo atendimento <strong>humanizado</strong>, criterioso e baseado em evidências científicas, utilizando
              tecnologia moderna para garantir segurança e precisão nos resultados.
            </p>

            <p>
              A Dra. Eliane Macedo atende pacientes que buscam <strong>oftalmologista em São Luís</strong>,
              <strong>especialista em catarata</strong>, <strong>especialista em córnea</strong> e acompanhamento
              oftalmológico de confiança, sempre com foco na saúde visual e na qualidade de vida.
            </p>

            <div class="doctor-tags" aria-label="Áreas e buscas relacionadas">
              <div class="doctor-tag"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:8px;"></i>Córnea</div>
              <div class="doctor-tag"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:8px;"></i>Catarata</div>
              <div class="doctor-tag"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:8px;"></i>Avaliação completa</div>
              <div class="doctor-tag"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:8px;"></i>Diagnóstico e acompanhamento</div>
            </div>

            <div class="cta-row" id="contato">
              <a class="theme-btn btn-two"
                 href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20agendar%20uma%20consulta%20com%20a%20Dra.%20Eliane%20Lopes%20Macedo."
                 target="_blank" rel="noopener">
                <span>Agendar pelo WhatsApp</span>
              </a>
              <div class="mini">
                Ou ligue: <a href="tel:+5598981324929">(98) 98132-4929</a> •
                <a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rodapé simples (mantendo identidade) -->
  <footer class="main-footer" id="footer">
    <div class="footer-bottom centred">
      <div class="auto-container">
        <div class="copyright">
          <p>© 2025 Clínica de Visão — Feito com 🧡 pela <a href="https://rsweb.com.br" target="_BLANK" rel="noopener">RS Solutions</a> - Todos os direitos reservados</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- WhatsApp flutuante (igual ao site) -->
  <div class="phone-call cbh-phone cbh-green cbh-show cbh-static" id="clbh_phone_div">
    <a id="WhatsApp-button"
       href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20agendar%20uma%20consulta%20com%20a%20Dra.%20Eliane%20Lopes%20Macedo."
       target="_blank" class="phoneJs" title="WhatsApp" rel="noopener">
      <div class="cbh-ph-circle"></div>
      <div class="cbh-ph-circle-fill"></div>
      <div class="cbh-ph-img-circle1"></div>
    </a>
  </div>

  <!-- JS básico do tema (mínimo) -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>

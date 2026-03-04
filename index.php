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

<title>Clínica Visão</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="assets/css/switcher-style.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/module-css/banner.css" rel="stylesheet">
<link href="assets/css/module-css/contact-info.css" rel="stylesheet">
<link href="assets/css/module-css/about.css" rel="stylesheet">
<link href="assets/css/module-css/service.css" rel="stylesheet">
<link href="assets/css/module-css/chooseus.css" rel="stylesheet">
<link href="assets/css/module-css/appointment.css" rel="stylesheet">
<link href="assets/css/module-css/working.css" rel="stylesheet">
<link href="assets/css/module-css/team.css" rel="stylesheet">
<link href="assets/css/module-css/portfolio.css" rel="stylesheet">
<link href="assets/css/module-css/news.css" rel="stylesheet">
<link href="assets/css/module-css/contact.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<style>
  /* ===== POPUP AGENDAMENTO (premium glass) ===== */
  .appt-modal-overlay{
    position: fixed;
    inset: 0;
    background: radial-gradient(1200px 600px at 20% 10%, rgba(0,0,0,.55), rgba(0,0,0,.78));
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999999;
    padding: 18px;
  }

  .appt-modal-overlay.is-open{ display: flex; }

  .appt-modal{
    width: min(980px, 100%);
    border-radius: 22px;
    overflow: hidden;
    position: relative;
    transform: translateY(16px) scale(.98);
    opacity: 0;
    transition: .25s ease;
    box-shadow: 0 30px 80px rgba(0,0,0,.45);
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(16, 18, 22, .72);
  }

  .appt-modal-overlay.is-open .appt-modal{
    transform: translateY(0) scale(1);
    opacity: 1;
  }

  .appt-modal-grid{
    display: grid;
    grid-template-columns: 1.05fr .95fr;
    gap: 0;
  }

  @media (max-width: 900px){
    .appt-modal-grid{ grid-template-columns: 1fr; }
    .appt-left{ display: none; }
  }

  /* Lado esquerdo (impacto visual + copy) */
  .appt-left{
    padding: 34px 34px 30px;
    background:
      radial-gradient(900px 400px at 20% 10%, rgba(1,192,129,.25), transparent 60%),
      radial-gradient(900px 600px at 80% 70%, rgba(255,255,255,.10), transparent 60%),
      linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    position: relative;
  }

  .appt-badge{
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 999px;
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.14);
    color: #fff;
    font-size: 13px;
    letter-spacing: .2px;
    margin-bottom: 18px;
  }

  .appt-title{
    color: #fff;
    font-size: 34px;
    line-height: 1.1;
    margin: 0 0 10px;
    font-weight: 800;
  }

  .appt-sub{
    color: rgba(255,255,255,.85);
    font-size: 15px;
    line-height: 1.55;
    margin: 0 0 18px;
    max-width: 44ch;
  }

  .appt-points{
    display: grid;
    gap: 10px;
    margin-top: 16px;
  }

  .appt-point{
    display: flex;
    gap: 10px;
    align-items: flex-start;
    padding: 12px 12px;
    border-radius: 14px;
    background: rgba(255,255,255,.07);
    border: 1px solid rgba(255,255,255,.10);
    color: rgba(255,255,255,.88);
    font-size: 14px;
  }

  .appt-dot{
    width: 10px;
    height: 10px;
    border-radius: 99px;
    margin-top: 4px;
    background: #01c081;
    box-shadow: 0 0 0 4px rgba(1,192,129,.18);
    flex: 0 0 auto;
  }

  /* Lado direito (form) */
  .appt-right{
    padding: 22px 22px 18px;
    background: rgba(255,255,255,.06);
    border-left: 1px solid rgba(255,255,255,.10);
  }

  @media (max-width: 900px){
    .appt-right{ border-left: 0; }
  }

  .appt-topbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 8px;
  }

  .appt-topbar h3{
    margin: 0;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: .2px;
  }

  .appt-close{
    width: 42px;
    height: 42px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.14);
    background: rgba(0,0,0,.20);
    color: #fff;
    cursor: pointer;
    transition: .15s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
  .appt-close:hover{ transform: translateY(-1px); background: rgba(0,0,0,.35); }

  /* Ajustes no seu form sem quebrar seu layout */
  .appt-right .appointment-box{
    background: transparent !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  .appt-right .appointment-box h4{ display:none; }

  /* Rodapé (checkbox + ação secundária) */
  .appt-footer{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    margin-top: 14px;
    padding-top: 14px;
    border-top: 1px solid rgba(255,255,255,.12);
  }

  .appt-check{
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: rgba(255,255,255,.80);
    font-size: 13px;
    user-select: none;
    cursor: pointer;
  }

  .appt-check input{
    width: 18px;
    height: 18px;
    accent-color: #01c081;
  }

  .appt-secondary{
    color: rgba(255,255,255,.85);
    font-size: 13px;
    text-decoration: none;
    border-bottom: 1px dashed rgba(255,255,255,.35);
    padding-bottom: 2px;
  }
  .appt-secondary:hover{ color:#fff; border-bottom-color: rgba(255,255,255,.7); }
</style>



<style>
/* ===== FORM NO MODAL: deixar limpo e claro ===== */
.appt-right .form-inner { margin-top: 12px; }

/* organiza cada campo como bloco claro */
.appt-right .form-group{
  position: relative;
  background: rgba(255,255,255,.06);
  border: 1px solid rgba(255,255,255,.12);
  border-radius: 16px;
  padding: 14px 14px 12px 54px; /* espaço pro ícone à esquerda */
  margin-bottom: 12px;
}

/* transforma o span em label de verdade */
.appt-right .form-group > span{
  display: block;
  font-size: 12px;
  letter-spacing: .2px;
  color: rgba(255,255,255,.80);
  margin-bottom: 8px;
}

/* posiciona o ícone sem “invadir” */
.appt-right .form-group .icon-box{
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  width: 32px;
  height: 32px;
  border-radius: 12px;
  background: rgba(0,0,0,.25);
  border: 1px solid rgba(255,255,255,.12);
  display: grid;
  place-items: center;
  pointer-events: none;
}

/* inputs e select com aparência consistente */
.appt-right .form-group input,
.appt-right .form-group select{
  width: 100%;
  height: 46px;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,.14);
  background: rgba(0,0,0,.25);
  color: #fff;
  padding: 10px 12px;
  outline: none;
}

/* placeholder mais suave */
.appt-right .form-group input::placeholder{
  color: rgba(255,255,255,.45);
}

/* remove “estilos estranhos” do select wrapper do tema */
.appt-right .form-group .select-box{ width: 100%; }
.appt-right .form-group .select-box::after{ display:none !important; }

/* se o seu tema usa jQuery UI Selectmenu, isso arruma */
.appt-right .ui-selectmenu-button{
  width: 100% !important;
  height: 46px !important;
  border-radius: 12px !important;
  border: 1px solid rgba(255,255,255,.14) !important;
  background: rgba(0,0,0,.25) !important;
  color: #fff !important;
  padding: 10px 12px !important;
  box-shadow: none !important;
}
.appt-right .ui-selectmenu-text{ line-height: 24px !important; }
.appt-right .ui-selectmenu-icon{
  margin-top: 6px !important;
  opacity: .8;
}

/* o dropdown do select precisa ficar acima do modal */
.ui-selectmenu-menu{
  z-index: 1000000 !important;
}
.ui-menu{
  border-radius: 14px !important;
  overflow: hidden;
}

/* botão principal: mais claro e com presença */
.appt-right .message-btn .theme-btn.btn-one{
  height: 52px;
  border-radius: 14px !important;
  font-weight: 700;
  letter-spacing: .2px;
}

/* checkbox e link alinhados */
.appt-footer{
  align-items: center;
}
.appt-footer .appt-check{
  gap: 8px;
}
</style>
<style>
  /* ===== LIMPA estilos do tema DENTRO do modal ===== */
  .appt-right .appointment-box,
  .appt-right .form-inner,
  .appt-right .clearfix{ background: transparent !important; padding:0 !important; margin:0 !important; }

  /* some com qualquer ícone/estrutura antiga caso ainda exista */
  .appt-right .icon-box,
  .appt-right .select-box,
  .appt-right .selectmenu,
  .appt-right .message-btn,
  .appt-right .form-group,
  .appt-right .appointment-box h4,
  .appt-right .appointment-box span{
    display: none !important;
  }

  /* garante que o bootstrap fique com boa “cara” dentro do glass */
  .appt-right .form-control,
  .appt-right .form-select{
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.18);
    box-shadow: none !important;
    height: 50px;
    width:100%;
  }

  .appt-right .form-control:focus,
  .appt-right .form-select:focus{
    border-color: rgba(1,192,129,.75);
    box-shadow: 0 0 0 .2rem rgba(1,192,129,.18) !important;
  }

  .appt-right .form-label{
    margin-bottom: 8px;
    letter-spacing: .2px;
  }



  .custom-select-box{
  position: relative;
  width: 100%;
}

.custom-select-selected{
  background: #fff;
  border-radius: 12px;
  height: 50px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:0 15px;
  cursor:pointer;
  font-size:15px;
  color:#333;
}

.arrow{
  font-size:14px;
}

.custom-select-options{
  position:absolute;
  top:55px;
  left:0;
  width:100%;
  background:#fff;
  border-radius:12px;
  max-height:250px;
  overflow-y:auto;
  box-shadow:0 10px 30px rgba(0,0,0,0.15);
  display:none;
  z-index:9999;
}

.custom-option{
  padding:12px 15px;
  cursor:pointer;
  font-size:14px;
}

.custom-option:hover{
  background:#f1f1f1;
}
</style>
<!-- page wrapper -->





<body>
<!-- ===== MODAL POPUP AGENDAMENTO ===== -->
<div class="appt-modal-overlay" id="apptModal" aria-hidden="true">
  <div class="appt-modal" role="dialog" aria-modal="true" aria-labelledby="apptModalTitle">

    <div class="appt-modal-grid">
      <!-- Lado esquerdo (copy + impacto) -->
      <div class="appt-left">
        <div class="appt-badge">
          <span style="display:inline-block;width:10px;height:10px;border-radius:99px;background:#01c081;"></span>
          Agendamento rápido • Confirmação via WhatsApp
        </div>

        <h2 class="appt-title" id="apptModalTitle">Agende sua consulta oftalmológica </h2>
        <p class="appt-sub">
          Selecione o tipo de consulta, escolha a data e deixe seu WhatsApp.
          A nossa equipe da Clínica Visão confirma com você e orienta os próximos passos.
        </p>

        <div class="appt-points">
          <div class="appt-point"><span class="appt-dot"></span> Atendimento humanizado e organizado</div>
          <div class="appt-point"><span class="appt-dot"></span> Horários otimizados para você</div>
          <div class="appt-point"><span class="appt-dot"></span> Confirmação e suporte pelo <a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" TARGET="_BLANK">WhatsApp</a></div>
        </div>
      </div>

      <!-- Lado direito (form) -->
      <div class="appt-right">
        <div class="appt-topbar">
          <h3>Fazer agendamento</h3>
          <button class="appt-close" type="button" id="apptClose" aria-label="Fechar">
            ✕
          </button>
        </div>

        <!-- formulário de agendamento (o seu) -->
        <div class="appointment-box" id="agendamento">
          <h4>Agende sua Consulta</h4>
          <div class="form-inner">
           <form method="post" action="enviar_agendamento.php" class="mt-3" id="apptFormModal">

  <div class="mb-3">
  <label class="form-label text-white fw-semibold">Selecione o Serviço</label>

  <!-- valor real enviado no form -->
  <input type="hidden" name="servico" id="servicoInput" required>

  <div class="custom-select-box" id="servicoSelect">

    <div class="custom-select-selected">
      Selecione um serviço
      <span class="arrow">▾</span>
    </div>

    <div class="custom-select-options">

      <div class="custom-option">Consulta oftalmológica</div>
      <div class="custom-option">Consulta para diagnóstico</div>
      <div class="custom-option">Consulta para paciente Glaucomatoso</div>
      <div class="custom-option">Avaliação para óculos</div>
      <div class="custom-option">Retorno / Revisão</div>

      <div class="custom-option">OCT - Tomografia de Coerência Óptica</div>
      <div class="custom-option">Campimetria computadorizada</div>
      <div class="custom-option">Biometria óptica</div>
      <div class="custom-option">Topografia de córnea</div>
      <div class="custom-option">Paquimetria de córnea</div>
      <div class="custom-option">Microscopia especular</div>
      <div class="custom-option">Retinografia</div>
      <div class="custom-option">Mapeamento de retina</div>
      <div class="custom-option">Tonometria de aplanação</div>

    </div>

  </div>
</div>

  <div class="mb-3">
    <label class="form-label text-white fw-semibold">Data</label>
    <input type="text" name="data" class="form-control bg-white" placeholder="Selecione a data" id="datepicker" required>
  </div>

  <div class="mb-3">
    <label class="form-label text-white fw-semibold">Telefone / WhatsApp</label>
    <input type="text" name="telefone" class="form-control bg-white" placeholder="(00) 00000-0000" required>
  </div>

  <button type="submit" class="btn btn-primary w-100 py-3 fw-bold" style="border-radius:14px;">
    AGENDAR AGORA
  </button>

</form>
          </div>
        </div>

        <div class="appt-footer">
          <label class="appt-check" for="apptDontShow">
            <input type="checkbox" id="apptDontShow">
            Não mostrar novamente
          </label>

          <!-- opcional: leva para a seção de agendamento na página -->
          <a class="appt-secondary" href="#agendamento" id="apptGoSection">Ir para a seção</a>
        </div>
      </div>
    </div>

  </div>
</div>
   


      

<!-- Cabeçalho Principal -->
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
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation scroll-nav clearfix">
                                <li><a href="#home">Início</a></li>
                                <li><a href="#sobrenos">Sobre Nós</a></li>
                                <li><a href="#service">Especialidades</a></li>

                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLocalizacao">
                                        Localização
                                    </a>
                                </li>
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
                       <a href="#" id="" class="theme-btn btn-one abrirAgendamento">
                        <span>Agendar Consulta</span>
                      </a>
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
                        <h6><a href="tel:+559881324929">(98)98132-4929</a></h6>
                    </div>
                    <div class="btn-box">
                        <a href="#" id="" class="theme-btn btn-one abrirAgendamento">
                        <span>Agendar Consulta</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




       <!-- Menu Mobile -->
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
                <li>Nosso Endereço - Av. Contorno Leste Oeste, 03 COHATRAC</li>
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
<!-- Fim Menu Mobile -->





 <!-- banner-style-two -->
        <section class="banner-style-two p_relative" id="home">
            <div class="bg-layer" style="background-image: url(assets/images/clinica_visao/clinica_visao_1.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-26.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-27.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="sub-title">Atendimento com Tecnologia e Cuidado</span>
                    <h2>Clínica Especializada em <span>Saúde Ocular</span></h2>
                    <p>Oferecemos atendimento humanizado, exames completos e tecnologia de ponta para o cuidado da sua visão.</p>
                    <div class="lower-box">
                        <div class="btn-box"><a href="nosso-espaco.php" class="theme-btn btn-two"><span>Conheça Nosso Espaço</span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->




     


      <!-- Seção Informações Rápidas -->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-3 col-md-6 col-sm-12 info-block">
              <a href="#" id="" class="abrirAgendamento">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <span>Agende Agora</span>
                        <h4>Marcar Consulta</h4>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 info-block">
                <a href="#especialistas">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <span>Nossa Equipe</span>
                        <h4>Dra. Eliane Macedo</h4>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 info-block">
                <a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_BLANK">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-12"></i></div>
                        <span>Fale Conosco</span>
                        <h4>WhatsApp / Telefone</h4>
                    </div>
                </div>
                </a>
            </div>

          <!-- Bloco de informação -->
<div class="col-lg-3 col-md-6 col-sm-12 info-block">
    <div class="info-block-one">
        <div class="inner-box" data-bs-toggle="modal" data-bs-target="#modalLocalizacao" style="cursor: pointer;">
            <div class="icon-box"><i class="icon-13"></i></div>
            <span>Como Chegar</span>
            <h4>Nossa Localização</h4>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLocalizacao" tabindex="-1" aria-labelledby="modalLocalizacaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border: none; border-radius: 12px;">
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title" id="modalLocalizacaoLabel">Localização da Clínica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body p-0">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!3m2!1spt-BR!2sbr!4v1762097169134!5m2!1spt-BR!2sbr!6m8!1m7!1sAr0RA-rVQSuesKxwQSpbfA!2m2!1d-2.543176926561952!2d-44.2090213854426!3f290.48132!4f0!5f0.7820865974627469"
                    width="100%" height="450"
                    style="border:0; border-radius: 0 0 12px 12px;"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>



        </div>
    </div>
</section>
<!-- Fim Seção Informações Rápidas -->

        <!-- sobre-a-clinica -->
<section class="about-section p_relative">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
    <div class="wave-layer">
        <!-- mantido apenas efeito visual -->
    </div>

    <div class="auto-container" id="service">
        <div class="upper-content mb_10">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-block-one">
                        <div class="content-box">
                            <div class="sec-title mb_15">
                                <span class="sub-title mb_5">Nossas Especialidades</span>
                                <h2>Cuidamos da sua visão com atenção e tecnologia</h2>
                            </div>
                            <div class="text-box mb_30 pb_30">
                                <p>Com uma equipe especializada e equipamentos modernos, nossa clínica oferece um atendimento acolhedor, focado na prevenção, diagnóstico e tratamento de problemas de visão. Nosso compromisso é garantir mais qualidade de vida e conforto visual para você e sua família.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- imagem -->
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-block-one">
                        <div class="image-box">
                           
                            <figure class="image"><img src="assets/images/resource/about-1.jpg" alt="Clínica de Oftalmologia"></figure>
                            <div class="text-box">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                                <h2>+18</h2>
                                <span>Anos de experiência em saúde ocular</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="specialties-section" style="margin-top:-100px;margin-bottom:-50px">
  <div class="container">

    <div class="specialties-grid">
      <div class="speciality-card">
        <h4>Nossas Especialidades</h4>
        <ul class="list-style-one">
          <li>Córnea</li>
          <li>Catarata</li>
          <li>Glaucoma</li>
          <li>Retina</li>
          <li>Lente de Contato</li>
        </ul>
      </div>

      <div class="speciality-card">
        <h4>Nosso Propósito</h4>
        <ul class="list-style-one">
          <li>Atendimento humano e próximo</li>
          <li>Tecnologia para diagnósticos precisos</li>
          <li>Cuidado contínuo com sua visão</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<style>
:root {
  --text-font: 'Roboto', sans-serif;
  --title-font: 'Source Sans Pro', sans-serif;
  --primary-color: #1a1a1a;
  --accent-color: #0078b7;
  --bg-light: #f9fbfd;
}

/* ===== Sessão de Especialidades ===== */
.specialties-section {
  background: var(--bg-light);
  padding: 90px 40px;
  border-radius: 20px;
  font-family: var(--text-font);
}

.specialties-section .container {
  max-width: 1100px;
  margin: 0 auto;
}

/* ===== Título ===== */
.sec-title {
  text-align: center;
  margin-bottom: 40px;
}

.sec-title .sub-title {
  display: inline-block;
  font-size: 0.95rem;
  color: var(--accent-color);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-bottom: 5px;
}

.sec-title h2 {
  font-family: var(--title-font);
  font-size: 2rem;
  color: var(--primary-color);
  font-weight: 700;
}

/* ===== Texto introdutório ===== */
.text-box {
  text-align: center;
  max-width: 850px;
  margin: 0 auto 60px;
}

.text-box p {
  font-size: 1rem;
  line-height: 1.8;
  color: #444;
}

/* ===== Cards ===== */
.specialties-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
  gap: 40px;
}

.speciality-card {
  background: #fff;
  border-radius: 16px;
  padding: 30px 40px;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
  transition: all 0.3s ease;
}

.speciality-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
}

.speciality-card h4 {
  font-family: var(--title-font);
  font-size: 1.4rem;
  color: var(--accent-color);
  margin-bottom: 18px;
  border-left: 4px solid var(--accent-color);
  padding-left: 10px;
}

/* ===== Lista ===== */
.list-style-one {
  list-style: none;
  padding: 0;
  margin: 0;
}

.list-style-one li {
  position: relative;
  padding-left: 24px;
  font-size: 0.98rem;
  color: #333;
  margin-bottom: 10px;
}

.list-style-one li::before {
  content: "•";
  position: absolute;
  left: 0;
  top: 0;
  color: var(--accent-color);
  font-size: 1.3rem;
  line-height: 1;
}

/* ===== Responsivo ===== */
@media (max-width: 768px) {
  .specialties-section {
    padding: 60px 20px;
  }

  .speciality-card {
    padding: 25px;
  }
}
</style>















        

       <!-- formulário de agendamento -->
<div class="appointment-box" id="agendamento" >
    <h4>Agende sua Consulta</h4>
    <div class="form-inner">
        <form method="post" action="enviar_agendamento.php" class="clearfix">
            <div class="form-group">
                <div class="icon-box"><i class="icon-15"></i></div>
                <span>Selecione o serviço</span>
                <div class="select-box">
                <select class="selectmenu" name="servico" required>
                    <option value="" disabled selected>Selecione um serviço</option>
                    
                    <!-- Consultas -->
                    <optgroup label="Consultas">
                        <option value="Consulta oftalmológica">Consulta oftalmológica</option>
                        <option value="Consulta para diagnóstico">Consulta para diagnóstico</option>
                        <option value="Consulta para Glaucomatoso">Consulta para paciente Glaucomatoso</option>
                        <option value="Avaliação para óculos">Avaliação para óculos</option>
                        <option value="Retorno / Revisão">Retorno / Revisão</option>
                    </optgroup>

                    <!-- Exames -->
                    <optgroup label="Exames oftalmológicos">
                        <option value="OCT - Tomografia de Coerência Óptica">OCT - Tomografia de Coerência Óptica</option>
                        <option value="Campimetria computadorizada">Campimetria computadorizada</option>
                        <option value="Biometria óptica">Biometria óptica</option>
                        <option value="Topografia de córnea">Topografia de córnea</option>
                        <option value="Paquimetria de córnea">Paquimetria de córnea</option>
                        <option value="Microscopia especular">Microscopia especular</option>
                        <option value="Retinografia">Retinografia</option>
                        <option value="Mapeamento de retina">Mapeamento de retina</option>
                        <option value="Tonometria de aplanação">Tonometria de aplanação</option>
                    </optgroup>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="icon-box"><i class="icon-16"></i></div>
                <span>Data</span>
                <input type="text" name="data" placeholder="Selecione a data" id="datepicker" required>
            </div>
            <div class="form-group">
                <div class="icon-box"><i class="icon-17"></i></div>
                <span>Telefone / WhatsApp</span>
                <input type="text" name="telefone" placeholder="Adicione seu Número" title="Adicione o seu Número de Telefone ou WhatsApp para contato" required>
            </div>
            <div class="message-btn">
                <button type="submit" class="theme-btn btn-one"><span>Agendar</span></button>
            </div>
        </form>
    </div>
</div>

    </div>
</section>
<!-- fim sobre-a-clinica -->




<!-- porque-escolher-section -->
<section class="chooseus-section sec-pad p_relative"  id="especialistas">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-15.png);"></div>
    <div class="auto-container">
        
        <div class="sec-title centred mb_55">
            <span class="sub-title mb_5">Por que escolher nossa clínica</span>
            <h2>Cuidado com a visão com excelência e confiança</h2>
            <p>Com tecnologia avançada, equipe especializada e atendimento humano, proporcionamos uma experiência completa em saúde ocular.</p>
        </div>

        <div class="tabs-box">
            <div class="tab-btns tab-buttons clearfix centred mb_40" style="margin-right:0">
                <div class="tab-btn  active-btn" data-tab="#tab-1"><h3>Profissionais Qualificados </h3></div>
                <div class="tab-btn" data-tab="#tab-2"><h3>Tecnologia de Ponta</h3></div>
                <div class="tab-btn" data-tab="#tab-3"><h3>Tratamento Humanizado</h3></div>
            </div>

            <div class="tabs-content">


 <!-- AbA 3 -->
                <div class="tab active-tab" id="tab-1">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                                <div class="video-inner" style="background-image: url(assets/images/shape/doutora.png);">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column"> 
    <style>
:root {
  --text-font: 'Roboto', sans-serif;
  --title-font: 'Source Sans Pro', sans-serif;
  --primary-color: #1a1a1a;
  --accent-color: #0078b7;
}

.content-block-two {
  background: #fff;
  padding: 60px 40px;
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  max-width: 900px;
  margin: 40px auto;
  font-family: var(--text-font);
  color: var(--primary-color);
}

.content-box {
  margin-left: 20px;
}

.text-box h3 {
  font-family: var(--title-font);
  font-size: 2rem;
  color: var(--accent-color);
  margin-bottom: 10px;
}

.text-box h4 {
  font-family: var(--title-font);
  font-size: 1.4rem;
  color: var(--accent-color);
  margin-bottom: 10px;
  margin-top: 40px;
}

.text-box p {
  font-size: 1rem;
  line-height: 1.7;
  margin-bottom: 20px;
}

.list-style-one {
  list-style: none;
  padding: 0;
  margin: 30px 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px 24px;
}

.list-style-one li {
  position: relative;
  padding-left: 22px;
  font-size: 0.97rem;
  color: #333;
}

.list-style-one li::before {
  content: '✔';
  color: var(--accent-color);
  position: absolute;
  left: 0;
  top: 0;
}

@media (max-width: 768px) {
  .list-style-one {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="content-block-two">
  <div class="content-box">
    <div class="text-box">
      <h3>Dra. Eliane Macedo</h3>
      <p>
        <strong>Titular do Conselho Brasileiro de Oftalmologia (CBO)</strong><br>
        Especialista em <strong>Córnea, Doenças Externas e da Superfície Ocular</strong>.<br><br>
        Seu compromisso é oferecer diagnósticos precisos e tratamentos personalizados,
        garantindo bem-estar, segurança e confiança em cada consulta.
      </p>
    </div>

  </div>
</div>
</div>

                        </div>
                    </div>
                </div>

                <!-- AbA 1 -->
                <div class="tab" id="tab-2">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                                <div class="video-inner" style="background-image: url(assets/images/resource/video-1.jpg);">
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content-block-two">
                                    <div class="content-box ml_40">
                                        <div class="text-box">
                                            <h3>Tecnologia de Ponta</h3>
                                            <p>Utilizamos equipamentos avançados para garantir exames rápidos, precisos e confortáveis, permitindo diagnósticos confiáveis e tratamentos mais eficazes.</p>
                                        </div>
                                        <ul class="list-style-one clearfix">
                                            <li>Equipamentos de última geração</li>
                                            <li>Exames com alta precisão</li>
                                            <li>Mais conforto durante o atendimento</li>
                                            <li>Resultados rápidos e claros</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#service" class="theme-btn btn-two"><span>Conhecer serviços</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AbA 2 -->
                <div class="tab" id="tab-3">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                                <div class="video-inner" style="background-image: url(assets/images/resource/video-1.jpg);">
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content-block-two">
                                    <div class="content-box ml_40">
                                        <div class="text-box">
                                            <h3>Pacientes satisfeitos e resultados comprovados</h3>
                                            <p>Nosso maior orgulho é ver nossos pacientes enxergando melhor e vivendo com mais qualidade. Cada atendimento é feito com atenção, empatia e transparência.</p>
                                        </div>
                                        <ul class="list-style-one clearfix">
                                            <li>Alto índice de indicação</li>
                                            <li>Atendimento humanizado</li>
                                            <li>Procedimentos seguros e eficazes</li>
                                            <li>Acompanhamento pós-consulta</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>
        </div>

    </div>
</section>
<!-- fim porque-escolher -->


       <!-- agendamento-section -->
<section class="appointment-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-17.png);"></div>
    <figure class="image-layer"><img src="assets/images/resource/about-1.jpg" alt="Atendimento oftalmológico"></figure>

    <div class="outer-container clearfix">
        
        <!-- Bloco de chamada rápida -->
        <div class="left-column">
            <div class="bg-layer" style="background-image: url(assets/images/clinica_visao/clinica_visao_2.jpg);"></div>
            <div class="content-box">
                <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                <h3>Precisa agendar sua consulta de vista?</h3>
                <span><a href="tel:+5598981324929">Ligue agora: (98)8132-4929</a></span>
            </div>
        </div>

        <!-- Formulário -->
        <div class="right-column" id="contato">
            <div class="form-inner">
                <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                <h3>Entre em Contato</h3>
                <form action="enviar_contato.php" method="post"> <!-- 🔁 Ajustado -->
                    <div class="form-group">
                        <div class="icon"><i class="icon-45"></i></div>
                        <input type="text" name="nome" placeholder="Seu nome" required>
                    </div>
                    <div class="form-group">
                        <div class="icon"><i class="icon-46"></i></div>
                        <input type="text" name="whatsapp" placeholder="WhatsApp para contato" required>
                    </div>
                    <div class="form-group">
                        <div class="icon"><i class="icon-48"></i></div>
                        <textarea name="mensagem" placeholder="Deseja informar algo? (opcional)"></textarea>
                    </div>
                    <div class="message-btn">
                        <button type="submit" class="theme-btn btn-two"><span>Enviar mensagem</span></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- fim agendamento-section -->



<!-- sobre-institucional-clinica -->
<section class="about-style-two pt_140"  id="sobrenos">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box">
                        <div class="sec-title mb_15">
                            <span class="sub-title mb_5">Sobre Nós - Cuidar da visão é cuidar da vida</span>
                            <h2>Com dedicação, tecnologia e carinho pelo paciente</h2>
                        </div>
                        <div class="text-box mb_30">
                            <p>Acreditamos que cada pessoa merece um atendimento oftalmológico acolhedor, sem pressa e com total transparência no diagnóstico. Nossa missão é garantir mais qualidade de vida e conforto visual com responsabilidade e proximidade.</p>
                        </div>

                        <div class="tabs-box">
                            <div class="tab-btns tab-buttons clearfix mb_30">
                                <div class="tab-btn active-btn" data-tab="#tab-4">Nossa visão</div>
                                <div class="tab-btn" data-tab="#tab-5">Nossa missão</div>
                                <div class="tab-btn" data-tab="#tab-6">Valores</div>
                            </div>
                            <div class="tabs-content">
                                
                                <div class="tab active-tab" id="tab-4">
                                    <div class="inner-box">
                                        <p>Ser referência em saúde ocular, oferecendo atendimento humano com tecnologia de ponta e equipe especializada.</p>
                                    </div>
                                </div>

                                <div class="tab" id="tab-5">
                                    <div class="inner-box">
                                        <p>Proporcionar diagnósticos precisos e tratamentos seguros, sempre com clareza, empatia e respeito ao tempo de cada paciente.</p>
                                    </div>
                                </div>

                                <div class="tab" id="tab-6">
                                    <div class="inner-box">
                                        <p>Cuidamos de cada paciente como gostaríamos de ser cuidados: com atenção, escuta e acompanhamento próximo em todas as etapas.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- imagem institucional -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img src="assets/images/clinica_visao/clinica_visao_3.jpg" alt="Equipe oftalmológica"></figure>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- fim sobre-institucional-clinica -->

<!-- rodape -->
<footer class="main-footer" id="footer">
    <div class="widget-section p_relative">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>Sobre a Clínica</h3>
                        </div>
                        <div class="widget-content">
                            <p>Especialistas em saúde ocular, com atendimento humanizado, exames precisos e tecnologia de ponta para o cuidado completo da sua visão.</p>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.instagram.com/draelianemacedooftalmo/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_70">
                        <div class="widget-title">
                            <h3>Navegação</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="#about">Sobre nós</a></li>
                                <li><a href="#service">Especialidades</a></li>
                                <li><a href="#agendamento">Agendar consulta</a></li>
                                <li><a href="#footer">Contato</a></li>
                                <li><a href="oftalmologista-sao-luiz.php">Oftalmologista São Luiz</a></li>
                                <li><a href="doutora-eliane.php">Doutora Eliane</a></li>
                                <li><a href="blog.php">Blog</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contato</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><img src="assets/images/icons/icon-5.svg" alt="">Email: <a href="mailto:agendamento@clinicavisaoslz.com.br">agendamento@clinicavisaoslz.com.br</a></li>
                                <li><img src="assets/images/icons/icon-6.svg" alt="">Telefone: <a href="tel:+5598981324929">(98)98132-4929</a></li>
                                <li><img src="assets/images/icons/icon-7.svg" alt="">Nosso Endereço - Av. Contorno Leste Oeste, 03 COHATRAC</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-menu mt_60">
                <figure class="logo-box"><a href="#"><img src="assets/images/logo.png" alt=""></a></figure>
            </div>
        </div>
    </div>

    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="copyright">
                <p>© 2025 Clínica de Visão — Feito com 🧡 Pela <a href="https://rsweb.com.br" target="_BLANK">RS Solutions</a> - Todos os direitos reservados</p>
            </div>
        </div>
    </div>
</footer>
<!-- fim rodape -->


<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a id="WhatsApp-button" href="https://wa.me/5598981324929?text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="phoneJs" title=""><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></a></div>

        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Ir para Cima</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/pagenav.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>









<script>
  (function(){
    const modal = document.getElementById('apptModal');
    const closeBtn = document.getElementById('apptClose');
    const dontShow = document.getElementById('apptDontShow');
    const goSection = document.getElementById('apptGoSection');

    const STORAGE_KEY = 'appt_modal_hidden_v1';

    function openModal(){
      if (!modal) return;
      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');

      // trava scroll do body
      document.documentElement.style.overflow = 'hidden';
      document.body.style.overflow = 'hidden';
    }

    function closeModal(){
      if (!modal) return;
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');

      document.documentElement.style.overflow = '';
      document.body.style.overflow = '';
    }

    // Abrir ao carregar (com leve delay pra ficar premium)
    window.addEventListener('load', () => {
      const hidden = localStorage.getItem(STORAGE_KEY) === '1';
      if (!hidden) setTimeout(openModal, 450);
    });

    // Fechar no X
    closeBtn && closeBtn.addEventListener('click', closeModal);

    // Fechar clicando fora do modal
    modal && modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });

    // Fechar no ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
    });

    // Não mostrar novamente
    dontShow && dontShow.addEventListener('change', () => {
      if (dontShow.checked) localStorage.setItem(STORAGE_KEY, '1');
      else localStorage.removeItem(STORAGE_KEY);
    });

    // Ir para seção e fechar
    goSection && goSection.addEventListener('click', (e) => {
      e.preventDefault();
      closeModal();
      const target = document.querySelector('#agendamento');
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      // Ajuste: se seu header é fixo, você pode compensar com CSS scroll-margin
    });

  })();
</script>

<script>

const selectBox = document.querySelector("#servicoSelect");
const selected = selectBox.querySelector(".custom-select-selected");
const options = selectBox.querySelector(".custom-select-options");
const hiddenInput = document.querySelector("#servicoInput");

selected.addEventListener("click", function(){
  options.style.display =
    options.style.display === "block" ? "none" : "block";
});

document.querySelectorAll("#servicoSelect .custom-option").forEach(option => {

  option.addEventListener("click", function(){

    const value = this.innerText;

    selected.childNodes[0].nodeValue = value + " ";

    hiddenInput.value = value;

    options.style.display = "none";

  });

});

document.addEventListener("click", function(e){
  if(!selectBox.contains(e.target)){
    options.style.display = "none";
  }
});

</script>

<script>
  $(function () {
    // Força pt-BR e formato correto
    $.datepicker.setDefaults({
      dateFormat: "dd/mm/yy"
    });

    $("#datepicker").datepicker({
      dateFormat: "dd/mm/yy"
    });
  });
</script>
<script>

document.querySelectorAll(".abrirAgendamento").forEach(btn => {

  btn.addEventListener("click", function(e){

    e.preventDefault();

    const modal = document.getElementById("apptModal");

    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");

    document.body.style.overflow = "hidden";

  });

});

</script>

</body><!-- End of .page_wrapper -->
</html>

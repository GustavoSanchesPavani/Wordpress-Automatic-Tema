<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- CABEÇALHO TOPO (Aparece apenas em Desktop via CSS) -->
    <div class="cabecalho-topo">
        <div class="barra-info">
            <div class="container conteudo-barra-info">
                <div class="info-items">
                    <span><i class="fas fa-map-marker-alt"></i> Peruíbe, SP</span>
                    <span>|</span>
                    <span><i class="fas fa-clock"></i> Seg - Sex: 08h às 18h</span>
                </div>
                <div>Automatic - Serviços Automotivos</div>
            </div>
        </div>

        <div class="container area-principal-topo">
            <a href="#" class="logo-principal">
                <img src="https://herehost.com.br/automatic/wp-content/uploads/2025/11/logo-automatic-1-Photoroom-e1764026376111.png" alt="Logo Automatic">
                <div class="logo-texto">
                    <h1>Automatic</h1>
                    <span>Mecânica Premium</span>
                </div>
            </a>

            <div class="contatos-header">
                <div class="box-telefone">
                    <p>Precisa de ajuda?</p>
                    <p><i class="fab fa-whatsapp zap-icon"></i> (13) 99198-8709</p>
                </div>
                <a href="https://wa.me/5513991988709" class="btn-orcamento">Orçamento</a>
            </div>
        </div>
    </div>

    <!-- NAVEGAÇÃO FIXA (STICKY) -->
    <header id="nav-fixa" class="nav-fixa">
        <div class="container conteudo-nav">
             <!-- Menu Desktop -->
             <nav class="menu-desktop">
                <a href="#inicio">Início</a>
                <a href="#servicos">Problemas Comuns</a>
                <a href="#sobre">Sobre Nós</a>
                <a href="#depoimentos">Depoimentos</a>
                <a href="#contato">Contato</a>
            </nav>

            <!-- Logo do Menu (Sempre visível no mobile, aparece no scroll no desktop) -->
            <a href="#" id="marca-sticky" class="marca-sticky">
                <div class="marca-sticky-texto">
                    <span class="st-titulo">Automatic</span>
                    <span class="st-sub">Mecânica Premium</span>
                </div>
                <img src="https://herehost.com.br/automatic/wp-content/uploads/2025/11/logo-automatic-1-Photoroom-e1764026376111.png" alt="Logo Pequena">
            </a>

            <!-- Botão Menu Mobile -->
            <button id="btn-mobile" class="btn-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Dropdown Mobile -->
        <div id="menu-mobile" class="menu-mobile-dropdown oculto">
            <a href="#inicio">Início</a>
            <a href="#servicos">Problemas Comuns</a>
            <a href="#sobre">Sobre Nós</a>
            <a href="#depoimentos">Depoimentos</a>
            <a href="#contato">Contato</a>
        </div>
    </header>
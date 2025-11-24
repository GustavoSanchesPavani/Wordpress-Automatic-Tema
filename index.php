<?php get_header(); ?>

    <main>
        <!-- SEÇÃO HEROI -->
        <section id="inicio" class="secao-heroi">
            <div class="fundo-heroi">
                <!-- IMAGEM 1: Fundo da seção herói (carro esportivo) -->
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1920&auto=format&fit=crop" alt="Carro Esportivo Oficina">
            </div>
            <div class="overlay"></div>
            
            <div class="container conteudo-heroi">
                <div class="heroi-texto">
                    <div class="selo">
                        <i class="fas fa-check-circle"></i> Referência em Peruíbe
                    </div>
                    <h1 class="titulo-grande">
                        Automatic<br/>
                        <span>Mecânica Premium</span>
                    </h1>
                    <p class="descricao-heroi">
                        Serviços de alta qualidade e atendimento transparente para seu veículo. Especialistas em nacionais e importados.
                    </p>
                    <div class="botoes-heroi">
                        <a href="https://wa.me/5513991988709" class="btn-cta">
                            <i class="fab fa-whatsapp"></i> Fale com um Especialista
                        </a>
                        <a href="#servicos" class="btn-outline">
                            <i class="fas fa-arrow-down"></i> Conheça os Serviços
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO SERVIÇOS -->
        <section id="servicos" class="secao-padrao bg-claro">
            <div class="container">
                <div class="cabecalho-secao">
                    <span class="subtitulo">Soluções Completas</span>
                    <h2 class="titulo-secao">Serviços & Problemas Comuns</h2>
                    <div class="divisor"></div>
                </div>

                <div class="grid-servicos">
                    <!-- Card 1 -->
                    <div class="card-servico">
                         <div class="card-img">
                            <!-- IMAGEM 2: Card Manutenção Preventiva -->
                            <img src="https://images.unsplash.com/photo-1632823471565-1ecdf5c6d7f7?q=80&w=800&auto=format&fit=crop" alt="Manutenção">
                            <div class="card-overlay"><i class="fas fa-clipboard-check"></i></div>
                        </div>
                        <div class="card-corpo">
                            <h3>Manutenção Preventiva</h3>
                            <p>Inspeções periódicas para evitar problemas futuros e garantir a segurança do seu carro.</p>
                            <a href="https://wa.me/5513991988709" class="link-card">Agendar Revisão <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 (Destaque) -->
                    <div class="card-servico destaque">
                        <div class="badge-destaque">Especialidade</div>
                         <div class="card-img">
                            <!-- IMAGEM 3: Card Reparos Especializados (scanner/diagnóstico) -->
                            <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=800&auto=format&fit=crop" alt="Scanner">
                             <div class="card-overlay"><i class="fas fa-wrench"></i></div>
                        </div>
                        <div class="card-corpo">
                            <h3>Reparos Especializados</h3>
                            <p>Diagnósticos precisos e soluções técnicas para diferentes tipos de reparos automotivos.</p>
                            <a href="https://wa.me/5513991988709" class="link-card">Solicitar Diagnóstico <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card-servico">
                         <div class="card-img">
                            <!-- IMAGEM 4: Card Transmissão Automática (câmbio) -->
                            <img src="https://images.unsplash.com/photo-1507136566006-cfc505b114fc?q=80&w=800&auto=format&fit=crop" alt="Câmbio">
                             <div class="card-overlay"><i class="fas fa-cogs"></i></div>
                        </div>
                        <div class="card-corpo">
                            <h3>Transmissão Automática</h3>
                            <p>Diagnóstico, manutenção e reparo com foco em câmbios automáticos, nacionais e importados.</p>
                            <a href="https://wa.me/5513991988709" class="link-card">Falar com Especialista <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALERIA -->
        <section class="secao-padrao bg-branco">
             <div class="container">
                <div class="topo-galeria">
                    <div>
                        <span class="subtitulo">Nosso Trabalho</span>
                        <h2 class="titulo-secao" style="margin-top: 0;">Oficina em Ação</h2>
                    </div>
                    <a href="https://www.instagram.com/mecanica_automatic/" target="_blank" class="link-insta">
                        Ver mais no Instagram <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <div class="grid-galeria">
                    <div class="item-galeria span-2-row">
                        <!-- IMAGEM 5: Galeria - Mecânico trabalhando (imagem grande) -->
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=800&auto=format&fit=crop" alt="Mecânico">
                         <div class="overlay-galeria"><span>Tecnologia de Ponta</span></div>
                    </div>
                     <!-- IMAGEM 6: Galeria - Ferramentas -->
                     <div class="item-galeria"><img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=800&auto=format&fit=crop" alt="Ferramentas"></div>
                     <!-- IMAGEM 7: Galeria - Motor -->
                     <div class="item-galeria"><img src="https://images.unsplash.com/photo-1626668893632-6f3d4466d22f?q=80&w=800&auto=format&fit=crop" alt="Motor"></div>
                    <!-- IMAGEM 8: Galeria - Elevador automotivo (imagem larga) -->
                    <div class="item-galeria span-2-col"><img src="https://images.unsplash.com/photo-1494905998402-395d579af36f?q=80&w=800&auto=format&fit=crop" alt="Elevador"></div>
                </div>
             </div>
        </section>

        <!-- SOBRE NÓS -->
        <section id="sobre" class="secao-padrao bg-branco">
            <div class="container sobre-container">
                <div class="sobre-img-box">
                    <div class="sobre-img-bg"></div>
                    <!-- IMAGEM 9: Seção Sobre - Equipe/profissionais -->
                    <img src="https://images.unsplash.com/photo-1613214149922-f1809c99e35f?q=80&w=800&auto=format&fit=crop" alt="Equipe">
                </div>
                <div class="texto-sobre">
                    <span class="subtitulo">Quem Somos</span>
                    <h2 class="titulo-secao" style="margin-top: 0.5rem;">Sobre a Automatic</h2>
                    <p class="destaque-txt">A Automatic nasceu para entregar excelência técnica e atendimento honesto na área de câmbio automático.</p>
                    <p>Com <strong>duas unidades em Peruíbe</strong>, a oficina combina equipe capacitada, estrutura atualizada e comunicação direta com o cliente, atendendo toda a região da Baixada Santista.</p>
                    <p>Trabalhamos com veículos nacionais e importados das principais marcas do mercado.</p>
                    
                    <div class="tags">
                        <a href="https://www.google.com/maps/dir//Av.+Padre+Anchieta,+4194+-+Nova+Peruíbe,+Peruíbe+-+SP,+11772-032" target="_blank" class="tag"><i class="fas fa-map-marker-alt"></i> Unidade 1 - Peruíbe</a>
                        <a href="https://www.google.com/maps/dir//Av.+Padre+Anchieta,+4254+-+Nova+Peruíbe,+Peruíbe+-+SP,+11772-032" target="_blank" class="tag"><i class="fas fa-map-marker-alt"></i> Unidade 2 - Peruíbe</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS -->
        <section class="secao-padrao bg-claro">
            <div class="container">
                <div class="cabecalho-secao">
                    <span class="subtitulo">Por que nos escolher</span>
                    <h2 class="titulo-secao">Nossos Diferenciais</h2>
                </div>

                <div class="grid-diferenciais">
                    <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-laptop-medical"></i></div>
                        <div class="dif-texto">
                            <h3>Diagnóstico Preciso</h3>
                            <p>Scanner profissional de última geração.</p>
                        </div>
                    </div>
                    <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-cogs"></i></div>
                        <div class="dif-texto">
                            <h3>Especialização</h3>
                            <p>Foco total em câmbio automático.</p>
                        </div>
                    </div>
                    <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-heart"></i></div>
                        <div class="dif-texto">
                            <h3>Humanizado</h3>
                            <p>Contato direto e respeitoso.</p>
                        </div>
                    </div>
                    <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-video"></i></div>
                        <div class="dif-texto">
                            <h3>Transparência</h3>
                            <p>Envio de fotos e vídeos em tempo real.</p>
                        </div>
                    </div>
                    <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-users"></i></div>
                        <div class="dif-texto">
                            <h3>Confiança</h3>
                            <p>Equipe apaixonada que gera conteúdo.</p>
                        </div>
                    </div>
                     <div class="diferencial-item">
                        <div class="icon-box"><i class="fas fa-check"></i></div>
                        <div class="dif-texto">
                            <h3>Garantia</h3>
                            <p>Serviços com garantia de qualidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DEPOIMENTOS (TRUSTINDEX) -->
        <section id="depoimentos" class="secao-padrao bg-branco">
            <div class="container depoimentos-wrapper">
                <div class="google-header">
                    <div class="google-bg">
                        <!-- IMAGEM 10: Logo do Google (pequena) -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Logo" style="width: 1.5rem;">
                    </div>
                    <span style="font-weight: bold; color: #4b5563;">O que nossos clientes dizem</span>
                </div>
                
                <div class="trustindex-box">
                    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
                </div>
            </div>
        </section>
        
    </main>

<?php get_footer(); ?>
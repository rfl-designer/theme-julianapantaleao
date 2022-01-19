<?php
/*
Template Name: Home Page
*/

get_header() ?>

<div class="s-hero">
    <div class="container-hero">
        <h2>
            Desenvolva a harmonia do seu lar Através de uma Comunicação Assertiva
        </h2>

        <button type="button">
            <a href="#contato">Eu preciso!
        </button>
    </div>
</div>
</div>
<div class="s-problem">
    <div class="problem-text">
        <h2>Conheça você mesmo e o seu filho</h2>
        <p>Quando me tornei mãe, me vi perdida em um turbilhão de emoções, sem saber como lidar com o aspecto emocional do meu filho.
        </p>
        <p>
            Acredito que um dos maiores motivos de problemas no lar é a comunicação conflituosa, com falta de diálogo e repleta de gritos. Os pais não sabem que o perfil comportamental do filho exige uma comunicação específica.
        </p>
        <p>
            Por isso, busquei conhecimento em gestão emocional. Para me autoconhecer e saber lidar com as emoções do meu filho.
        </p>
    </div>
    <div class="problem-gallery">
        <div class="gallery-one-left">
            <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryOne-image1.png" alt="" class="image-1" />
            <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryOne-image2.png" alt="" class="image-2" />
        </div>

        <div class="gallery-one-right">
            <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryOne-image3.png" alt="" class="image-3" />
            <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryOne-image4.png" alt="" class="image-4" />
        </div>
    </div>
</div>
<div class="s-benefits">
    <div class="container-benefits">
        <div class="benefits-gallery">
            <div class="gallery-two-left">
                <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryTwo-image1.png" alt="" class="image-1" />
                <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryTwo-image2.png" alt="" class="image-2" />
            </div>

            <div class="gallery-two-right">
                <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryTwo-image3.png" alt="" class="image-3" />
                <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/galleryTwo-image4.png" alt="" class="image-4" />
            </div>
        </div>
        <div class="benefits-text">
            <h2>
                Todo aprendizado valeu a pena
            </h2>
            <p>Hoje, coloco todo meu conhecimento em prática e sigo aprendendo com as mudanças do dia a dia.</p>
            <p>Me sinto plenamente conectada com o meu filho, conhecendo o seu perfil comportamental e estabelecendo uma comunicação clara e harmoniosa.</p>
            <p>Percebo que os aprendizados colocados em prática trouxeram diversos benefícios, tanto para mim quanto para o meu filho.</p>
            <p>Ele tem sido obediente e muito cooperativo em todas as atividades.</p>

            <button><a href="#contato">Quero aprender mais sobre meu filho!</a></button>
        </div>
    </div>
</div>
<div class="s-quem-sou" id="quem-sou">
    <div class="quem-sou-text">
        <h2>
            Hoje eu quero te ajudar!
        </h2>
        <p>
            Prezando por embasamento científico, me tornei Coach em Performance Familiar, tendo formações na área de análise de perfil comportamental Cis Assessment Adulto e Mini Mega Assessment Infantil.
        </p>
        <p>
            Minha missão é mostrar o caminho para que pais eduquem seus filhos livres de crenças negativas e vícios emocionais.
        </p>
    </div>
    <div class="quem-sou-image">
        <img src="https://julianapantaleao.com.br/wp-content/themes/agd-theme/src/assets/images/juliana-quemSomos.png" alt="">
    </div>
</div>

<div class="s-team-coach" id="servicos">
    <div class="container-team-coach">
        <div class="text-team-coach">
            <h2>ExtraordinárioS</h2>
            <span class="traco-hero"></span>
            <p>Team Coach</p>
        </div>
        <div class="btn-team-coach">
            <button><a href="/extraordinarios">Compre aqui</a></button>
        </div>
    </div>
</div>
<!--
<div class="s-servicos">
    <h2>Desenvolvimento Pessoal</h2>
    <div class="container-servicos">
        <div class="coach-grupo">
            <img src="<?php echo get_bloginfo('template_url') ?>/src/assets/thumbnail-coachEmGrupo.png" alt="">
            <h3>Coach em Grupo Extraordinários</h3>
            <p>O Team Coaching Life é um programa desenvolvido em 10 encontros semanais podendo ter
                intervalos de 15 dias (10 sessões), para pessoas que buscam alta performance em todas as áreas da
                vida.</p>
            <a href="#">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="perfil-comportamental">
            <img src="<?php echo get_bloginfo('template_url') ?>/src/assets/thumbnail-perfilComportamental.png" alt="">
            <h3>Perfil Comportamental</h3>
            <p>O Team Coaching Life é um programa desenvolvido em 10 encontros semanais podendo ter
                intervalos de 15 dias (10 sessões), para pessoas que buscam alta performance em todas as áreas da
                vida.</p>
            <a href="#">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>
-->
<div class="s-contato" id="contato">
    <div class="form-contato">
        <h2>Entramos em Contato com Você</h2>
        <?php echo do_shortcode('[contact-form-7 id="13" title="form-home"]'); ?>
    </div>
</div>
<?php get_footer() ?>
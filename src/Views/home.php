<?php
require_once '../../vendor/autoload.php';
require_once './Layout/cabecalho.php';
?>

<main>
    <section class="text-center container m-0">
        <div class="row">
            <div class="col-md-6 col-sm-12 backgroundDivHome">

                <div style="height: auto;">
                    <div class="row mx-md-5 px-md-4">
                        <div class="col-12 p-0">
                            <p class="letraAmarela fw-semibold text-start subtitulo">Olá, Sou</p>
                        </div>
                    </div>
                    <div class="row mx-md-5 px-md-4">
                        <div class="col-12 p-0">
                            <p class="text-start fw-semibold textoClaro titulo">Caio Henrique</p>
                        </div>
                    </div>
                    <div class="row mx-md-5 px-md-4">
                        <div class="col-12 p-0">
                            <p class="text-start fw-semibold textoClaro titulo">Natal</p>
                        </div>
                    </div>
                    <div class="row mx-md-5 px-md-4">
                        <div class="col-12 p-0">
                            <p class="text-start fs-4 fw-normal textoClaro">Empreendedor / Desenvolvedor</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 p-0" id="divImagemUm">
            </div>
        </div>
    </section>
    <section class="text-center container py-5" style="background-color: rgb(241, 240, 240);">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 mt-md-5">
                <h1 class="fw-bold">Sobre Mim</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-sm-12 mt-md-4 text-center">
                <p>Sou um parágrafo. Clique para editar e adicionar o seu texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar o seu próprio conteúdo e trocar fontes. Sinta-se à vontade para arrastar e soltar em qualquer lugar da página. Sou um ótimo espaço para contar um pouco mais sobre você.</p>
                <p>Sou um parágrafo. Clique para editar e adicionar o seu texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar o seu próprio conteúdo e trocar fontes. Sinta-se à vontade para arrastar e soltar em qualquer lugar da página. Sou um ótimo espaço para contar um pouco mais sobre você.</p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-sm-12 mt-md-4 text-center mb-5">
                <a  class="btn btn-warning" href="https://www.linkedin.com/in/caiohn20/" target="_blank">Ver currículo completo</a>
            </div>
        </div>
    </section>
    <section class="text-center container py-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 my-md-5">
                <h1 class="fw-bold tituloSessao mb-2">Fotos</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 mt-md-4 text-center p-0" id="divImagemDois">
                <img src="../assets/imgs/foto2.jpg" alt="Foto1">
            </div>
            <div class="col-md-6 col-sm-12 mt-md-4 text-center p-0" id="divImagemTres">
                <img src="../assets/imgs/foto3.jpg" alt="Foto2">
            </div>
        </div>
    </section>
    <section class="text-center container">
        <div class="row justify-content-center">
        </div>
    </section>
</main>

<?php
require_once './Layout/rodape.php';
?>
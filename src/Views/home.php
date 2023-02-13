<?php
require_once '../../vendor/autoload.php';
require_once './Layout/cabecalho.php';
?>

<main>
    <section class="text-center container m-0" id="inicio">
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
    <section class="text-center container py-5" style="background-color: rgb(241, 240, 240);" id="sobremim">
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
                <a class="btn btn-warning" href="https://www.linkedin.com/in/caiohn20/" target="_blank">Ver currículo completo</a>
            </div>
        </div>
    </section>
    <section class="text-center container py-5" id="clienteprojetos">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 my-md-5">
                <h1 class="fw-bold tituloSessao mb-2">Clientes e Projetos</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 text-center">
                <div class="card" style="border: 0;">
                    <div class="card-body text-start ps-0 mb-5">
                        <div class="row">
                            <div class="col-12">
                                <p class="m-0 fw-semibold bordaEsquerdaAzul"><span class="ms-4 fs-4">Grupo Maxpro Educacional</span></p>
                                <p class="m-0 bordaEsquerdaAzul"><span class="ms-4">ProCorp - Gestão de Redes</span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p class="ms-4">Sistema é usado para gerenciar a parte financeira, educacional e de cadastros dos alunos da rede Micropro. Utilização de PHP Orientado a Objeto, bem como o emprego dos padrões Factory e DAO. Emprego da arquitetura MVC nos sistemas desenvolvidos. Utilização de Jquery e AJAX. Utilização da linguagem de estilos CSS, com o auxílio do framework bootstrap. Manutenção e manipulação de banco de dados MySQL em Linux. Emissão de notas ficais nas matrículas e dos produtos vendidos pela empresa através de consultas via API web services REST.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <div class="card" style="border: 0;">
                    <div class="card-body text-start ps-0">
                        <div class="row">
                            <div class="col-12">
                                <p class="m-0 fw-semibold bordaEsquerdaAzul"><span class="ms-4 fs-4">FSID - Portal Cliente</span></p>
                                <p class="m-0 bordaEsquerdaAzul"><span class="ms-4">Foursys / Volkswagen Brasil</span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p class="ms-4">O FSID é uma autenticação universal de dois fatores que permite ao cliente o acesso a todos os sistemas da Volkswagen Brasil que possuam essa inteligência. Utilizamos o pacote keycloak para a autenticação e garantia de segurança dos sistemas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <div class="card" style="border: 0;">
                    <div class="card-body text-start">
                        <div class="row">
                            <div class="col-12">
                                <p class="m-0 fw-semibold bordaEsquerdaAzul"><span class="ms-4 fs-4">QrCode</span></p>
                                <p class="m-0 bordaEsquerdaAzul"><span class="ms-4">Foursys / Volkswagen Brasil</span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p class="ms-4">API capaz de gerar QR-Code a partir de uma string e entregar uma imagem que represente esse QR-Code para aplicação onde for necessário.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center container py-5" style="background-color: rgb(241, 240, 240);" id="contato">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 my-md-5">
                <h1 class="fw-bold tituloSessao mb-2">Contato</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-12">
                <p class="text-start fw-semibold fs-5">Telefone</p>
                <p class="text-start fs-5">(19) 99787-7712</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p class="text-start fw-semibold fs-5">Email</p>
                <p class="text-start fs-5">caio.hn20@gmail.com</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p class="text-start fw-semibold fs-5">Redes Sociais</p>
                <div class="row justify-content-center">
                    <div class="col text-start">
                        <a href="https://instagram.com/caiohn20?igshid=YzgyMTM2MGM=" target="_blank" class="btn"><i class="fa-brands fa-instagram" style="scale: 2;"></i></a>
                    </div>
                    <div class="col text-start">
                        <a href="https://www.facebook.com/caio.hn20?mibextid=ZbWKwL" target="_blank" class="btn"><i class="fa-brands fa-facebook" style="scale: 2;"></i></a>
                    </div>
                    <div class="col text-start">
                        <a href="https://github.com/caiohn20" target="_blank" class="btn"><i class="fa-brands fa-github" style="scale: 2;"></i></a>
                    </div>
                    <div class="col text-start">
                        <a href="mailto:caio.hn20@gmail.com" target="_blank" class="btn"><i class="fa-regular fa-envelope" style="scale: 2;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once './Layout/rodape.php';
?>
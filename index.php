<!DOCTYPE html>
<html>
<head>
<link href="estilo/fontawesome.min.css" rel="stylesheet"> <!--load all styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsabilidade, fazendo que sirva para todas as telas -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="estilo/style.css" rel="stylesheet"/> <!-- stylesheet quer dizer que estaremos utilizando folha de estilo (para estilização do site)-->
    <meta charset="UTF-8"> <!-- Evita que haja conflito de caracteres especiais na página-->
    <meta name="description" content="Descrição do meu website"> <!-- Google saber nossa descrição do nosso site-->
    <meta name="keywords" content="palavras-chave,do,meu,site"> <!-- Serve para escolher palavras chave do meu site-->
    <title>Projeto 01</title>
</head>
<body>
    <header> <!-- Server para ser o TOPO do site-->
        <div class="center">
        <div class="logo">Logomarca</div> <!-- LOGO--> 
        <!-- Div serve para facilitar no css-->
        <nav class="desktop">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="Sobre">Sobre</a></li>
                <li><a href="Serviços">Serviços</a></li>
                <li><a href="Contato">Contato</a></li>
            </ul>        
        </nav>
        <nav class="mobile">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="Sobre">Sobre</a></li>
                <li><a href="Serviços">Serviços</a></li>
                <li><a href="Contato">Contato</a></li>
            </ul>        
        </nav>
        </div><!-- Center--> 
    </header>

    <section class="banner-principal"> <!-- Sessões-->
        <div class="center"> 
        <form>
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="text" name="email" required>
            <input type="submit" name="acao" value="Cadastrar" required>
        </form>
        </div><!-- Center-->
    </section> <!-- banner-principal-->

    <section class="Descricao-autor">
        <div class="center">
        <div class="w50">
            <h2>Jhonathas S. V. da Fonseca</h2>
            <p>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
            tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
            a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
            etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
            <p>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
            tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
            a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
            etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula.</p>
            <p>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
            tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
            a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
            etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
        </div> <!-- w50  -->  <!-- boot css, criar nosso própio sistema css para modificar da forma que quisermos (w50 siginifica que vai pegar 50% da imagem--> 
        </div><!-- Center (Server para colocar uma certa limitação na tela)--> 
    </section>    
    
    <section>
        <div class="w50">
            <!-- pegar imagem depois--> 
            <img src="Imagens/Eus.png">
        </div>
    </section><!-- Descrição autor--> 

    <section class="Especialidades"><!-- Especialidades--> 
        <h2 class="title">Especialidades</h2>
        <div class="center"><!-- Contexto--> 
        <div class="box-especialidade"> 
                <h3>Iconi1</h3>
                <h3>CSS3</h3>
                Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
        </div><!-- box-especialidade--> 
        <div class="box-especialidade"> 
                <h3<i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h3>HTML5</h3>
                Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
        </div><!-- box-especialidade--> 
        <div class="box-especialidade"> 
                <h3>Iconi3</h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
        </div><!-- box-especialidade--> 
        </div><!-- Center--> 
    </section>

    <section class="bonus">
        <div class="center">
            <div class="w50">
            <h2 class="title">Depoimentos</h2>
                <div class="depoimento-sigle">
                    <p class="depoimento-descricao">Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
                <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- Depoimento-single--> 
                <div class="depoimento-sigle">
                    <p class="depoimento-descricao">Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
                <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- Depoimento-single--> 
                <div class="depoimento-sigle">
                    <p class="depoimento-descricao">Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula. </p>
                <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- Depoimento-single--> 
            </div><!-- w50-->
            <div class="w50">
            <h2 class="title">Serviços</h2>
                <div class="servicos">
                <ul>
                    <li>>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula.</li>
                    <li>>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula.</li>
                    <li>>Lorem ipsum lacinia at dictumst volutpat id libero semper commodo quis litora, tellus quisque id faucibus erat phasellus vestibulum hendrerit metus aenean. 
                    tellus lorem diam nisi vel aliquam maecenas class massa molestie, dictum conubia ipsum feugiat vivamus dui aenean vitae consectetur, urna platea vivamus sed id consequat nisl urna. 
                    a torquent fusce himenaeos vulputate curae platea lacus, ultrices nisi semper tellus suspendisse ultrices, vehicula vel dictumst nam nisi pellentesque platea, phasellus primis sapien nulla a. 
                    etiam vel dui nibh aliquam blandit arcu pretium condimentum duis at fusce aptent, rhoncus in pharetra enim nisi proin dolor quisque porta vehicula.</li>
                </ul>
                </div><!--servicos-->
            </div><!-- w50--> 
        </div><!-- Center-->
    </section><!-- Bonus-->
    
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center--> 
    </footer><!--Rodapé--> 
</body>
</html>
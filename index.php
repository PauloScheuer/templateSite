<html>
    <head>
        <meta charset="UTF-8">
        <title>Nome do site</title>
        <style>
            html{
                height: 100%;
                overflow: auto;
            }
            body{
                color: #f4f4f4;
                margin: 0;
                padding: 0;
                min-height: 100%;
                font-family: sans-serif;
            }
            header{
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            header h1 {
                color: white;
                margin-top: 70px;
                font-size: 80px;
            }
            header p {
                font-size: 40px;
                color: white;
            }
            header, header:before{
                background: 50% 50% / cover;
            }
            header::before{
                bottom: 0;
                content: "";
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                display: block;
                background-image: url(imagens/fundo.jpg);
                background-size: cover;
                z-index: -1;
                min-height: 100vh;
                filter: brightness(60%);
            }
            header * { 
                font-weight: normal;
                letter-spacing: 0.2em;
                text-align: center;
                margin: 0;
                padding: 1em 0;
            }  
            #exm {
                height: auto;
                width: 100%;
                position: absolute;
                font-size: 30px;
                color: black;
                background: #f4f4f4;
                text-align: center;
            }
            .links{
                font-size: 22px;
                position: fixed;
                top:0px;
                left: 0px;
                background: #f4f4f4;
                width: 100%;
                z-index: 3;
                display: flex;
                justify-content: flex-end;
                box-shadow: 0 0 10px 0 black;
                border-radius: 0 0 4px 4px;
            }
            .links a{
                border-bottom: 0px solid #373737;
                padding: 10px;
                cursor: pointer;
                margin-right: 30px;
                letter-spacing: 0;
                width: 150px;
            }
            .links a, .links a:link, .links a:visited{
                color: #373737;
                text-decoration: none;
            }
            .btnUp{
                background-color: #f4f4f4;
                position: fixed;
                right:30px;
                bottom: 30px;
                border-radius: 50px;
                border: 2px solid #373737;
                cursor: pointer;
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 3;
            }
            .btnUp:hover{
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }
            .btnUp img{
                margin-bottom: 4px;
                transform: scale(2);
            }

            @media only screen and (max-device-width: 900px) {
                .links{
                    font-size: 40px;
                    display: flex;
                }

            }
        </style>
    </head>
    <body>
        <a id="anchor0"></a>
        <a onclick="go('#anchor0')" class="btnUp">
            <img src="imagens/chevron-up.svg">
        </a>
        <header>
            <div class="links">
                <a onclick="go('#conteudoSobre')">Quem somos?</a>
                <a onclick="go('#conteudoCarrossel')">Fotos</a>
                <a onclick="go('#conteudoLocal')">Onde estamos</a>
                <a onclick="go('#conteudoContato')">Contato</a>
            </div>
            <h1>Nome do site</h1>
            <p>Breve descrição</p>
        </header>
        <section id="exm">
            <?php
            include './sobre.html';
            include './carrossel.html';
            include './local.html';
            include './contato.html';
            include './rodape.html';
            ?>
        </section>
        
    </body>
    <script type="text/javascript" src="js/main.js"></script>
</html>

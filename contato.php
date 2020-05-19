<style>
    #conteudoContato{
        color: #373737;
        text-align: center;
        font-family: sans-serif;
        width: auto;
        max-width: 100%;
        text-align: justify;
        padding: 20px 100px 20px 100px;
        overflow: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    #conteudoContato p{
        font-size: 22px;
    }
    #conteudoContato h1{
        margin-top: -100px;
        font-size: 45px;
    }
    .btnRede{
        float: left;
        border-radius: 50%;
        padding: 20px;
        margin: 0 10px 0 10px;
        text-align: center;
    }
    .btnRede img{
        vertical-align: middle;
        margin: 0;
    }
    .face{
        background-color: #3b5998;
    }
    .insta{
        background-image: linear-gradient(to bottom right,yellow,purple);
    }
    .twitter{
        background-color:  #00acee;
    }
    @media only screen and (max-device-width: 900px) {
        #conteudoContato p{
            font-size: 40px;
        }
        #conteudoContato{
            height: 60vh;
        }
        .btnRede{
            transform: scale(2);
        }
        #conteudoContato section{
           margin-top: 100px; 
           width: 80%;
           display: flex;
           justify-content: space-between;
        }
    }
</style>
<a id="contato"></a>
<div id="conteudoContato">
    <h1>Contato</h1>
    <p>Email: xxxxxxxx@xxxx.xxxx</p>
    <p>Telefone: (xx) xxxxx-xxxx</p>
    <p>Redes sociais:</p>
    <section>
    <a href="https://www.facebook.com" class="btnRede face"><img src="imagens/facebook.png"></a>
    <a href="https://www.instagram.com" class="btnRede insta"><img src="imagens/instagram.png"></a>
    <a href="https://twitter.com" class="btnRede twitter"><img src="imagens/twitter.png"></a>
    </section>
</div>

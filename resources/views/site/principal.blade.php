<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão</title>
    <meta charset="utf-8">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        p,
        span {
            color: #ffffff;
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
        }

        h2 {
            color: #333333;
            font-size: 22px;
        }

        option {
            color: black;
        }

        input,
        select,
        textarea,
        button {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0px 10px 0px;
            box-sizing: border-box;
            background-color: transparent;
            color: #ffffff;
        }


        .borda-branca {
            border: none;
            border-radius: 0px;
            border-bottom: solid 1px #fff;
        }
        .sem-borda{
            border: none
        }

        .borda-preta {
            border: solid 1px #333;

        }

        button {
            background-color: #406E8E;
            cursor: pointer;
            color: #ffffff;
            transition: all 0.2s ease;
        }

        button:hover {
            background-color: #8EA8C3;
            transition: all 0.2s ease;
        }

        ::placeholder {
            color: #ffffff;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #ffffff;
        }

        ::-ms-input-placeholder {
            color: #ffffff;
        }

        .topo {
            width: 100%;
            position: relative;
            padding: 20px 0px 10px 0px;
        }

        .logo {
            width: 50px;
            float: left;
            margin-left: 40px;
        }

        .logo img {
            width: 50px;
        }

        .menu {
            float: right;
            margin-right: 40px;

        }

        .menu li {
            display: inline;
            float: left;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;

        }

        .menu a {
            text-decoration: none;
            padding: 14px 16px;
            color: #CBF7ED;
        }

        .menu a:hover {
            color: #ffffff;
        }

        .conteudo-destaque {
            width: 100%;
            height: 100%;
            min-height: 800px;
        }

        .esquerda {
            float: left;
            background-color: #161925;
            width: 70%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .esquerda h1 {
            font-size: 3.5em
        }

        .direita {
            float: right;
            background-color: #23395B;
            width: 30%;
            height: 100%;
        }

        .informacoes {
            border: 3px solid white;
            padding: 30px;
        }

        .informacoes,
        .contato {
            margin: 100px 40px 40px 40px;
        }

        .contato-principal {
            margin: 0px 60px 60px 40px;
        }

        .chamada {
            margin-top: 30px;
            margin-left: 20px;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            gap: 10px
        }

        .chamada img {
            width: 20px;
        }

        .video {
            margin: 40px;
        }

        .video img {
            max-width: 100%;
            max-height: 100%;
        }

        .conteudo-pagina {
            width: 100%;
            height: 100%;
            text-align: center;
            margin-bottom: 100px;
        }

        .titulo-pagina {
            padding: 100px 0px 60px 0px;
            background-color: #2a9ee2;
            text-align: center;
        }

        .informacao-pagina {
            text-align: center;
            margin-top: 30px;
        }

        .informacao-pagina p {
            color: #333;
        }

        .rodape {
            width: 100%;
        }

        .redes-sociais,
        .area-contato,
        .localizacao {
            width: 33.333%;
            border-top: solid 1px #ccc;
            float: left;
            text-align: center;
            background-color: #f8f8f8;
            height: 250px;
        }

        .redes-sociais,
        .area-contato,
        .localizacao p,
            {
            color: #333333;
        }

        .redes-sociais img {
            margin: 0px 15px 0px 15px;
        }
    </style>
</head>

<body>


    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="img/check.png">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="img/check.png">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <!--<img src="img/player_video.jpg">-->
            </div>
        </div>

        <div class="direita">
            <div class="topo">

                <div class="logo">
                    <img src="img/logo.png">
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="{{ route('site.index') }}">Principal</a></li>
                        <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                        <li><a href="{{ route('site.contato') }}">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                <form>
                    <input type="text" placeholder="Nome" class="borda-branca">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-branca">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-branca">
                    <br>
                    <select class="borda-branca">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="sem-borda">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

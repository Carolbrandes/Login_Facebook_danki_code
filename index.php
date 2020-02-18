<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela Login Facebook</title>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>

        <header class="logo-e-acesso-container">
                <div class="context logo-e-acesso-flex">
                        <h1>Facebook</h1>

                        <form action="" method="POST">
                                <div>
                                        <label for="login">Email ou Telefone</label>
                                        <input type="text" name="login" id="login" required autofocus placeholder="Email ou Telefone">
                                </div>

                                <div>
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" id="senha" required placeholder="Senha">
                                        <span><a href="">Esqueceu a conta?</a></span>
                                </div>

                                <button class="botao-entrar" name="acao" type="submit"> Entrar</button>

                        </form>
                </div>
        </header>

        <main>
                <div class="context">
                        <div class="main-flex">
                                <div class="main-col">
                                        <p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>

                                        <img src="imgs/img.png" alt="usuários conectados">
                                </div>

                                <div class="main-col">
                                        <form action="" class="form-cadastro" method="POST">
                                                <h1>Abra Uma Conta</h1>
                                                <p>É rápido e fácil</p>

                                                <div class="col-2">
                                                        <input type="text" name="nome" required placeholder="Nome">

                                                        <input type="text" name="sobrenome" id="" required placeholder="Sobrenome">
                                                </div>

                                                <div>
                                                        <input type="text" name="login" id="" required placeholder="Celular ou Email">
                                                </div>

                                                <div>
                                                        <input type="password" name="senha" id="" required placeholder="Senha">
                                                </div>

                                                <div>
                                                        <label for="">Data de Nascimento</label>

                                                        <select name="dia" id="dia"></select>

                                                        <select name="mes" id="mes"></select>

                                                        <select name="ano" id="ano"></select>

                                                </div>

                                                <div>
                                                        <label for="">Gênero</label>
                                                        <input type="radio" name="sexo" id="" value="Feminino">Feminino
                                                        <input type="radio" name="sexo" id="" value="Masculino">Masculino
                                                        <input type="radio" name="sexo" id="" value="Personalizado">Personalizado
                                                </div>

                                                <p class="termo-cadastro">Lorem ipsum dolor sit <a>amet consectetur</a> adipisicing elit. Eius libero officiis voluptatum iusto sunt beatae tenetur non totam quae impedit, quas fugit iure veniam harum eligendi porro. Temporibus, vel optio?</p>

                                                <button class="botao-cadastrar" type="submit" name="acao">Cadastre-se</button>

                                        </form>
                                </div>
                        </div>
                </div>
        </main>

        <footer>
                <div class="context">
                        <a href="" class="selected">Português</a>
                        <a href="">Inglês</a>
                        <a href="">Italiano</a>
                        <a href="">Francês</a>
                        <a href="">Espanhol</a>
                </div>
        </footer>


        <script src="scripts/data.js"></script>
</body>

</html>
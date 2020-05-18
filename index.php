<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matheus Trinca">
    <!--aplicar metatags depois-->
    <link rel="stylesheet" href="css/style.css">
    <title>Facebook - Entre ou cadastre-se</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->
            <form method="post" class="login-container">
                <div class="email">
                    <p>Email ou telefone</p>
                    <input type="text">
                </div><!--email-->
                <div class="senha">
                    <p>Senha</p>
                    <input type="text">
                    <p>Esqueceu a conta?</p>
                </div><!--senha-->
                <div class="login-button">
                    <input type="submit" name="acao" value="Entrar">
                </div><!--login-button-->
            </form><!--login-container-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoa">
                <div class="img-pessoa-texto">
                    <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                </div><!--img-pessoa-texto-->
                <img src="images/pessoas.png" alt="">
            </div><!--img-pessoa-->

            <div class="abrir-conta">
                <h1>Abrir uma conta</h1>
                <h3>É rápido e fácil.</h3>

            <form action="post">
                <div class="cria-conta">
                    <div class="w50">
                        <input type="text" value="Nome"> 
                    </div>
                    <div class="w50">
                        <input type="text" value="Sobrenome"> 
                    </div>
                    <div class="w100">
                        <input type="text" value="Celular ou email"> 
                    </div>
                    <div class="w100">
                        <input type="text" value="Nova Senha"> 
                    </div>
                    <div class="w100">
                        <h5>Data de nascimento</h5>
                        <select name="nasc-dia" class="nascimento">
                            <?php
                                for ($i=1; $i <= 31 ; $i++) { 
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php  }
                            ?>
                        </select>
                        <select name="nasc-mes" class="nascimento">
                            <?php
                                $mes = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                                for ($i=0; $i < count($mes); $i++) { 
                            ?>  <option value="<?php echo $i ?>"><?php echo $mes[$i] ?></option>    
                            <?php   } ?>
                        </select>
                        <select name="nasc-ano" class="nascimento">
                            <?php
                                for ($i=1960; $i <= 2020 ; $i++) { 
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php   } ?>
                        </select>
                        <h5>Gênero</h5>
                        <div class="input-radio">
                            <input type="radio" value="Masculino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" value="Feminino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" value="Personalizado">
                            <h2>Personalizado</h2>
                        </div><!--input-radio-->
                    </div><!--w100-->
                    <div class="clear"></div>
                    <div class="ajuda">?</div><!--ajuda-->
                    <div class="w100 termos">
                        <p>Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
                    </div><!--termos-->
                    <div class="button">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div><!--button-->
                    <p>Criar uma Página para uma celebridade, banda ou empresa.</p>
                </div><!--criar conta-->
            </form>
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <footer>
        <div class="center">
            <div class="cima">
                <ul class="links">
                    <li><a href="google.com">Português (Brasil)</a></li>
                    <li><a href="google.com">English (US)</a></li>
                    <li><a href="google.com">Español</a></li>
                    <li><a href="google.com">Français (France)</a></li>
                    <li><a href="google.com">Italiano</a></li>
                    <li><a href="google.com"> العربية</a></li>
                    <li><a href="google.com">Deutsch</a></li>
                    <li><a href="google.com">हिन्दी</a></li>
                    <li><a href="google.com">中文(简体)</a></li>
                    <li><a href="google.com">日本語</a></li>
                </ul><!--texto-->

                <div class="mais">
                    <h2>+</h2>
                </div><!--mais-->
                <div class="clear"></div>
            </div><!--cima-->
            <hr>
            <div class="baixo">
                <ul class="links">
                    <li><a href="google.com">Cadastre-se</a></li>
                    <li><a href="google.com">Entrar</a></li>
                    <li><a href="google.com">Messenger</a></li>
                    <li><a href="google.com">Facebook Lite</a></li>
                    <li><a href="google.com">Watch</a></li>
                    <li><a href="google.com">Pessoas</a></li>
                    <li><a href="google.com">Paginas</a></li>
                    <li><a href="google.com">Categorias de Página</a></li>
                    <li><a href="google.com">Locais</a></li>
                    <li><a href="google.com">Jogos</a></li>
                    <li><a href="google.com">Marketplace</a></li>
                    <li><a href="google.com">Grupos</a></li>
                    <li><a href="google.com">Instagram</a></li>
                    <li><a href="google.com">Local</a></li>
                    <li><a href="google.com">Campanhas de Arrecadação de Fundsos</a></li>
                    <li><a href="google.com">Serviços</a></li>
                    <li><a href="google.com">Paginas</a></li>
                    <li><a href="google.com">Sobre</a></li>
                    <li><a href="google.com">Criar Anuncio</a></li>
                    <li><a href="google.com">Jogos</a></li>
                    <li><a href="google.com">Cadastre-se</a></li>
                    <li><a href="google.com">Entrar</a></li>
                    <li><a href="google.com">Messenger</a></li>
                    <li><a href="google.com">Facebook Lite</a></li>
                    <li><a href="google.com">Watch</a></li>
                    <li><a href="google.com">Pessoas</a></li>
                    <li><a href="google.com">Paginas</a></li>
                    <li><a href="google.com">Categorias de Página</a></li>
                    <li><a href="google.com">Locais</a></li>
                    <li><a href="google.com">Jogos</a></li>
                </ul><!--texto-->
            </div><!--baixo-->
            <div class="clear"></div>
            <p>Facebook @ 2020</p>
        </div><!--center-->    
    </footer>

</body>
</html>
<header id="hd-principal">

    <div class="hd-tp">

        <div class="container">       

            <div class="face-icon left">
                <p>
                    <a href="#" target="_blank">
                        <i class="fa fa-facebook-official fa-1x" aria-hidden="true"></i>
                    </a>
                </p>
            </div><!-- face-icon -->

            <div class="email-info right">
                <p><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> contato@eplan.eng.br</p>
            </div><!-- email-info -->

        </div><!-- container -->

    </div><!-- hd-tp -->

    <div class="hd-md">

        <div class="container">

            <div class="left">
                <h1 class="sr-only">Eplan Construções</h1>
                <a href="index.php" title="Eplan Construções">
                    <img class="logo" src="./imgs/logo.svg" border="0">
                </a>            
            </div>
            <!-- left -->

            <div class="right">
                <div class="box-info-contato">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="hgroup">
                        <h4>Entre em Contato</h4>
                        <h3>3333.4567</h3>
                    </div><!-- hgroup -->  
                </div><!-- box-info-contato -->        
            </div>
            <!-- right -->   
            
            <button type="button" id="menu-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- container -->

    </div><!-- hd-md -->

    <div class="hd-ft">

        <div class="container">

            <nav class="nav-desktop">
                <ul>
                    <li>
                        <a href="index.php">Página Inicial</a>
                    </li>
                    <li>
                        <a href="nossa-empresa.php">Nossa Empresa</a>
                    </li> 
                    <li>
                        <a href="nosso-portfolio.php">Portfólio</a>
                    </li> 
                    <li>
                        <a class="contato-link" href="#">Contato</a>
                    </li>                                                          
                </ul>
            </nav>
            <!-- nav-desktop -->

            <?php
                //Nav Mobile... tive que usar uma estrutura diferente do boostrap...
                //portanto o mobile vai carregar a mesma estrutura..
                //mas a classe ao invés de nav-desktop será nav-mobile 
            ?>
            <nav class="nav-mobile">
                <ul>
                    <li>
                        <a href="index.php">Página Inicial</a>
                    </li>
                    <li>
                        <a href="nossa-empresa.php">Nossa Empresa</a>
                    </li> 
                    <li>
                        <a href="nosso-portfolio.php">Portfólio</a>
                    </li> 
                    <li>
                        <a class="contato-link" href="#">Contato</a>
                    </li>                                                          
                </ul>
            </nav>
            <!-- nav-desktop -->

            <div class="box-busca">
            </div>
            <!-- box-busca -->

        </div><!-- container -->  

    </div><!-- hd-ft -->    

</header>
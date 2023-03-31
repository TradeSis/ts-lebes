<?php
// helio 03022023 15:42

include_once "head.php";
include_once 'conexao.php';

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="css/etiqueta_normal_styles.css" />


</head>

<body>
    <div class="container-fluid ">

        <div class="row estilo1">
            <div class="col-md-2  estilo1">
                <img src="../img/logoLebes.png" class="estilo1" alt="Assistente de Vendas Lebes">
            </div>

            <!-- Navbar -->
            <nav class="col-md-10 estilo1 navbar navbar-expand navbar-light topbar ">

                <ul class="navbar-nav ml-auto" id="novoMenu3">

                    <div class="topbar-divider d-none d-sm-block"></div>

                </ul>
                <!-- MenuNovo -->
                <ul class="navbar-nav ml-auto" id="novoMenu2">

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fs-5 text">Clientes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" src="clientes/seguros_parametros.php">Seguros</a>
                            <a class="dropdown-item" href="#" src="clientes/historico_parametros.php">Histórico Clientes</a>
                            <a class="dropdown-item" href="#" src="clientes/contratos_parametros.php">Contratos</a>
                            <a class="dropdown-item" href="#" src="clientes/cupomcashback_parametros.php">Cupom Cashback</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fs-5 text">Consultas</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" src="consultas/relatorios.php">Relatórios</a>
                            <a class="dropdown-item" href="#" src="consultas/desconto_parametros.php">Descontos</a>
                            <a class="dropdown-item" href="#" src="consultas/produtodisp.php">Produto Disponível</a>
                            <a class="dropdown-item" href="#" src="consultas/bonusclien.php">Bonus Cliente</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fs-5 text">Relatorios</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" src="relatorios/frsalcart.php">Vencidos e a vencer</a>
                            <a class="dropdown-item" href="#" src="relatorios/relqtdNovo.php">Liquidações diarias p/ periodo</a>
                            <a class="dropdown-item" href="#" src="relatorios/loj_cred01.php">Extrato de cobrança simples</a>
                            <a class="dropdown-item" href="#" src="relatorios/loj_cre01_ma.php">Posição de cliente por periodo - A</a>
                            <a class="dropdown-item" href="#" src="relatorios/loj_cre01_lp.php">Posição de cliente por periodo - B</a>
                            
                        </div>
                    </li>

                </ul>



            </nav>



        </div>


        <div class="diviFrame" style="overflow:hidden;">
            <iframe class="iFrame container-fluid " id="myIframe" src="" frameborder="0" height="650"></iframe>
        </div>



        
    </div>

</body>


<script type="text/javascript">
    $(document).ready(function() {



        // SELECT MENU
        $("#novoMenu a").click(function() {

            var value = $(this).text();
            value = $(this).attr('id');

            //IFRAME TAG

            $("#myIframe").attr('src', value);
        })
        $("#novoMenu2 a").click(function () {

        var value = $(this).text();
        value = $(this).attr('src');

        //IFRAME TAG
        if (value) {

            $("#myIframe").attr('src', value);

            $('.diviFrame').removeClass('mostra');


        }

        })


        // SELECT MENU
        $("#menuCadastros a").click(function() {

            var value = $(this).text();
            value = $(this).attr('id');



            //IFRAME TAG
            if (value != '') {
                $("#myIframe").attr('src', value);
            }

        })


    });
</script>

</html>
<?php
// helio 03022023 15:42

include_once "head.php";
include_once 'conexao.php';

?>


<!DOCTYPE html>
    <html lang="pt-BR">
    <head>

        <link rel="stylesheet" type="text/css" href="css/etiqueta_normal_styles.css"/>
             
      <style rel="stylesheet" type="text/css">
       .estilo1{ background-color:#2FB12B; border: 0px solid;  }  
       .rowfull {
            height: 80vh;
                      
        }
        .my-custom-scrollbar {
            position: relative;
            height: 350px;
            overflow: auto;
            }
        .table-wrapper-scroll-y {
        display: block;
        }
      </style>
    </head>
<body>
<div class="container-fluid ">
    
    <div class="row estilo1">
        <div class="col-md-2  estilo1">
            <img src="../img/logoLebes.png" class="img-thumbnail estilo1" alt="Assistente de Vendas Lebes">
        </div>
     
            		<!-- Navbar -->
		<nav class="col-md-10 estilo1 navbar navbar-expand navbar-light topbar ">
			


				<!-- MenuNovo -->
				<ul class="navbar-nav ml-auto" id="novoMenu2">

					<div class="topbar-divider d-none d-sm-block"></div>
                    <ul class="navbar-nav ml-auto" id="novoMenu3">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            </ul>

                    <li class="nav-item dropdown no-arrow">
						<a src="prevenda/prevenda.php" href="#" class="nav-link " id="userDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ni ni-single-02"></i><span class="mb-0 text-sm">Nova Venda</span>
						</a>
					</li>

				</ul>


		
		</nav>


     
    </div>


    <div class="container-fluid full-width">
			<iframe class="container-fluid full-width" id="myIframe" src="prevenda/prevenda.php" frameborder="0" scrolling="yes" height="600"></iframe>
		</div>


  
    <?php
    include 'footer.php';
    ?>
</div>

</body>


<script type="text/javascript">


$(document).ready(function () {



// SELECT MENU
$("#novoMenu a").click(function () {

    var value = $(this).text();
    value = $(this).attr('id');

    //IFRAME TAG

    $("#myIframe").attr('src', value);
})
// SELECT MENU
$("#novoMenu2 a").click(function () {

    var value = $(this).text();
    value = $(this).attr('src');

    //IFRAME TAG
    if (value != '') {
        $("#myIframe").attr('src', value);
    }

})


// SELECT MENU
$("#menuCadastros a").click(function () {

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
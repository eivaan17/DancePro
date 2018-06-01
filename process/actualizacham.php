<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];



if(consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp',NombreProd='$nameProdUp',CodigoCat='C4',Precio='500',Modelo='x',Marca='x',Stock='1',NITProveedor='0001781'", "CodigoProd='$codeOldProdUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}

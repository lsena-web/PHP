<?php

session_start();
if(isset($_SESSION['mensagem'])):

?>

<script>
    // O ONLOAD SERVE PARA CARREGAR ESSA SESSÃO DEPOIS QUE TODA PÁGINA É CARREGADA
    window.onload = function(){

        M.toast({html: ' <?php   echo $_SESSION['mensagem']; ?>'})    

    };

</script>

<?php    
 
endif;

session_unset();
?>
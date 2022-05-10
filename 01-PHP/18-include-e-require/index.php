
    <?php
    
    // include e require serve para incluir o conteudo de outro arquivo tipo um instanciamento
 
    // a diferença do include para o require é:

        //se der erro no require ele interrompe todo o script
        //ja o include não, ele envia um warning e continua a reproduzir o script normalmente
  
/*include_once e require_once o php verifica se esse arquivo ja foi incluido, se ja foi incluido
 ele não inclui novamente */


     //
     include 'header.php'; 
     
     ?>
    <?php echo "hello world"; ?>


    <?php
     
     include 'footer.php'; 
     
     ?>
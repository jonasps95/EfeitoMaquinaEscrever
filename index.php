<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efeito Máquina de Escrever</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    <form method="POST">
        <textarea name="textIn"></textarea>
</br>
        <input type="submit" name="acao"/>
    </form>
    
    <?php
        if(!isset($_POST['acao'])){
            $conteudo = 'Digite um texto e teste você mesmo!';
        }else{
            $conteudo = $_POST['textIn'];
        }
    ?>
    <h1 class="titulo-principal"><?php echo $conteudo ?></h1>
</body>


<script>
    

    function typeWrite(elemento){
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = ' ';
        textoArray.forEach(function(letra, i){   
        
        setTimeout(function(){
            elemento.innerHTML += letra;
        }, 75 * i)

    });
    }
    const titulo = document.querySelector('.titulo-principal');
    typeWrite(titulo);


</script>

</html>
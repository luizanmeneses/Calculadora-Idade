<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="styledes10.css">
</head>
<body>
    <?php
        $atual = date("Y"); 
        $nasc = $_GET['nasc'] ?? 1924;
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="nasc">Ano de Nascimento:</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>" min="1900" max="<?=($atual - 1)?>">
            <label for="atual">Ano que quer saber a idade: (atualmente estamos em <?=$atual?>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" min="1900">
            <button type="submit">Qual será minha idade?</button>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if ($nasc < $ano){
                $idade = $ano - $nasc;
                echo "Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano!";
            }else{
                echo "Nessa ano você ainda não tinha nascido!";
            }
            
            
        ?>
    </section>
</body>
</html>
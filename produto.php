<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/produto.css">
</head>
<body>
    <?php
    $cabecalho_title = "Produto da Mirro Fashion";
     include("cabecalho.php");
     ?>
    <!--conteúdo do página aqui!-->
    <div class="container">
    <div class="produto">
        <h1>Fuzzy Cardigan</h1>
        <p>por apenas R$ 129,90</p>

        <form action="checkout.php">
            <fieldset class="cores">
                <legend>Escolha a cor:</legend>

                <input type="radio" name="cor" value="verde" id="verde" checked>
                <label for="verde">
                    <img src="img/produtos/foto1-verde.png" alt="Produto na cor verde">
                </label>

                <input type="radio" name="cor" value="rosa" id="rosa">
                <label for="rosa">
                    <img src="img/produtos/foto1-rosa.png" alt="Produto na cor roda">
                </label>

                <input type="radio" name="cor" value="azul" id="azul">
                <label for="azul">
                    <img src="img/produtos/foto1-azul.png" alt="Produto na cor azul">
                </label>
            </fieldset>
            <fieldset class="tamanhos">
                <legend>Escolha o tamanho:</legend>
                <input type="range" min="36" max="46" step="2" name="tamanho" id="tamanho">
                <output for="tamanho" name="valortamanho">38</output>
            </fieldset>

            <button class="comprar">Comprar</button>
        </form>
    </div>
    <div class="detalhes">
        <h2>Detalhes do Produto</h2>

        <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
            material italiano com estampa desenhada pelos artesões da 
            comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
            mesmo pela nossa entrega a jato</p>

            <table>
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
    <script type="text/javascript" src="js/produto.js"></script>
    <?php include("rodape.php");?>
</body>
</html>
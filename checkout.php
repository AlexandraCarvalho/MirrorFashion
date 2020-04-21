<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
    
    <h1>Otima escolha!</h1>
    <p>Obrigada por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>

        <h2>Sua Compra</h2>
        <dl>
            <dt>Cor</dt>
            <dd><?= $_POST['cor'] ?></dd>

            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>
        </dl>
   
        <button action="produto.php">Voltar</button>
</body>
</html>
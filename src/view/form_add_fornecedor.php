<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de Fornecedor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../controller/Provider.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Cadastro de Fornecedor</legend>
            <section class="columns-2">
                <article>
                    <label for="name">Nome do Forncedor</label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="5">
                </article>
                <article>
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="cnpj">Cnpj</label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-blue-400" required maxlength="14" minlength="14">
                </article>
                <article>
                </article>
            </section>
        </fieldset>
    <fieldset class="p-4 m-5 border border-blue-400">
    <legend>Cadastro de Endereço do Fornecedor</legend>
        <section class="columns-2">
    <article class="justify-between p-4">
            <label for="publicPlace"> Logradouro</label>
            <input type="text" id="publicPlace" name="publicPlace" class="border border-blue-400" required minlength="5">
    </article>
    <article class="justify-between p-4">
            <label for="numberOfStreet">Número da rua</label>
            <input type="text" id="numberOfStreet" name="numberOfStreet" class="border border-blue-400" required minlength="5">
    </article>
   </section>
   <section class="columns-2">
    <article class="justify-between p-4">
            <label for="complement">Complemento</label>
            <input type="text" id="complement" name="complement" class="border border-blue-400" required minlength="5">
    </article>
    <article class="justify-between p-4">
            <label for="neighborhood">Bairro</label>
            <input type="text" id="neighborhood" name="neighborhood" class="border border-blue-400" required minlength="5">
    </article>
    </section>
   <section class="columns-2">
    <article class="justify-between p-4">
            <label for="city">Cidade</label>
            <input type="text" id="city" name="city" class="border border-blue-400" required minlength="5">
    </article>
    <article class="justify-between p-4">
            <label for="zipCode">Cep</label>
            <input type="text" id="zipCode" name="zipCode" class="border border-blue-400" required minlength="5">
    </article>
    </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
    </fieldset>
    </form>
</body>
</html>
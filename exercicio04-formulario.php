<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (formulário)</title>
</head>
<body>
    <h1>Exercício 04 (formulário)</h1>
    <hr>
    <form autocomplete="off" action="" method="post">
        <p>
            <label for="produto">Produto:</label>
            <input required type="text" name="produto" id="produto">
        </p>
     
		<p>
			<label for="fabricante">Fabricante:</label>
			<select name="fabricante" id="fabricante">
				<!-- não apague este <option> vazio -->
				<option value=""></option>

				<!-- Faça aqui a programação necessária para obter os dados de um array (criado por você) e colocá-los (cada um) dentro de uma tag <option>. -->	
                
			</select>
		</p>

		<p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>
<form action="cart.php" method="post">
	<?php
		$pizza = array('Calabresa', 'Frango','carne', 'queijo','doce');

		foreach ($pizza as $key => $sabor) :

			echo '<label>Sabor:</label>';
			echo '<input type="checkbox" name="sabor'.($key+1).'" value="'.$sabor.'">'.$sabor.'<br>';

			echo '<label>Tamanho:</label>';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="pequena">Pequeno';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="media">Médio';
			echo '<input type="radio" name="tamanho'.($key+1).'" value="grande">Grande<br>';
			
			echo '<label>Entrega - Com entrega + 10,00</label>';
			echo '<input type="checkbox" name="entrega" value="true"><br>';

			echo '<label>Quantidade: </label>';
			echo '1<input type="radio" name="qtd'.($key+1).'" value="1">';
			echo '2<input type="radio" name="qtd'.($key+1).'" value="2">';
			echo '3<input type="radio" name="qtd'.($key+1).'" value="3">';
			echo '4<input type="radio" name="qtd'.($key+1).'" value="4">';
			echo '5<input type="radio" name="qtd'.($key+1).'" value="5"><br>';

			// echo'<input type="number" id="qtd" name="qtd'.($key+1).'" placeholder="Quantidade">';

			echo '<hr>';

		endforeach;
	?>
	<button type="submit">Adicionar</button>
</form>

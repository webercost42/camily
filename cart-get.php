<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Confira seu pedido:</h3>
<?php

	$total = 0;
	//metodos get
	if ($_POST != null) {

		foreach ($_POST as $key => $value) {
			$qtd = 0;

			echo preg_replace('/[^A-Za-z\-]/', '', $key) . ' - ' . $value . '<br>';


			for ($i=1; $i <= $value ; $i++) { 
				@$tamanho = $_POST['tamanho'.$i];
				@$qtd = $_POST['qtd'.$i];
				@$qtd2 = $_POST['qtd'.$i];
				
				
				switch ($tamanho) {
					case 'pequena':
						 $qtd *= 15;
						break;

					case 'media':
						 $qtd *= 20;
						break;

					case 'grande':
						 $qtd *= 25;
						break;
				}
				@$total+=$qtd;
				if ($qtd2 == 2) {
					$total;
					$pctm = 10;
					$valor_desconto = ($pctm / 100) * $total;

					echo 'Você economizou R$ ' . number_format($valor_desconto,2,",","."). '!';
				}elseif ($qtd2 > 2) {
					$total;
					$pctm = 15;
					$valor_desconto = ($pctm / 100) * $total;

					echo 'Você economizou R$ ' . number_format($valor_desconto,2,",","."). '!';
				}
			}

		}
			if (@$entrega = $_POST['entrega']) {
				$total+=10;
			}

			if (@$valor_desconto) {
				echo '<br>Total a pagar R$: '. number_format($total - $valor_desconto,2,",",".");
			}else{
				echo '<br>Total a pagar R$: '. number_format($total,2,",",".");
			}
	}else{
		echo 'Adicione pizzas ao seu cardápio';
	}

?>

</body>
</html>
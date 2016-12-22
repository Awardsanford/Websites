<!DOCTYPE html>
<html>
<head>
<title>a la Lola</title>
</head>


  <? php
	$dom = new DomDocument();
	$dom->load("menu.xml");

	$pizzas = $dom->getElementsByTagName("pizza");
	foreach($pizzas as $pizza)
	 {
		@$tomato_and_cheeses_large = $pizza->getElementsByTagName("tomato_and_cheese_large");
		@$tomato_and_cheese_large = $tomato_and_cheeses_large->item(0)->nodeValue;

		@$tomato_and_cheeses_small = $pizza->getElementsByTagName("tomato_and_cheese_small");
		@$tomato_and_cheese_small = $tomato_and_cheeses_small->item(0)->nodeValue;

		@$bacons_large = $pizza->getElementsByTagName("bacon_large");
		@$bacon_large = $bacons_large->item(0)->nodeValue;

		@$bacons_small = $pizza->getElementsByTagName("bacon_small");
		@$bacon_small = $bacons_small->item(0)->nodeValue;

		@$pepperonis_large = $pizza->getElementsByTagName("pepperoni_large");
		@$pepperoni_large = $pepperonis_large->item(0)->nodeValue;

		@$pepperonis_small = $pizza->getElementsByTagName("pepperoni_small");
		@$pepperoni_small = $pepperonis_small->item(0)->nodeValue;

		echo "$tomato_and_cheese_large  $tomato_and_cheese_small  $bacon_large  $bacon_small\n";
	}

	?>

</body>

</html>

<html>
<head>
<title>a la Lola</title>
</head>

<body>

<link rel="stylesheet" type="text/css" href=stylesheet.css>

  
  <h1>A La Lola</h1>

    <div>

  <?php
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

		echo "$tomato_and_cheese_large\n";
	}

	?>
</div>
  
  <section id="container">
  
  <div id="choice1">
      
	<input type="radio" name="choice1" value="pizza">Pizza<br>
       <label>
        <input type="radio" name="pizza" id="pizza">Tomato and Cheese<br>
        <input type="radio" name="pizza" id="pizza">Bacon<br>
        <input type="radio" name="pizza" id="pizza">Pepperoni<br>
      </label>
  
    </div>
	
<div id="choice2">
	<input type="radio" name="choice2" value="calzone">Ziti<br>
  <label>
        <input type="radio" name="calzone" id="calzone">With Sauce<br>
        <input type="radio" name="calzone" id="calzone">With Meatball<br>
        <input type="radio" name="calzone" id="calzone">With Chicken<br>
  </label>
  
  
  </div>
	
	<div id="choice3">
	<input type="radio" name="choice3" value="grinder">Grinder<br>
  <label>
        <input type="radio" name="grinder" id="grinder">Hamburger<br>
        <input type="radio" name="grinder" id="grinder">Steak<br>
        <input type="radio" name="grinder" id="grinder">Chicken Fingers<br>
  </label>
  
  
  </div>
    <div id="total">
  <input type="text" value="<?php echo "$tomato_and_cheese_large\n"; ?>">$Total
  </input>
  </section>


</body>

</html>
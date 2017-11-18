<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="jquery.js" type="text/javascript"></script>
<title>a la Lola</title>
</head>
  <?php
  $dom = simplexml_load_file('menu.xml');
  
  ?>

<body>
  <link rel="stylesheet" type="text/css" href=stylesheet.css>
  
  <h1 style="font-size: 40px">A La Lola</h1>
  
  <div id="total_container">
  <section id="sidebar">
   
    <button type="button" id="pizza_button" class="sidebar_button">Pizza</button>
    
    <button type="button" id="ziti_button" class="sidebar_button">Ziti</button>
  
  
  <button type="button" id="grinder_button" class="sidebar_button">Grinder</button>
  </section>
  
  <section id="container">
     
    <div id="container2">
      
    <div id="hide_pizza">
      <div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Tomato and Cheese
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
 
 

      <br>


     <div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Bacon
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
  
  
  

  <br>

<div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Pepperoni
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
    </div>
  
  <div id="hide_ziti">
    <div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">With Sauce
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
      <br>
      
<div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">With Meatballs
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
    <br>
    
<div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">With Chicken
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
  <br>
  
    </div>

<div id="hide_grinder">
      
  <div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Hamburger
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
      <br>

      <div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Steak
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 

    <br>

    
<div id="options_container">
       
      
      <label>
        <div id="heading">
        <input type="checkbox">Chicken Fingers
        </input>
        </label>
      </div>
      <div id="option_values">
   <select name="size" size="1" selected="size">
     <option value="">size</option>
  <option value="small">small</option>
  <option value="large">large</option>
         
</select>
        <select name="qty" size="qty" default="qty">
          <option value="">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        
         
        <label>
        <input type="text" name="price" style="width: 90px" style="text-align: right">
        </label>
        <button id="order">add to order</button>
        </input> 

      </input>
    </div>
      </div>
 
  <br>
  
    </div>
    
    
    </div>
  
  
    <div id="total">$ Total:
  <input type="text" name="total" style="width: 100px">
  </input>
  </section>
</div>


  

</body>

</html>
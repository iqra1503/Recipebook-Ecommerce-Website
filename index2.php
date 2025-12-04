<?php
// Start session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["user"])) {
    // Redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipebook</title>
<link rel="stylesheet" href="style.css">

<!--
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Pacifico&display=swap" rel="stylesheet">
-->
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.png" class="logo">
           
            <ul>
                <li><a href="#">HOME</a></li>
        <li><a href="#">CONTENTS</a></li>
        <li><a href="#">RECIPE</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <div class="banner-text">
            <h1>My Recipes</h1>
        <p>Savor the flavors of tradition and innovation, one delicious recipe at a time</p>
        </div>

    </div>

    <!--Conetents-->

    <section id="content">
        <div class="title-text">
            <h1>Contents</h1>
            <h3>Discover The Land Of Deliciousness</h3>
        </div>
    </section>


    <main class="recipes-container">
        <section class="recipe">
          <h2>Breakfast</h2>
          <p>Breakfast, with its delicate spread of fruits and pastries under the morning sun, paints a serene picture of indulgence and tranquility.</p>
          <img src="brk.jpg" alt="Recipe 1 Image">
          <div class="button-container">
          <button type="button"><span></span>View Recipe</button>
          </div>
        </section>
    
        <section class="recipe">
          <h2>Lunch</h2>
          <p>Lunchtime offers a delightful array of flavors, creating a brief but satisfying oasis in the day's hustle.</p>
          <img src="lun.jpg" alt="Recipe 2 Image">
          <div class="button-container">
          <button type="button"><span></span>View Recipe</button>
          </div>
        </section>
    
        <section class="recipe">
          <h2>Dinner</h2>
          <p>Dinner casts a cozy glow over the table, as savory dishes and lively conversation merge to create a comforting finale to the day.</p>
          <img src="dinner.jpg" alt="Recipe 3 Image">
          <div class="button-container">
          <button type="button"><span></span>View Recipe</button>
          </div>
        </section>
      </main>

      <!-- Additional sections -->
      <main class = "recipes-container">
    <section class="recipe">
        <h2>Vegan</h2>
        <p>In the heart of the kitchen, where vibrant hues dance upon plates like brushstrokes of nature's palette, lies the artistry of vegan cuisine, a symphony of flavors orchestrated by the whispers of plant-based ingredients.</p>
        <img src="vegan.jpg" alt="Italian Recipe Image">
        <div class="button-container">
            <button type="button"><span></span>View Recipe</button>
        </div>
    </section>

    <section class="recipe">
        <h2>Drinks And Smoothies</h2>
        <p>In the dawns gentle light or the dusks soft embrace, coffee and smoothies intertwine harmoniously, offering a sensory journey of pure delight and invigorating refreshment.</p>
        <img src="smoothie.jpg" alt="Korean Recipe Image">
        <div class="button-container">
            <button type="button"><span></span>View Recipe</button>
        </div>
    </section>

    <section class="recipe">
        <h2>Desert</h2>
        <p>"In the golden whispers of twilight, where the sands embrace the sky in a dance of solitude, the desert whispers secrets of ancient wisdom, inviting wanderers to lose themselves amidst its timeless beauty."</p>
        <img src="Donuts6286 (1).jpg" alt="Dessert Recipe Image">
        <div class="button-container">
            <button type="button"><span></span>View Recipe</button>
        </div>
    </section>

</main>

<!--Recipes-->

<section id="recipe-section">
    <div class="recipe-text">
        <h1>Recipes</h1>
        <h3>Discover The Land Of Deliciousness</h3>
    </div>
</section>

    

<section class="recipe-section">
    <!-- Breakfast and Lunch sections -->
    
    <div class="recipe-subsection">
        <h3><a>Breakfast</a></h3>
        <p>Start your day off right with these delicious breakfast options:</p>
        <ul>
            <!-- List of breakfast recipes -->
            <li><a href="Eggs Benedict.html">Eggs Benedict</a></li>
            <li><a>Blueberry Pancakes</a></li>
            <li><a>Avocado Toast</a></li>
            
        </ul>
    </div>
    

    <div class="recipe-subsection">
        <h3>Lunch</h3>
        <p>Enjoy a satisfying midday meal with these lunchtime favorites:</p>
        <ul>
            <!-- List of lunch recipes -->
            <li><a>Caesar Salad</a></li>
            <li><a>Caprese Sandwich</a></li>
            <li><a>Chicken Wrap</a></li>
            
        </ul>
    </div>

    <!-- Dinner and Vegan sections -->
    <div class="recipe-subsection">
        <h3>Dinner</h3>
        <p>Indulge in these hearty dinner options to end your day on a high note:</p>
        <ul>
            <!-- List of dinner recipes -->
            <li><a>Grilled Salmon</a></li>
            <li><a>Beef Stir-Fry</a></li>
            <li><a>Pasta Carbonara</a></li>
            
        </ul>
    </div>

    <div class="recipe-subsection">
        <h3>Vegan</h3>
        <p>Discover these flavorful vegan dishes for a plant-based feast:</p>
        <ul>
            <!-- List of vegan recipes -->
            <li><a>Quinoa Salad</a></li>
            <li><a>Black Bean Tacos</a></li>
            <li><a>Vegan Burger</a></li>
            
        </ul>
    </div>

    <!-- Drinks and Dessert sections -->
    <div class="recipe-subsection">
        <h3>Drinks</h3>
        <p>Quench your thirst with these refreshing beverage options:</p>
        <ul>
            <!-- List of drinks recipes -->
            <li>Strawberry Smoothie</li>
            <li>Mojito</li>
            <li>Iced Coffee</li>
            
        </ul>
    </div>

    <div class="recipe-subsection">
        <h3>Dessert</h3>
        <p>Satisfy your sweet tooth with these delectable dessert treats:</p>
        <ul>
            <!-- List of dessert recipes -->
            <li>Chocolate Cake</li>
            
            <li>Tiramisu</li>
            <li>Ice Cream Sundae</li>
        </ul>
    </div>
</section>



   


</body>
</html>
<?php

    function findImg($item)
    {
        if(strcasecmp($item, "Strawberries") == 0)
        {
           return "../Images/strawberry.jpg";
        }
            //Dairy Section

            
        else if(strcasecmp($item, "Shredded Mozzarella Cheese Bag") == 0)
        {
            return "../Images/shreddedcheese.png";
        }


        else if(strcasecmp($item, "Bagel") == 0)
        {
            return "../Images/bagel.jpg";
        }

        
        else if(strcasecmp($item, "Milk") == 0)
        {
            return "../Images/milk.jpg";
        }

        
        else if(strcasecmp($item, "Cheddar Cheese") == 0)
        {
            return "../Images/cheddarcheese.png";
        }

        else  if(strcasecmp($item, "Strawberry Yogurt Pack") == 0)
        {
            return "../Images/straberryyogurt.png";
        }

        else  if(strcasecmp($item, "Blueberry Yogurt Pack") == 0)
        {
           return "../Images/yogurtcup.png";
        }

        else if(strcasecmp($item, "Mixed Fruit Flavoured Yogurt Pack") == 0)
        {
            return "../Images/yogurtpack.png";
        }

        else if(strcasecmp($item, "Large Eggs") == 0||strcasecmp($item, "30 Large Eggs") == 0)
        {
            return "../Images/30eggs.png";
        }

        else if(strcasecmp($item, "Large White Eggs") == 0||strcasecmp($item, "10 Large White") == 0)
        {
            return "../Images/10whiteeggs.png";
        }
  
        else if(strcasecmp($item, "Large Brown Eggs") == 0||strcasecmp($item, "10 Large Brown Eggs") == 0)
        {
            return "../Images/12browneggs.png";
        }

        else if(strcasecmp($item, "1% Milk Large") == 0)
        {
            return "../Images/1milk4L.png";
        }
   
        else  if(strcasecmp($item, "1% Milk Small") == 0)
        {
            return"../Images/1milk1L.png";
        }

        else if(strcasecmp($item, "2% Milk Large") == 0)
        {
            return "../Images/2milk4L.png";
        }
  
        else if(strcasecmp($item, "2% Milk Small") == 0)
        {
            return "../Images/2milk1L.png";
        }

        else  if(strcasecmp($item, "Salted Butter") == 0)
        {
            return "../Images/butter.png";
        }

        else if(strcasecmp($item, "Unsalted Butter") == 0)
        {
            return "../Images/unsaltedbutter.png";
        }

        else if(strcasecmp($item, "Honeycrisp Apple") == 0)
        {
            return "../Images/apple1.png";
        }

        else if(strcasecmp($item, "Banana") == 0)
        {
            return "../Images/banana.png";
        }

        else if(strcasecmp($item, "Large Navel Orange") == 0)
        {
            return "../Images/orange.png";
        }

        else if(strcasecmp($item, "Bartlett Pear") == 0)
        {
             return "../Images/pear.png";
        }

        else if(strcasecmp($item, "Celery") == 0)
        {
            return "../Images/celery.png";
        }

        else if(strcasecmp($item, "English HH Seedless Cucumber") == 0)
        {
            return "../Images/cucumber.png";
        }

        else if(strcasecmp($item, "Romaine Lettuce") == 0)
        {
            return "../Images/lettuce.png";
        }

        else if(strcasecmp($item, "Red Pepper") == 0)
        {
            return "../Images/redpepper.png";
        }

        //--------------------------------------------------------

        else if(strcasecmp($item, "Plain Bagels") == 0)
        {
            return "../Images/plainbagel.png";
        }

        else if(strcasecmp($item, "Whole Wheat Bagels") == 0)
        {
            return "../Images/wholewheatbagel.png";
        }

        else if(strcasecmp($item, "Sliced White Bread") == 0)
        {
            return "../Images/whitebread.png";
        }

        else  if(strcasecmp($item, "Sliced Whole Wheat Bread") == 0)
        {
            return "../Images/wholewheatbread.png";
        }

        else if(strcasecmp($item, "French Baguette") == 0)
        {
            return "../Images/Breadrolls.png";
        }

        else if(strcasecmp($item, "Maple Pastry Bites") == 0)
        {
            return "../Images/mapplepastry.png";
        }

        else if(strcasecmp($item, "Palm Leaf Pastries") == 0)
        {
            return "../Images/leafpastry.png";
        }

        //--------------------------------------------------------------------------------------

        else if(strcasecmp($item, "Lean Ground Beef") == 0)
        {
            return "../Images/groundbeef.png";
        }

        else if(strcasecmp($item, "Rib Steak") == 0)
        {
            return "../Images/steak.png";
        }

        else  if(strcasecmp($item, "Butterfly Pork Chops") == 0||strcasecmp($item, "Butterfly Pork Chops, 3 Pack") == 0)
        {
            return "../Images/pork.png";
        }

        else if(strcasecmp($item, "Boneless Chicken Breast") == 0||strcasecmp($item, "Boneless Chicken Breast, 3 Pack") == 0)
        {
            return "../Images/chickenbreast.png";
        }

        if(strcasecmp($item, "Lean Minced Turkey") == 0)
        {
            return "../Images/mincedturkey.png";
        }

        else  if(strcasecmp($item, "Confit Duck Legs") == 0||strcasecmp($item, "Confit Duck Legs, 2 pack") == 0)
        {
            return "../Images/duckconfit.png";
        }

        else  if(strcasecmp($item, "Salmon Fillet") == 0)
        {
            return "../Images/salmonfillet.png";
        }

        else if(strcasecmp($item, "Haddock Fillet") == 0)
        {
            return "../Images/haddockfillet.png";
        }

        else if(strcasecmp($item, "Live Lobster") == 0)
        {
            return "../Images/lobster.png";
        }

        //------------------------------------------------------------------------------------------

        else  if(strcasecmp($item, "All Purpose Flour") == 0)
        {
            return "../Images/flour.png";
        }

        else if(strcasecmp($item, "Sugar") == 0)
        {
            return "../Images/sugar.png";
        }

        else if(strcasecmp($item, "Table Salt") == 0)
        {
            return "../Images/salt.png";
        }

        else if(strcasecmp($item, "Chocolate Chips") == 0)
        {
            return "../Images/chocolatechip.png";
        }

        else if(strcasecmp($item, "Canned Peas") == 0)
        {
            return "../Images/cannedpeas.png";
    
        }

        else if(strcasecmp($item, "Canned Tuna Chunks") == 0)
        {
            return "../Images/cannedtuna.png";
        }

        else  if(strcasecmp($item, "Diced Tomatoes") == 0)
        {
            return "../Images/dicedtomatoes.png";
        }

        else if(strcasecmp($item, "Tomato Soup") == 0)
        {
            return "../Images/cannedsoup.png";
        }

        else if(strcasecmp($item, "Cream of Mushroom Soup") == 0)
        {
            return "../Images/creamofmushroom.png";
        }

        else  if(strcasecmp($item, "Pea and Ham Soup") == 0)
        {
            return "../Images/peaandhamsoup.png";
        }

        else  if(strcasecmp($item, "Frozen Pepperoni & Cheese Pizza") == 0)
        {
            return "../Images/FrozenPizza.png";
        }

        else  if(strcasecmp($item, "Frozen Chopped Spinach") == 0)
        {
            return "../Images/FrozenSpinach.png";
        }

        else  if(strcasecmp($item, "Vanilla Ice Cream") == 0)
        {
            return "../Images/IceCream.png";
        }
        
    }

    function category($item)
    {
        if(strcasecmp($item, "Strawberries") == 0)
        {
           return "Fruits & Vegetables";
        }
            //Dairy Section
        else if(strcasecmp($item, "Shredded Mozzarella Cheese Bag") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Bagel") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "Milk") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Cheddar Cheese") == 0)
        {
            return "Dairy & Eggs";
        }

        else  if(strcasecmp($item, "Strawberry Yogurt Pack") == 0)
        {
            return "Dairy & Eggs";
        }

        else  if(strcasecmp($item, "Blueberry Yogurt Pack") == 0)
        {
           return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Mixed Fruit Flavoured Yogurt Pack") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Large Eggs") == 0||strcasecmp($item, "30 Large Eggs") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Large White Eggs") == 0||strcasecmp($item, "10 Large White") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Large Brown Eggs") == 0||strcasecmp($item, "10 Large Brown Eggs") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "1% Milk Large") == 0)
        {
            return "Dairy & Eggs";
        }

        else  if(strcasecmp($item, "1% Milk Small") == 0)
        {
            return"Dairy & Eggs";
        }

        else if(strcasecmp($item, "2% Milk Large") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "2% Milk Small") == 0)
        {
            return "Dairy & Eggs";
        }

        else  if(strcasecmp($item, "Salted Butter") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Unsalted Butter") == 0)
        {
            return "Dairy & Eggs";
        }

        else if(strcasecmp($item, "Honeycrisp Apple") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Banana") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Large Navel Orange") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Bartlett Pear") == 0)
        {
             return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Celery") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "English HH Seedless Cucumber") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Romaine Lettuce") == 0)
        {
            return "Fruits & Vegetables";
        }

        else if(strcasecmp($item, "Red Pepper") == 0)
        {
            return "Fruits & Vegetables";
        }

        //--------------------------------------------------------

        else if(strcasecmp($item, "Plain Bagels") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "Whole Wheat Bagels") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "Sliced White Bread") == 0)
        {
            return "Bread & Bakery";
        }

        else  if(strcasecmp($item, "Sliced Whole Wheat Bread") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "French Baguette") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "Maple Pastry Bites") == 0)
        {
            return "Bread & Bakery";
        }

        else if(strcasecmp($item, "Palm Leaf Pastries") == 0)
        {
            return "Bread & Bakery";
        }

        //--------------------------------------------------------------------------------------

        else if(strcasecmp($item, "Lean Ground Beef") == 0)
        {
            return "Butchery";
        }

        else if(strcasecmp($item, "Rib Steak") == 0)
        {
            return "Butchery";
        }

        else  if(strcasecmp($item, "Butterfly Pork Chops") == 0||strcasecmp($item, "Butterfly Pork Chops, 3 Pack") == 0)
        {
            return "Butchery";
        }

        else if(strcasecmp($item, "Boneless Chicken Breast") == 0||strcasecmp($item, "Boneless Chicken Breast, 3 Pack") == 0)
        {
            return "Butchery";
        }

        if(strcasecmp($item, "Lean Minced Turkey") == 0)
        {
            return "Butchery";
        }

        else  if(strcasecmp($item, "Confit Duck Legs") == 0||strcasecmp($item, "Confit Duck Legs, 2 pack") == 0)
        {
            return "Butchery";
        }

        else  if(strcasecmp($item, "Salmon Fillet") == 0)
        {
            return "Butchery";
        }

        else if(strcasecmp($item, "Haddock Fillet") == 0)
        {
            return "Butchery";
        }

        else if(strcasecmp($item, "Live Lobster") == 0)
        {
            return "Butchery";
        }

        //------------------------------------------------------------------------------------------

        else  if(strcasecmp($item, "All Purpose Flour") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Sugar") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Table Salt") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Chocolate Chips") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Canned Peas") == 0)
        {
            return "Non-Perishable Food";
    
        }

        else if(strcasecmp($item, "Canned Tuna Chunks") == 0)
        {
            return "Non-Perishable Food";
        }

        else  if(strcasecmp($item, "Diced Tomatoes") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Tomato Soup") == 0)
        {
            return "Non-Perishable Food";
        }

        else if(strcasecmp($item, "Cream of Mushroom Soup") == 0)
        {
            return "Non-Perishable Food";
        }

        else  if(strcasecmp($item, "Pea and Ham Soup") == 0)
        {
            return "Non-Perishable Food";
        }

        else  if(strcasecmp($item, "Frozen Pepperoni & Cheese Pizza") == 0)
        {
            return "Frozen Food";
        }

        else  if(strcasecmp($item, "Frozen Chopped Spinach") == 0)
        {
            return "Frozen Food";
        }

        else  if(strcasecmp($item, "Vanilla Ice Cream") == 0)
        {
            return "Frozen Food";
        }
        
    }

    function findPrice($item)
    {
        if(strcasecmp($item, "Strawberries") == 0)
        {
           return 3;
        }
            //Dairy Section
        else if(strcasecmp($item, "Shredded Mozzarella Cheese Bag") == 0)
        {
            return 5.99;
        }

        else if(strcasecmp($item, "Bagel") == 0)
        {
            return 4;
        }

        else if(strcasecmp($item, "Milk") == 0)
        {
            return 6.56;
        }

        else if(strcasecmp($item, "Cheddar Cheese") == 0)
        {
            return 4.49;
        }

        else if(strcasecmp($item, "Strawberry Yogurt Pack") == 0)
        {
            return 5.99;
        }

        else  if(strcasecmp($item, "Blueberry Yogurt Pack") == 0)
        {
           return 5.99;
        }

        else if(strcasecmp($item, "Mixed Fruit Flavoured Yogurt Pack") == 0)
        {
            return 5.99;
        }

        else if(strcasecmp($item, "Large Eggs") == 0||strcasecmp($item, "30 Large Eggs") == 0)
        {
            return 4.77;
        }

        else if(strcasecmp($item, "Large White Eggs") == 0||strcasecmp($item, "10 Large White") == 0)
        {
            return 2.99;
        }

        else if(strcasecmp($item, "Large Brown Eggs") == 0||strcasecmp($item, "10 Large Brown Eggs") == 0)
        {
            return 4.69;
        }

        else if(strcasecmp($item, "1% Milk Large") == 0)
        {
            return 6.38;
        }

        else  if(strcasecmp($item, "1% Milk Small") == 0)
        {
            return 1.85;
        }

        else if(strcasecmp($item, "2% Milk Large") == 0)
        {
            return 6.68;
        }

        else if(strcasecmp($item, "2% Milk Small") == 0)
        {
            return 1.93;
        }

        else  if(strcasecmp($item, "Salted Butter") == 0)
        {
            return 4.69;
        }

        else if(strcasecmp($item, "Unsalted Butter") == 0)
        {
            return 4.89;
        }

        else if(strcasecmp($item, "Honeycrisp Apple") == 0)
        {
            return 1.05;
        }

        else if(strcasecmp($item, "Banana") == 0)
        {
            return 0.33;
        }

        else if(strcasecmp($item, "Large Navel Orange") == 0)
        {
            return 1;
        }

         else if(strcasecmp($item, "Bartlett Pear") == 0)
        {
             return 0.88;
        }

        else if(strcasecmp($item, "Celery") == 0)
        {
            return 3.69;
        }

        else if(strcasecmp($item, "English HH Seedless Cucumber") == 0)
        {
            return 1.50;
        }

       else if(strcasecmp($item, "Romaine Lettuce") == 0)
        {
            return 2.99;
        }

        else if(strcasecmp($item, "Red Pepper") == 0)
        {
            return 3.96;
        }

        //--------------------------------------------------------

         else if(strcasecmp($item, "Plain Bagels") == 0)
        {
            return 2.99;
        }

        else if(strcasecmp($item, "Whole Wheat Bagels") == 0)
        {
            return 5.89;
        }

        else if(strcasecmp($item, "Sliced White Bread") == 0)
        {
            return 2.50;
        }

        else  if(strcasecmp($item, "Sliced Whole Wheat Bread") == 0)
        {
            return 4.19;
        }

        else if(strcasecmp($item, "French Baguette") == 0)
        {
            return 2.49;
        }

        else if(strcasecmp($item, "Maple Pastry Bites") == 0)
        {
            return 4.99;
        }

       else if(strcasecmp($item, "Palm Leaf Pastries") == 0)
        {
            return 6.99;
        }

        //--------------------------------------------------------------------------------------

        else if(strcasecmp($item, "Lean Ground Beef") == 0)
        {
            return 3.87;
        }

         else if(strcasecmp($item, "Rib Steak") == 0)
        {
            return 5.29;
        }

        else if($item==("Butterfly Pork Chops") || $item==("Butterfly Pork Chops, 3 Pack"))
        {
            return 4.30;
        }

        else if(strcasecmp($item, "Boneless Chicken Breast") == 0||strcasecmp($item, "Boneless Chicken Breast, 3 Pack") == 0)
        {
            return 5.11;
        }

        if(strcasecmp($item, "Lean Minced Turkey") == 0)
        {
            return 2.99;
        }

        else  if(strcasecmp($item, "Confit Duck Legs") == 0||strcasecmp($item, "Confit Duck Legs, 2 pack") == 0)
        {
            return 8.50;
        }

         else  if(strcasecmp($item, "Salmon Fillet") == 0)
        {
            return 3.42;
        }

       else if(strcasecmp($item, "Haddock Fillet") == 0)
        {
            return 1.61;
        }

         else if(strcasecmp($item, "Live Lobster") == 0)
        {
            return 9.55;
        }

        //------------------------------------------------------------------------------------------

       else  if(strcasecmp($item, "All Purpose Flour") == 0)
        {
            return 8.29;
        }

        else if(strcasecmp($item, "Sugar") == 0)
        {
            return 4.49;
        }

        else if(strcasecmp($item, "Table Salt") == 0)
        {
            return 1.79;
        }

       else if(strcasecmp($item, "Chocolate Chips") == 0)
        {
            return 16.99;
        }


       else if(strcasecmp($item, "Canned Peas") == 0)
        {
            return 1.69;
    
        }

        else if(strcasecmp($item, "Canned Tuna Chunks") == 0)
        {
            return 1.49;
        }

        else  if(strcasecmp($item, "Diced Tomatoes") == 0)
        {
            return 0.99;
        }

        else if(strcasecmp($item, "Tomato Soup") == 0)
        {
            return 1.69;
        }

        else if(strcasecmp($item, "Cream of Mushroom Soup") == 0)
        {
            return 3.29;
        }

        else  if(strcasecmp($item, "Pea and Ham Soup") == 0)
        {
            return 1.99;
        }   

        else  if(strcasecmp($item, "Frozen Pepperoni & Cheese Pizza") == 0)
        {
            return 6.99;
        }

        else  if(strcasecmp($item, "Frozen Chopped Spinach") == 0)
        {
            return 2.99;
        }

        else  if(strcasecmp($item, "Vanilla Ice Cream") == 0)
        {
            return 4.99;
        }
    }


    function itemExists($item)
    {

        if(strcasecmp($item, "Strawberries") == 0)
        {
           return true;
        }
            //Dairy Section
        else if(strcasecmp($item, "Shredded Mozzarella Cheese Bag") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Bagel") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Milk") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Cheddar Cheese") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Strawberry Yogurt Pack") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Blueberry Yogurt Pack") == 0)
        {
           return true;
        }

        else if(strcasecmp($item, "Mixed Fruit Flavoured Yogurt Pack") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Large Eggs") == 0||strcasecmp($item, "30 Large Eggs") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Large White Eggs") == 0||strcasecmp($item, "10 Large White") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Large Brown Eggs") == 0||strcasecmp($item, "10 Large Brown Eggs") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "1% Milk Large") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "1% Milk Small") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "2% Milk Large") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "2% Milk Small") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Salted Butter") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Unsalted Butter") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Honeycrisp Apple") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Banana") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Large Navel Orange") == 0)
        {
            return true;
        }

         else if(strcasecmp($item, "Bartlett Pear") == 0)
        {
             return true;
        }

        else if(strcasecmp($item, "Celery") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "English HH Seedless Cucumber") == 0)
        {
            return true;
        }

       else if(strcasecmp($item, "Romaine Lettuce") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Red Pepper") == 0)
        {
            return true;
        }

        //--------------------------------------------------------

         else if(strcasecmp($item, "Plain Bagels") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Whole Wheat Bagels") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Sliced White Bread") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Sliced Whole Wheat Bread") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "French Baguette") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Maple Pastry Bites") == 0)
        {
            return true;
        }

       else if(strcasecmp($item, "Palm Leaf Pastries") == 0)
        {
            return true;
        }

        //--------------------------------------------------------------------------------------

        else if(strcasecmp($item, "Lean Ground Beef") == 0)
        {
            return true;
        }

         else if(strcasecmp($item, "Rib Steak") == 0)
        {
            return true;
        }

         else  if(strcasecmp($item, "Butterfly Pork Chops") == 0||strcasecmp($item, "Butterfly Pork Chops, 3 Pack") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Boneless Chicken Breast") == 0||strcasecmp($item, "Boneless Chicken Breast, 3 Pack") == 0)
        {
            return true;
        }

        if(strcasecmp($item, "Lean Minced Turkey") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Confit Duck Legs") == 0||strcasecmp($item, "Confit Duck Legs, 2 pack") == 0)
        {
            return true;
        }

         else  if(strcasecmp($item, "Salmon Fillet") == 0)
        {
            return true;
        }

       else if(strcasecmp($item, "Haddock Fillet") == 0)
        {
            return true;
        }

         else if(strcasecmp($item, "Live Lobster") == 0)
        {
            return true;
        }

        //------------------------------------------------------------------------------------------

       else  if(strcasecmp($item, "All Purpose Flour") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Sugar") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Table Salt") == 0)
        {
            return true;
        }

       else if(strcasecmp($item, "Chocolate Chips") == 0)
        {
            return true;
        }


       else if(strcasecmp($item, "Canned Peas") == 0)
        {
            return true;
    
        }

        else if(strcasecmp($item, "Canned Tuna Chunks") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Diced Tomatoes") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Tomato Soup") == 0)
        {
            return true;
        }

        else if(strcasecmp($item, "Cream of Mushroom Soup") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Pea and Ham Soup") == 0)
        {
            return true;
        }  

        else  if(strcasecmp($item, "Frozen Pepperoni & Cheese Pizza") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Frozen Chopped Spinach") == 0)
        {
            return true;
        }

        else  if(strcasecmp($item, "Vanilla Ice Cream") == 0)
        {
            return true;
        }
         
        else 
        {
            return false;
        }
    }

    function itemName($item)
    {

        if(strcasecmp($item, "Strawberries") == 0)
        {
           return "Strawberries";
        }
            //Dairy Section
        else if(strcasecmp($item, "Shredded Mozzarella Cheese Bag") == 0)
        {
            return "Shredded Mozzarella Cheese Bag";
        }

        else if(strcasecmp($item, "Bagel") == 0)
        {
            return "Bagel";
        }

        else if(strcasecmp($item, "Milk") == 0)
        {
            return "Milk";
        }

        else if(strcasecmp($item, "Cheddar Cheese") == 0)
        {
            return "Cheddar Cheese";
        }

        else if(strcasecmp($item, "Strawberry Yogurt Pack") == 0)
        {
            return "Strawberry Yogurt Pack";
        }

        else  if(strcasecmp($item, "Blueberry Yogurt Pack") == 0)
        {
           return "Blueberry Yogurt Pack";
        }

        else if(strcasecmp($item, "Mixed Fruit Flavoured Yogurt Pack") == 0)
        {
            return "Mixed Fruit Flavoured Yogurt Pack";
        }

        else if(strcasecmp($item, "Large Eggs") == 0||strcasecmp($item, "30 Large Eggs") == 0)
        {
            return "Large Eggs";
        }

        else if(strcasecmp($item, "Large White Eggs") == 0||strcasecmp($item, "10 Large White") == 0)
        {
            return "Large White Eggs";
        }

        else if(strcasecmp($item, "Large Brown Eggs") == 0||strcasecmp($item, "10 Large Brown Eggs") == 0)
        {
            return "Large Brown Eggs";
        }

        else if(strcasecmp($item, "1% Milk Large") == 0)
        {
            return "1% Milk Large";
        }

        else  if(strcasecmp($item, "1% Milk Small") == 0)
        {
            return "1% Milk Small";
        }

        else if(strcasecmp($item, "2% Milk Large") == 0)
        {
            return "2% Milk Large";
        }

        else if(strcasecmp($item, "2% Milk Small") == 0)
        {
            return "2% Milk Small";
        }

        else  if(strcasecmp($item, "Salted Butter") == 0)
        {
            return "Salted Butter";
        }

        else if(strcasecmp($item, "Unsalted Butter") == 0)
        {
            return "Unsalted Butter";
        }

        else if(strcasecmp($item, "Honeycrisp Apple") == 0)
        {
            return "Honeycrisp Apple";
        }

        else if(strcasecmp($item, "Banana") == 0)
        {
            return "Banana";
        }

        else if(strcasecmp($item, "Large Navel Orange") == 0)
        {
            return "Large Navel Orange";
        }

         else if(strcasecmp($item, "Bartlett Pear") == 0)
        {
             return "Bartlett Pear";
        }

        else if(strcasecmp($item, "Celery") == 0)
        {
            return "Celery";
        }

        else if(strcasecmp($item, "English HH Seedless Cucumber") == 0)
        {
            return "English HH Seedless Cucumber";
        }

       else if(strcasecmp($item, "Romaine Lettuce") == 0)
        {
            return "Romaine Lettuce";
        }

        else if(strcasecmp($item, "Red Pepper") == 0)
        {
            return "Red Pepper";
        }

        //--------------------------------------------------------

         else if(strcasecmp($item, "Plain Bagels") == 0)
        {
            return "Plain Bagels";
        }

        else if(strcasecmp($item, "Whole Wheat Bagels") == 0)
        {
            return "Whole Wheat Bagels";
        }

        else if(strcasecmp($item, "Sliced White Bread") == 0)
        {
            return "Sliced White Bread";
        }

        else  if(strcasecmp($item, "Sliced Whole Wheat Bread") == 0)
        {
            return "Sliced Whole Wheat Bread";
        }

        else if(strcasecmp($item, "French Baguette") == 0)
        {
            return "French Baguette";
        }

        else if(strcasecmp($item, "Maple Pastry Bites") == 0)
        {
            return "Maple Pastry Bites";
        }

       else if(strcasecmp($item, "Palm Leaf Pastries") == 0)
        {
            return "Palm Leaf Pastries";
        }

        //--------------------------------------------------------------------------------------

        else if(strcasecmp($item, "Lean Ground Beef") == 0)
        {
            return "Lean Ground Beef";
        }

         else if(strcasecmp($item, "Rib Steak") == 0)
        {
            return "Rib Steak";
        }

         else  if(strcasecmp($item, "Butterfly Pork Chops") == 0||strcasecmp($item, "Butterfly Pork Chops, 3 Pack") == 0)
        {
            return "Butterfly Pork Chops";
        }

        else if(strcasecmp($item, "Boneless Chicken Breast") == 0||strcasecmp($item, "Boneless Chicken Breast, 3 Pack") == 0)
        {
            return "Boneless Chicken Breast";
        }

        if(strcasecmp($item, "Lean Minced Turkey") == 0)
        {
            return "Lean Minced Turkey";
        }

        else  if(strcasecmp($item, "Confit Duck Legs") == 0||strcasecmp($item, "Confit Duck Legs, 2 pack") == 0)
        {
            return "Confit Duck Legs";
        }

         else  if(strcasecmp($item, "Salmon Fillet") == 0)
        {
            return "Salmon Fillet";
        }

       else if(strcasecmp($item, "Haddock Fillet") == 0)
        {
            return "Haddock Fillet";
        }

         else if(strcasecmp($item, "Live Lobster") == 0)
        {
            return "Live Lobster";
        }

        //------------------------------------------------------------------------------------------

       else  if(strcasecmp($item, "All Purpose Flour") == 0)
        {
            return "All Purpose Flour";
        }

        else if(strcasecmp($item, "Sugar") == 0)
        {
            return "Sugar";
        }

        else if(strcasecmp($item, "Table Salt") == 0)
        {
            return "Table Salt";
        }

       else if(strcasecmp($item, "Chocolate Chips") == 0)
        {
            return "Chocolate Chips";
        }


       else if(strcasecmp($item, "Canned Peas") == 0)
        {
            return "Canned Peas";
    
        }

        else if(strcasecmp($item, "Canned Tuna Chunks") == 0)
        {
            return "Canned Tuna Chunks";
        }

        else  if(strcasecmp($item, "Diced Tomatoes") == 0)
        {
            return "Diced Tomatoes";
        }

        else if(strcasecmp($item, "Tomato Soup") == 0)
        {
            return "Tomato Soup";
        }

        else if(strcasecmp($item, "Cream of Mushroom Soup") == 0)
        {
            return "Cream of Mushroom Soup";
        }

        else  if(strcasecmp($item, "Pea and Ham Soup") == 0)
        {
            return "Pea and Ham Soup";
        }  

        else  if(strcasecmp($item, "Frozen Pepperoni & Cheese Pizza") == 0)
        {
            return "Frozen Pepperoni & Cheese Pizza";
        }

        else  if(strcasecmp($item, "Frozen Chopped Spinach") == 0)
        {
            return "Frozen Chopped Spinach";
        }

        else  if(strcasecmp($item, "Vanilla Ice Cream") == 0)
        {
            return "Vanilla Ice Cream";
        }
         
        else 
        {
            return "INVALID";
        }
    }
?>
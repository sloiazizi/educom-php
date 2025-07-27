<!DOCTYPE html>
<html lang="en">
    <body>
      <?php
      /* numbers: integers (whole numbers) and floats (decimals). these can be checked using is_int() is_float() and is_numeric()
      why use it? calculations: prices, counts, measures, data etc. example below */

      $example = 5000;
      $example2 = 20.50;
      
      var_dump(is_int($example)); //true
      var_dump(is_int($example2)); //false
      var_dump(is_float($example)); //false
      var_dump(is_float($example2)); //true
      var_dump(is_numeric($example)); //true
      var_dump(is_numeric($example2)); //true
      echo "<br><br>";

      /* Math: built in math functions that can handle things like absolute values, squareroot, min/max, etc.
      why use it? obv statistics, rounding, selection and also geometry
      when to use it? performing math beyond basic operators*/
      echo abs(-23);
      echo sqrt(64);
      echo min(0,150,-10);
      echo max(0,150,-10);
      echo pi();
      echo rand(1,100);
      echo "<br><br>";

      // i dont like how the upper part looks so lets try this instead and see if it works. in earlier example i saw <br> used
      echo  abs(-23) . "<br>" .
            sqrt(64) . "<br>" .
            min(0, 150, -10) . "<br>" .
            max(0, 150, -10) . "<br>" .
            pi() . "<br>" .
            rand(1, 100); //awesome it works c: letsgooooo
      echo "<br><br>";

     /* constants: they are unchangeable variables >> cant undefine them. they dont use $ sign and they are globally available
     across the script. 
     why use them? to store values that would/should never change like: application name, built-in settings or standard config values.
     you can use define() and const() >> const() cannot be defined INSIDE functions or conditional blocks.
     define() can be used ANYWHERE, even inside functions or conditionals
     */ 
      const birthCountry = "The Netherlands";
      echo birthCountry;
      echo "<br><br>";
      /* math: when you see x = 5 and x += 3 then x = 8. so basically first sign = math and second is = ..... 
      */
      $x = 10;
      echo $x++; //je krijgt 10 
      echo "<br>";

      $x = 10;
      echo --$x; //je krijgt dan 9 want eerst verlagen met 1 en dan tonen
      echo "<br>";

      $x = 10;
      echo ++$x; //dus hier is het eerst verhogen en dan tonen
      echo "<br>";

      // operators && = AND (both true) so true&&false = false. ! = not >>> so !true = false

      //if statements
      $t = 14;
      if ($t == 14) {
        echo "Have a good day!";
      }
      echo "<br>";
      ?>

      <?php
      $nummer1 = 200;
      $nummer2 = 33;
      $nummer3 = 500;
      if ($nummer1 > $nummer2 && $nummer1 < $nummer3 ) {
      echo "Both conditions are true <br>";
      }
      
      $condition1 = 100;
      $condition2 = 500;

      if ($condition1) {
        // if $condition1 is true (not 0), this runs
        echo "C1 is true<br>";
      } elseif ($condition2) {
        // if $condition1 is false but $condition2 is true, this runs
        echo "C2 is true<br>";
      } else {
        // if both are false (e.g., both 0), this runs
        echo "Nada nothing is true. Cry cry";
      }
      // switch: A better fit when checking one variable against many values
      ?>
    
    </body>
</html>
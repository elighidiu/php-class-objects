# php-class-objects

## Objectives

Learn about classes & objects, class inheritance, visibility scopes, static methods and properties.

## Tasks

- Create a class beverage.
- Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
- Have a default value "cold" in the construct for temperature.

- Make class beer that extends from Beverage. Create the properties name (string) and alcoholpercentage (float).
- Foresee a construct that allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
- Make a getAlcoholpercentage function which returns the alocoholpercentage.
- Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
- Also the name equal to Duvel and the alcohol percentage to 8,5%
- Print the alcoholpercentage 2 times on the screen in two different ways, print the percentage on the screen and with the method getInfo(). 
- Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() 

- Make all properties private. Make all the other prints work without error.
- Create a new public method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color. Make sure that u use the variables and not just this text line.

- Make a static property in the Beverage class that can only be accessed from inside the class called timesServed, an integer with default value 0.
- Every time a new Beverage is created add 1 to timesServed. You will need to alter the constructor for this. 
- Create a number of Objects based in your favorite beverages!
- At the last line of your script, display the times a drink was served.

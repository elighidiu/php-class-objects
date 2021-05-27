
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//inmutable object is an object that has no changeble state after initial constructor
    class Beverage{
        private string $color;
        private float $price;
        private string $temperature;
        private static int $timesServed = 0;

        function __construct(string $color, float $price, string $temperature = 'cold') {
            $this->color = $color;
            $this->price = $price;
            $this->temperature = $temperature;
            self::$timesServed+=1;
        }

        public static function getTimesServed(){ //I have to use getters to obtain info for times served becasue it's a private property
            return self::$timesServed; 
        }
        public function getInfo () {
            echo "This beverage is " . $this->temperature . " and " . $this->color . "\r\n";

        }
    
        public function setColor($color){
            $this->color = $color;
       }

       
        public function getColor(){
            return $this->color;
        }

    }

    class Beer extends Beverage {
        private string $name;
        private float $alcoholpercentage;
       

        function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage){
            $this->name = $name;
            $this->alcoholpercentage = $alcoholpercentage;
            parent::__construct($color, $price, $temperature);
        }


        public function getalcoholpercentage(): float{
            return $this->alcoholpercentage;
        }

        function getInfo () {
            echo "<br> This beverage is " . $this->alcoholpercentage;

        }
        
        public function beerInfo() {
            return "Hi I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholpercentage . " and I have a " . $this->getColor() ; //!!!!!!!!!!!issue here

        }
       
       
    }

    $Duvel = new Beer ('blond', 3.5, 'cold', 'Duvel', 8.5);
    
    $Jupiler = new Beer ('green', 3.5, 'cold', 'Jupiler', 7.5);

    $Stella = new Beer ('golden', 3.5, 'cold', 'Stella', 6.5);

    $Bella = new Beer ('golden', 3.5, 'cold', 'Bella', 6.5);

    echo "<br>" . $Duvel->getAlcoholpercentage(); // if we instead try to get the alcohol percentage for $cola then we receive Call to undefined method Beverage::getAlcoholpercentage()
    //echo "<br>" . $beer->alcoholpercentage .  "%";
    echo "<br>" . $Duvel -> getInfo();
    echo "<br>" . $Duvel -> getColor();
    $Duvel -> setColor('red');
    echo "<br>" . $Duvel -> getColor();
    echo "<br>" . $Duvel -> beerInfo();
    echo "<br> There are " . Beverage::getTimesServed() . " beers created";

?>
</body>
</html>
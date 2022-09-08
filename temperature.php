<!-- PHP script -->
<?php
    // embeds PHP code from metric.php file
    include_once 'metric.php';

    // Temperature class (sub class) - extends Metric abstract class
    class Temperature extends Metric
    {
        /* 
            getMetricAmount function 
            - implements abstract method that was defined in the super class
            - gets metric amount
            - returns value to calling method within class
        */
        public function getMetricAmount() {
            $v = $this->amount;
            return $v;
        }

        // converts metric amount from celsius to fahrenheit 
        // returns value to calling method in external class
        function celsiusToFahrenheit() {
            return round(($this->getMetricAmount() * 9/5) + 32);
        }
        
        // converts metric amount from celsius to kelvin
        // returns value to calling method in external class
        function celsiusToKelvin() {
            return ($this->getMetricAmount() + 273.15);
        }
    
        // converts metric amount from fahrenheit to celsius
        // returns value to calling method in external class
        function fahrenheitToCelsius() {
            return round(($this->getMetricAmount() - 32) * 5/9);
        }
    
        // converts metric amount from fahrenheit to kelvin
        // returns value to calling method in external class
        function fahrenheitToKelvin() {
            return round(($this->getMetricAmount() - 32) * 5/9 + 273.15);
        }
    
        // converts metric amount from kelvin to celsius
        // returns value to calling method in external class
        function kelvinToCelsius() {
            return ($this->getMetricAmount() - 273.15);
        }
    
        // converts metric amount from kelvin to fahrenheit
        // returns value to calling method in external class
        function kevinToFahrenheit() {
            return round(($this->getMetricAmount() - 273.15) * 9/5 + 32);
        }
    }
?>
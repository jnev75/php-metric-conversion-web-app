<!-- PHP script -->
<?php
    // embeds PHP code from metric.php file
    include_once 'metric.php';

    // Distance class (sub class) - extends Metric abstract class
    class Distance extends Metric
    {
        /*
            getMetricAmount method 
            - implements abstract method that was defined in the super class
            - gets metric amount
            - returns value to calling method within class
        */
        public function getMetricAmount() {
            $v = $this->amount;
            return $v;
        }

        // converts metric amount from metres to kilometres 
        // returns value to calling method in external class
        function metresToKilometres() {
            return ($this->getMetricAmount() / 1000);
        }
        
        // converts metric amount from metres to miles 
        // returns value to calling method in external class
        function metresToMiles() {
            return round(($this->getMetricAmount() / 1.609));
        }
    
        // converts metric amount from kilometres to metres
        // returns value to calling method in external class
        function kilometresToMetres() {
            return ($this->getMetricAmount() * 1000);
        }
    
        // converts metric amount from kilometres to miles
        // returns value to calling method in external class
        function kilometresToMiles() {
            return round(($this->getMetricAmount() / 1.609));
        }
    
        // converts metric amount from miles to metres
        // returns value to calling method in external class
        function milesToMetres() {
            return round(($this->getMetricAmount() * 1.609));
        }
        
        // converts metric amount from miles to kilometres
        // returns value to calling method in external class
        function milesToKilometres() {
            return round(($this->getMetricAmount() * 1.609));
        }
    }
?>
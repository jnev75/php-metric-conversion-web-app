<!-- PHP script -->
<?php
    // embeds PHP code from metric.php file
    include_once 'metric.php';

    // Weight class (sub class) - extends Metric abstract class
    class Weight extends Metric
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

        // converts metric amount from grams to kilograms 
        // returns value to calling method in external class
        function gramsToKilograms() {
            return round($this->getMetricAmount() / 1000);
        }
    
        // converts metric amount from grams to tonnes 
        // returns value to calling method in external class
        function gramsToTonnes() {
            return ($this->getMetricAmount() / 1000000);
        }
    
        // converts metric amount from kilograms to grams
        // returns value to calling method in external class
        function kilogramsToGrams() {
            return round($this->getMetricAmount() * 1000);
        }
    
        // converts metric amount from kilograms to tonnes
        // returns value to calling method in external class
        function kilogramsToTonnes() {
            return round($this->getMetricAmount() / 1000);
        }
    
        // converts metric amount from tonnes to grams
        // returns value to calling method in external class
        function tonnesToGrams() {
            return ($this->getMetricAmount() * 1000000);
        }
    
        // converts metric amount from tonnes to kilograms
        // returns value to calling method in external class
        function tonnesToKilograms() {
            return round($this->getMetricAmount() * 1000);
        }
    }
?>
<!-- PHP script -->
<?php
    // Metric abstract class (super class)
    // - declares a protected variable called amount
    // - features one non-abstract method for setting the metric amount
    // - features one abstract method for getting the metric amount
    // - this property can be inherited by derived sub classes
    // - makes the code more maintainable, re-usable and scalable
    abstract class Metric 
    {
        protected $amount;

        public function setMetricAmount($metricValue) {
            $this->amount = $metricValue;
        }

        abstract public function getMetricAmount();
    }
?>
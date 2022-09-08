<!-- Index View (index.view.php file) for PHP web application -->

<!-- PHP script -->
<?php
    // require statement
    // - firstly checks if file is already included
    // - embeds PHP code from other relevant files into this one
    require_once('classes.php');

    // PHP super global variables 
    // - collect form data after submission
    // 4 variables 
    // - initialised with value from each PHP super global variable
    // 1 variable
    // - declared but not initialised
    $metricValue = $_POST['value'];
    $metricType = $_POST['metric'];
    $firstMetric = $_POST['first-select-box'];
    $secondMetric = $_POST['second-select-box'];
    $answer;

    // MetricCalculationController class
    class MetricCalculationController
    {
        /*
            store function
            - accessible outside scope of class within PHP script
            - uses a new metric object instance within nested switch block 
            - to call relevant functions for implementation
            - metricValue variable is used to perform conversion
            - value returned is assigned to ans variable
            - returns ans variable with relevant metric unit to the calling method
        */
        public function store(Metric $metric, $metricValue, $met1, $met2) {   
            switch ($met1) {
                case "metres": 
                    switch ($met2) {
                        case "kilometres":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->metresToKilometres();
                            return $ans." km";
                        case "miles":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->metresToMiles();
                            return $ans." mi";
                    }
                case "kilometres": 
                    switch ($met2) {
                        case "metres":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->kilometresToMetres();
                            return $ans." m";
                        case "miles":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->kilometresToMiles($metricValue);
                            return $ans." mi";
                    }
                case "miles": 
                    switch ($met2) {
                        case "metres":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->milesToMetres();
                            return $ans." m";
                        case "kilometres":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->milesToKilometres();
                            return $ans." km";
                    }
                case "celsius":
                    switch ($met2) {
                        case "fahrenheit":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->celsiusToFahrenheit();
                            return $ans." °F";
                        case "kelvin":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->celsiusToKelvin();
                            return $ans." K";
                    }
                case "fahrenheit":
                    switch ($met2) {
                        case "celsius":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->fahrenheitToCelsius();
                            return $ans." °C";
                        case "kelvin":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->fahrenheitToKelvin();
                            return $ans." K";
                    }
                case "kelvin":
                    switch ($met2) {
                        case "celsius":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->kelvinToCelsius();
                            return $ans." °C";
                        case "fahrenheit":
                            $metric->setMetricAmount($metricValue);
                            $ans = $metric->kelvinToFahrenheit();
                            return $ans." °F";
                    }
                    case "grams":
                        switch ($met2) {
                            case "kilograms":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->gramsToKilograms();
                                return $ans." kg";
                            case "tonnes":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->gramsToTonnes();
                                return $ans." t";
                        }
                    case "kilograms":
                        switch ($met2) {
                            case "grams":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->kilogramsToGrams();
                                return $ans." g";
                            case "tonnes":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->kilogramsToTonnes();
                                return $ans." t";
                        }
                    case "tonnes":
                        switch ($met2) {
                            case "grams":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->tonnesToGrams();
                                return $ans." g";
                            case "kilograms":
                                $metric->setMetricAmount($metricValue);
                                $ans = $metric->tonnesToKilograms();
                                return $ans." kg";
                        }
            }
        }
    }

    // create controller variable
    // and initialise it with new instance of preceding class as value
    $controller = new MetricCalculationController();

    /*
        switch block
        - features a set of case statements
        - evaluates the condition (in this case a variable)
        - compares the result against one or more case statements within the block
        - to try and find a match
        - once a match is found, the code within that case is executed
        - break statement is used to exit the switch block
    */
    switch ($metricType) {
        case "Distance":
            $answer = $controller->store(new Distance(), $metricValue, $firstMetric, $secondMetric);
            break;
        case "Temperature":
            $answer = $controller->store(new Temperature(), $metricValue, $firstMetric, $secondMetric);
            break;
        case "Weight":
            $answer = $controller->store(new Weight(), $metricValue, $firstMetric, $secondMetric);
            break;       
    }
?>
<!-- HTML markup -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Metric Conversion Application</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Metric Conversion Application</h1>
        </header>
        
        <main>
            <fieldset>
                <legend>Metric Conversion Results:</legend><br>
                <p>Metric Type:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $metricType; ?></p>
                <p>Metric Value:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $metricValue; ?></p>

                <p>
                    From:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" 
                    value="<?php echo ucfirst($firstMetric); ?>" readonly>&nbsp;&nbsp;&nbsp;

                    To:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
                    value="<?php echo ucfirst($secondMetric); ?>" readonly>
                </p>
                    
                <p>Answer:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $answer; ?></p>
            </fieldset>
            
            <br><a href="http://php_metricconversionapp.test/">Return</a> 
        </main>

        <footer>
            <p class="copyright-text">
                Copyright &copy; 2022 All Rights Reserved by James L Neville.
            </p>
        </footer>
    </body>
</html>
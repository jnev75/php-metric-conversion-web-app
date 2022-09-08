// Script (script.js file) for PHP web application -->

// selects all HTML document radio button elements by type
// returns 3 elements in the form of a node list
// assigns this list to radioButtons variable as value
let radioButtons = document.querySelectorAll('input[type=radio]');
// selects all HTML document select elements by tag
// returns 2 empty elements in the form of a node list
// assigns this list to selectBoxes variable as value
let selectBoxes = document.querySelectorAll('select');
// declares a variable named options
let options;

// creates 3 JavaScript arrays, each with 3 elements
// each array is assigned to a variable for each metric class
let distanceMetrics = ["Metres", "Kilometres", "Miles"];
let temperatureMetrics = ["Celsius", "Fahrenheit", "Kelvin"];
let weightMetrics = ["Grams", "Kilograms", "Tonnes"];

// for each radio button inside radioButtons list, append a click event listener
// this handles each mouse click made to a radio button within the form
// once triggered, it will call the function radioButtonClicked
// with radio button that was clicked as an argument
radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener('click', (e) => {
        radioButtonClicked(e.target);
    });
});

// declares 2 variables for both select boxes
// initialises them with each respective element from the selectBoxes list
let selectBox1 = selectBoxes[0];
let selectBox2 = selectBoxes[1];

// appends a change event listener to selectBox1
// this handles each change made to the select box
// in terms of option selected
// once triggered, it will call the function optionElementChanged
// with option that was selected as an argument
selectBox1.addEventListener('change', (e) => {
    optionElementChanged(e.target);
});

/*
    radioButtonClicked function
    - declares selectedValue variable
    - initialises it with value of radio button clicked
    - switch block evaluates this variable and tries to find matching case
    - once a match is found, the code within that case is executed
    - calls the function default_SelectBoxes
    - with one of the 3 metric arrays passed as an argument
    - break statement is used to exit the switch block
*/
function radioButtonClicked(radio) {
    selectedValue = radio.value;

    switch (selectedValue) {
        case "Distance":
            default_SelectBoxes(distanceMetrics);
            break;
        case "Temperature":
            default_SelectBoxes(temperatureMetrics);
            break;
        case "Weight":
            default_SelectBoxes(weightMetrics);
            break;
    }
}

/*
    optionElementChanged function
    - declares new selectedValue variable
    - initialises it with value of option element changed
    - switch block evaluates this variable and tries to find matching case
    - once a match is found, the code within that case is executed
    - calls the function update_SelectBox2
    - passes 2 arguments to this function for further implementation
    - break statement is used to exit the switch block
*/
function optionElementChanged(option) {
    selectedValue = option.value
    
    switch (selectedValue) {
        case "metres":
        case "kilometres":
        case "miles":
            update_SelectBox2(distanceMetrics, selectedValue);
            break;
        case "celsius":
        case "fahrenheit":
        case "kelvin":
            update_SelectBox2(temperatureMetrics, selectedValue);
            break;
        case "grams":
        case "kilograms":
        case "tonnes":
            update_SelectBox2(weightMetrics, selectedValue);
            break;
    }
}

/*
    default_SelectBoxes function
    - declares options variable
    - initialises it with value returned from a call to populate_SelectBoxes function
    - for each select box inside selectBoxes list, add all default option elements
    - the options added will depend on the metric radio button selected above 
    - removes the first child element from selectBox2 
*/
function default_SelectBoxes(metrics) {
    options = populate_SelectBoxes(metrics); 
    
    selectBoxes.forEach(function(selectBox) {
        selectBox.innerHTML = options;
    });

    selectBox2.removeChild(selectBox2.firstChild);
}

/* 
    populate_SelectBoxes function
    - has a map method which lets you iterate over 
      and modify the content of an existing metric array
    - during each iteration a new option element is constructed
    - 3 options will be made in total
    - once new array is created it is then assigned to the options variable
      and returned to the calling method
*/ 
function populate_SelectBoxes(metrics) {
    options = metrics.map(metric => 
    `<option value=${metric.toLowerCase()}>${metric}</option>`).join('\n');
    return options;
}

/* 
    update_SelectBox2 function
    - has a filter method which creates a new array 
      with only the elements which pass the test
    - once new array is created it is then assigned to the newMetrics variable
    - this variable is then passed as an argument to the function 
      populate_SelectBoxes
    - updates the option content of select box 2 by excluding the option that 
      was selected from select box 1
    - the value returned from this function call is assigned to the options variable
    - populates select box two with options variable
*/
function update_SelectBox2(metrics, selectedValue) {
    let newMetrics = metrics.filter((m) => m.toLowerCase() !== selectedValue);
    
    options = populate_SelectBoxes(newMetrics);
    selectBox2.innerHTML = options;
}
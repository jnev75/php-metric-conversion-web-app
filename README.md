# PHP Metric Conversion Web Application

**Version 1.0**

This is a sample readme file for my GitHub repo. I'm using Markdown

* I'm developing an Object Oriented Web Application
* Using PHP version 7.4.9

Authorship documentation for the newly created project

## Any known bugs

---

## Update log

---

## Contributors

- James L Neville 

---

## License & copyright

© James L Neville, PHP Metric Conversion Web Application

---

## Terms of use

By using this web application, you acknowledge that the content developed is subject to copyright enforcement. This intellectual property right grants that the application may be used solely for personal use, as a reference, or for intended research purposes.

This policy also implies that the application cannot be modified, duplicated, re-distributed to a third party, or exploited for commercial use.

Any illegitimate use of the application will be considered a breach of the terms of use agreement. This may further violate copyright and trademark laws which are bound by the Copyright, Designs and Patents Act 1988

## Operations
The metric conversion web application will use 4 form fields (metric value, metric type, first metric and second metric), to convert between metric units. 

To begin testing this web app, the user must firstly open their project folder 'php_metricconversionapp', using a text editor such as Visual Studio Code. Next, the user must run their web server (in my case valet), using the correct command from their terminal. Once the web server has started, they can then open the file index.html using a web browser like Google Chrome.
The file is purposefully given the name index, as it is essentially the default page of the website. This is the first web page that is displayed, once the user visits the website. The home page is really an index to all of the main pages that feature on the website. This web page has a metric form which the user must complete, before they can convert between metric units.

Once the home page loads, the user can begin a conversion by entering an integer (whole number) into the number field. This will be the metric value used for the conversion. The user's web browser may also provide stepper arrows for this field. This feature lets the user maximise or minimize the metric value. The metric value must be within the pre-defined interval of 1 - 10000 and cannot be a decimal. 

Next, the user must select a metric type from the radio button group. Only one radio button can be selected from the radio group. But the user can deselect a radio button by selecting an alternative option.
The radio button options are: Distance, Temperature and Weight. 

Below this, both select boxes will be populated with the metric unit options that relate to that metric type.

Distance metric units: 
- Metres, Kilometres, Miles

Temperature metric units:
- Celsius, Fahrenheit, Kelvin

Weight metric units:
- Grams, Kilograms, Tonnes

The metric unit option that is selected from select box 1 will be omitted from select box 2.

Once the user is satisfied with their form data entries, they can then proceed with the conversion by selecting the submit button.

At this stage, the conversion is then processed. Finally, the browser will load the view from the file index.view.php and render the answer returned from the conversion to the new form.

Both text input fields are set to read only, so the results cannot be modified.

Below the metric conversion results form, there is also a link named 'Return', which takes the user back to the metric form.
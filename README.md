# Test assignment:

1. Create a simple web form (design doesn't matter) with fields:

* Name
* Personal identification number
* Loan amount
* Period in months
* Purpose of use

2. Check on the PHP side:

* the name is filled in with at least two names (first and last name)
* the correctness of the personal identification number, it has to be an Estonian personal identification code (you can find logic here: https://gist.github.com/tuupola/180321)
* the loan amount is a minimum of 1,000 and a maximum of 10,000
* that the period is not less than 6 months nor more than 24 months
* the purpose of use would include at least one of the words: holiday, repair, consumer electronics, wedding, rental, car, school, investment

3. Return the list of defects to the form

4. Write the results of each application to a separate file on disk. Choose the file format yourself

5. Write at least one automatic/unit test of your choice to test

Included is a composer.json file of the libraries we typically use. Please do not use other libraries or frameworks. It is not important to use all libraries.
Let us know if you need some help or clarification! 

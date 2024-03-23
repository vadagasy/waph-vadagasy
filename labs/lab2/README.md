# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Srujana Vadagandla

**Email**: vadagasy@mail.uc.edu

![Srujana](image/srujana.jpg){width=150px height=150px}

# Lab 2 - Front-end Web Development

## Overview : 
This lab explores the construction of front-end web applications in further detail. In relation to Lab 2, I learned how to make a web application by incorporating images and forms with a few simple HTML tags and JavaScript. I also made an HTTP GET and POST request and used the inspect element to further evaluate the request, response, and status code. Subsequently, Jquery, CSS, and Ajax were utilized to improve the online application and simplify the code. After all pertinent screenshots were captured and included, and the material was produced in markdown, the pandoc tool was used to build the PDF file.



[https://github.com/challans216/waph-challans/blob/main/lab/lab2/README.md](https://github.com/challans216/waph-challans/blob/main/lab/lab2/README.md)



## Task 1 : Basic HTML with forms, and JavaScript

### a. HTML

The code for the straightforward http form in the following image reroutes the echo.php file that we produced in the previous lab upon submission.

![Code for HTML page creation](images/1.png)

![Resultant webpage](images/2.png)

![Resultant webpage](images/3.png)

### b. JavaScript
The code we wrote for inline JS to log a message to the console upon a text input's keypress event is shown in the following image.

![Before clicking on the showdate and email](images/4.png)

The above code is implemented and is shown as below

![Date](images/5.png)

The below image shows inline js that has been written to show date on mouse click

![Screenshot show date](images/6.png)

The below image displays the code for analog and the digital clock

![Screenshot clocks](images/7.png)

The output of the above code is displayed as below

![Screenshot clocks](images/8.png)



## Task II -  Ajax, CSS, jQuery, and Web API integration

### a: Ajax

After the JS and HTML i got familiarized with AJAX. Ajax is employed to retrieve data and send asynchronous requests to the server. To perform these calls, it uses the XMLHTTPRequest Object. The benefit is that we can dynamically change our website's content without having to reload the entire page.
For that we have used input function and button to send the GET request to echo.php file which was created as a part of Lab1 and the response has been captured through the inspect element.
Below are the screenshots of the output response which was made through Ajax request.


![Ajax response](images/Ajax request network.png)

### b. CSS 

As a part of this section i tried to add styling to the webpage. Initially a demo was created with the usage of inline CSS by changing the background color. Then after the <style> element in head section was used to style the webpage. 

![Adding Style to Webpage](images/CSS 2bi.png)


### c: JQuery

Learned about the jQuery library after that. This library can be used to choose HTML elements; it takes the place of functions like document.getElementById. This also serves as a convenient way to make ajax requests to the backend without having to create an instance of xmlhttprequest and write event handlers for it.
Created a jquery Get and post Request and the reponses have been captured in the below screenshot.


![JQuery GET request response](images/Jquery get request.png)

![JQuery POST request response](images/Jquery post request.png)


### d:  Web API integration
Lastly, the studied  is about the JavaScript built-in fetch API, which can be utilized in place of the xhr. The promise is returned by the retrieve() method. Thus, to create asynchronous behavior, we can use async await keywords in place of callback methods.
For this is to execute we have took some API's which are of free and tried to fetch the data. Json objects have been used to retrieve the data from the response of the API.

The first API displays the programming joke of the day which ia a free source api and the JSON object joke has been used to print the response.

![API Webpage-Joke of the day](images/JokeofthedayAPI.png)

![API Response-Joke of the day](images/JokeofthedayAPI.png)



The Second API is to get the age by taking name as input. An random age will be fetched based on the age Json oject.


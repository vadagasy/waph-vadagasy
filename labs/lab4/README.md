# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Srujana Vadagandla

**Email**: vadagasy@mail.uc.edu

![Srujana](images/srujana1.jpg)


# Lab 2 - Front-end Web Development

## Overview : 
This lab gave me knowledge. Understanding session management for PHP web application testing and deployment. I saw the post-test session using Wireshark. identifying session-jacking. In part two, I learned about the security of the session, session authentication, and authentication in Unsecured Session Part 3. Together with screenshots of the attacks, all of these have been documented in the README file. After all pertinent screenshots were captured and included, and the material was produced in markdown, the pandoc tool was used to build the PDF file.




[https://github.com/vadagasy/waph-vadagasy/blob/main/lab/lab4/README.md](https://github.com/vadagasy/waph-vadagasy/blob/main/lab/lab4/README.md)



## Task 1 : Understanding Session Management in a PHP Web Application

### 1.a. Deploy and test

To check the sessions, a file called session.php is written, deployed to the web server, and visited using a browser.

(images/1.png)
 
session page in a different browser

(images/2.png)

### 1.b Observe the Session-Handshaking using Wireshark
The browser's session handshaking is observed using Wireshark following the deployment of the sessiontest.
(images/3.png)

(images/4.png)

(images/5.png)

(images/6.png)

Discussion:A number of stages were engaged in the handshaking procedure. It is noticeable that the cookie is not set in the first request and that it is set in the following response that follows the request.

### 1.c Understanding Session Hijacking
Using PHPSESSID, which is obtained through document.cookie as a hack, the session is taken over.

(images/7.png)

(images/8.png)

(images/9.png)




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

After learning JavaScript and HTML, I began utilizing AJAX. AJAX allows us to retrieve data and communicate with the server without waiting. To do this, it makes use of the XMLHTTPRequest Object. This implies I may alter the content on our website without having to reload the entire page. I accomplished this by utilizing a custom input box and a button to request information from a file called echo.php, which I created in our first lab. Then I examined the responses by inspecting a section of the browser. 
Here are some images of what happened when I used AJAX to request this information.


![Ajax response](images/9.png)
![Ajax response](images/10.png)

### b. CSS 
I also tried the basic style i.e CSS1 for the waph-vadagasy.html and the output is attached below.

![Adding Style to Webpage](images/Css1.png)

In this section 2b, I focused on making the website seem better. First, I created a simple example to demonstrate how to alter the background color using inline CSS. Later, I added more styles to the homepage using the "<style>" element in the head section.

![Adding Style to Webpage](images/11.png)
![Adding Style to Webpage](images/12.png)


### c: JQuery

I then began working on the jQuery library. You may use this library in place of methods like `document.getElementById} to assist in selecting HTML elements. Additionally, it simplifies the process of sending AJAX queries to the backend by eliminating the need to create an instance of `XMLHttpRequest` and provide event handlers for it. I sent out a jQuery GET and POST request, and the screenshot below shows you what I got back.

![JQuery GET request response](images/13.png)

![JQuery GET request response](images/14.png)

![JQuery POST request response](images/15.png)


### d:  Web API integration
At last, I got to know that the integrated JavaScript Fetch API may be utilized in place of the outdated XMLHttpRequest (XHR). Instead of depending on callback functions for asynchronous activities, we may utilize the 'async' and 'await' keywords thanks to the Fetch API, which delivers a promise from the 'fetch()' method.

I fetched data using a few free APIs to put this into practice. In order to retrieve data from the API answers, I worked with JSON objects.


I get the daily joke about programming from the first API I tested. I utilized the free-source API's 'joke' JSON property to show the joke in the response.

![API Webpage-Joke of the day](images/16.png)

![API Response-Joke of the day](images/17.png)

![API Response-Joke of the day](images/18.png)




Inorder to know the age ,it is used in Second API.Which is done by taking name as the input , and the output for that is a random age of a person generated by the JSON object.


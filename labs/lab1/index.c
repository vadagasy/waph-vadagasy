#include <stdio.h>
int main() {
	const char *htmlContent = "<!DOCTYPE html> <html> <head> <title> Web Application Programming and Hacking </title>" "</head> <body> <h1> Student name : Srujana </h1>"
	"<p>This is the Lab1 Assignment for Web application programming and hacking and the exercise that currently i am working is CGI Web application with C and HTML. </p> </body> </html>";
	printf("Content-Type: text/html\n\n");
	printf("%s" , htmlContent);
	return 0;
}
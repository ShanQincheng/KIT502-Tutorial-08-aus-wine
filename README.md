#Tutorial 8
In this tutorial, we are going to apply the state management using Laravel.
## Activity 1 – Authentication
You are going to create registration, login and logout function using Laravel. When a user clicks the
registration button, the user can register himself/herself into the web page (The user information is
added into the database).
A user can register into the web page (The form validation is required).
e.g.) when the password and confirm password do not match
A registered user can login to the web page using login button.
Semester 1, 2022
A registered user can logout.
## Activity 2 – Authorisation
If a user is not logged in, he/she cannot access to the views/wines/index.blade.php page. The page
redirects to the login page (Hint: it can be easily done with Laravel once you have constructed the
middleware in Controller).
There are two access levels: customer and staff. Both can access to views/wines/index.blade.php to
see the list of wines, but staff only can add/delete/update the wine list.
When a customer is logged in, there is no button displayed to add/delete/update the wine list.
Semester 1, 2022
When a staff logged in, buttons are displayed to manipulate the wine list.
Completed Task
You are required to upload the completed tutorial tasks on MyLO. The relevant files for this tutorial
task from controller, model, view will be submitted. You also provide your link address in a text file.
E.g. ictteach-www.its.utas.edu.au/syeom/myApp/public/index.php
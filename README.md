# CRUD WITH PHP OOP

This is PHP CRUD application for Create, Read, Update or Delete data in database.
This application specially make for insert user info in the database, and update,read and delete users from database.


## Features
With this application we are able to 
- We can insert data in database.
- We can read data from database.
- We can update inserted data in database.
- We can delete inserted data in database.

## File Structure
* `index.php` : Here will be display all the inserted user, and can take actions for inserted user. Also we can add a new user from here. 

* `create_user.php` : Here we can create new user with the form.

* `update.php` : We can update user from this page.

* `delete_user.php` : We can delete user from this.

* `user.php` : It's contain the user class, inside that have all user methods.

* `db_connections.php` : in this file have all the info about database and this is base database connection for this application.


## Day 01:
- First I'm create the Database class, in this class I add all the porperts and methods for database connection and return the connecetd db connection. 
    - I make the db information private for can't access db info from out side of this class.
    - return the db connection in a geter public function for with the help of this class can modify the connected database.

- I'm create the User class, in this class i add createUser, updateUser, deleteUser, getUsers methods. 
    - here i learn about many query like how to get a row via id how to get db's table how to insert data in spacific colom how to update that and how to delete that.

## Day 02:

- In this day i spareate the classes witch was writed in the same page 
    - created db_connections.php page for the Database class. 
    - now i learn how to work moduler in php with the help of include i atteched the db_connections.php file in the index.php
    - now create the html form fore inster user info in db in the index.php
    - and make a display.php file for read the users table data 
    - after that fix some issues then i started to working 

## Day 03:

- Today i complete the overall CRUD and make a new file fore every action like for updte i create upate.php, for crate new user i crate create_user.php like so....

- Added tailwid cdn for update ui.
- compelte all the methods and test it working proprly. 

- created a new method for get indiviul user with there id

- make the update form dynamic and inside the form field user can see there pre info.
- after complete any of those acction alwase the return in the index.php page with this line of code header("Location:index.php");






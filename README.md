# Event_reservation
Ticktein - Event creation and reservation system 
# features
- A landing page
- Signup/login
- Create an event
- View an event
- Book an event
- View Cart
- Checkout
- Dashboard to view your tickets
- Events created are visible to any user who logs in. 

## How to Install

#Requirements :
- php>5.6 with mbstring, zip and xml extension. (They should be preinstalled but you might need to do that manually)
- Download Xampp https://vitux.com/how-to-install-xampp-on-your-ubuntu-18-04-lts-system/, follow instructions on this page
- Download composer from https://getcomposer.org/download/ , follow the instructions on page
- git

#Get the source code on your machine via git
- git clone https://github.com/Syedmuhammad07/Ticktetein.git
- open http://localhost/phpmyadmin/ and create a new empty database 
- open .env file and replace DB_Database name with the name of your empty database. 
- Also, change the DB_username, DB_password and DB_port according to your created database.

#go to project folder
- open terminal and Run the following commands
- sudo /opt/lampp/lampp start (to start Xamp)
- cd to the project folder
- composer install
- php artisan key:generate 
- php artisan migrate (to create and populate the empty database created)
- php artisan serve (to start the app on http://localhost:8000/)


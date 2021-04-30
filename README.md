## *About Booking

Booking is an appilcation that you can use to book a seat for a bus trip. <br>
All you need to do is to pick your start station and end station <br>
Then you can see all the available seats that you can book from.

## *Steps to follow

## *To install booking app on your local machine, kindly follow these steps.

- git clone https://github.com/hamdymagdy26/booking.git

- create .env file with your database configurations.

- run composer install.

- create a database in your phpmyadmin, for examlpe : booking

- run php artisan migrate

- run php artisan db:seed .. this will insert some dummy data into your database for testing purposes.

## *For testing the APIs

- kindly import this collection into your postman or insomnia. <br>
https://www.getpostman.com/collections/a25a561d0d9674bec429

- or check the API documentation from here : <br>
https://documenter.getpostman.com/view/12771050/TzRLkVhB

- your_domain/api/login : <br>
this will generate a token for you that you need for accessing the other APIs <br>
you can use ("email" : "hmdymgdy@gmail.com", "password" : "123456") for successful login

- your_domain/api/getAvailableSeats : <br>
this will get all available seats of a given start and end city stations.

- your_domain/api/book : <br>
this will book a seat for you if it's available

## *Database structure

- you will find a file called "db_structure" in the root project folder, kindly import it into draw.io and feel free to check the structure.


## *Docker

- kindly check the docker-compose.yml file in the root folder.
# FOLDER STRUCTURE

### /app 

* `User.php` is a Model file
* larvel doesn't include a Model folder
___
### /app/Exceptions
    
* In this file you can handle every Excetion possible
___
### /app/Middleware
* inside there are the all the middleware
* each middleware has a  specific task to performe
___
### /app/Console/kernel.php
* in here all the middleware has beeen registered
___
### /app/Providers
 * in here we can register structuers and methods to exicute automaticaly during thr start of the programm `AppServiceProvider.php`
___
### /app/config
* every configurable data in here
___
### app/database/factories

* how to create a instance of a specific Model  
___
### app/database/migrations
* this create the structure of a specific model
___
### app/database/seeds
* here we can exicute factories or seeder for get the fake data to models
___
### app/resources/lang\en
* all the validations
* paginations 
* authantication
* passwords

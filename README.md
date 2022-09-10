
## About This E-Councilor App :simple_smile:

This project is my lab task. This project has following features
-User Login
-User Registration
-Log Out
-Submit Request
-View Request
-Role ( General User, Councilor) 

## How to run this project on your pc?
Step 1: Clone project  
Step 2: Go to the folder application using cd command on your cmd or terminal  
Step 3: Run composer install on your cmd or terminal  
Step 4:Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu  
Step 5: Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.  
Step 6: Run php artisan key:generate  
Step 7: Run php artisan migrate  
Step 8: Run php artisan serve  
Step 9: Go to http://localhost:8000/  
Congrats :smile:

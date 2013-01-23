# JS Error Logs - PHP/MySQL

This code interprets the data sent from log.js and stores the information in a MySQL database.

### How to install

1. Create a MySQL database (or open up a new one) and run the CREATE TABLE statement
found in database.sql. You can call the table whatever you want, but **js_errors** is the 
default name.
2. Update the database settings at the top of the *logError.php* file.
3. Update the ***logErrorURL*** setting in log.js to point to the *logError.php* file. While 
setting it up, you might want to change the **debugMode** setting to true. That will output a little
more information to the console - i.e. what's being sent to the server, and what comes back from the 
server. If there was an SQL error, you can find it in the XMLHttpRequest Object response.
4. Try loading up /tests/index.html in your browser. When you click the button, it should throw an
error and submit the error information to the server for storage in the database.


Ben Keen
[@vancouverben](https://twitter.com/#!/vancouverben)
# PHP-DEMO

This is a demo website created for a job application. There has been used PHP, some Javascript (jQuery) and MySQL to create this website.

## FUNCTIONALITIES

* **(PHP)** Page numbers in the review section
* **(PHP)** Honeypot in the review submit form
* **(jQuery)** Char counter for the review message, the message changes depending on the amount of characters used.

## INSTALL

For installation there is not much needed. Import the files to your server and create the Database.

#### DATABASE QUERY

Create a database and execute the following query to create the table.

```
CREATE TABLE IF NOT EXISTS post (
    id INT(50) AUTO_INCREMENT,
    title VARCHAR(255),
    content VARCHAR(255),
    post_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)
```

#### CONNECT DATABASE

Connect the database by filling in the database credentials in the **config.php** file inside the **/db/ folder**.
# BasicSecureLogin v1.0.0

This tutorial is intended to explain how to design and build the foundation of a secure user authentication system using PHP's PDO library with a MySQL database. Each security measure is explained and justified, and many contain references to additional information should you wish to explore the subject in more depth. This article highlights insecure practices commonly found in code written by beginning PHP programmers who are simply unaware of how to write secure code.

* Source: [http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html](http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html)


## Target audience and prerequisites

This tutorial is aimed at programmers with a basic knowledge of PHP and MySQL. It assumes that you already have:

* A web server with PHP
* A MySQL database server with a MySQL database created
* Login details for the MySQL server
* A basic understanding of general programming concepts and PHP syntax
* A basic understanding of HTML and HTML forms
* A basic conceptual understanding of the purpose of a database


## Topics on which this tutorial touches

### Security topics
* How to prevent SQL injection exploits when using user-supplied data in a SQL query
* How to prevent XSS attacks when displaying user-supplied data on a web page
* How to securely store passwords in a database
* How to securely redirect a user to another web page

### Database interaction topics
* How to connect to a MySQL database using PHP's PDO library
* How to insert a new row of data in the database (INSERT query)
* How to update an existing row of data in the database (UPDATE query)
* How to fetch a list of data from the database and display it in a table (SELECT query)
* How to check whether a particular value already exists in the database

### General PHP topics
* How to use PHP sessions to track a logged-in user
* How to properly handle non-ASCII characters using UTF-8
* How to avoid problems with PHP's Magic Quotes feature

### Login system specific topics
* How to check whether a user is logged in or not, and force them to be logged in to view a particular page
* How to build a login form, registration form, account details editing form and memberlist page


## Usage

To use this login system you will need to create a database using the provided SQL file.  You will need to upload the remaining files to your web server.  Please read through the comments in each file and edit as necessary per the instructions.


## Support

Personal support requests should be made at the [Dev Shed Forums](http://forums.devshed.com).


## Contributing

This code is made freely available. Anyone and everyone is welcome to [contribute](CONTRIBUTING.md). If you would like to get involved, please review the [guidelines](CONTRIBUTING.md):

* [Bug reports](CONTRIBUTING.md#bugs)
* [Feature requests](CONTRIBUTING.md#features)
* [Pull requests](CONTRIBUTING.md#pull-requests)


## License

The code is available under the [MIT license](LICENSE).
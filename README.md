# BasicSecureLogin v1.0.1

This tutorial is intended to explain how to design and build the foundation of a secure user authentication system using PHP's PDO library with a MySQL database. Each security measure is explained and justified, and many contain references to additional information should you wish to explore the subject in more depth. This article highlights insecure practices commonly found in code written by beginning PHP programmers who are simply unaware of how to write secure code. This tutorial lives at **[DevShed Forums](http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html)**. Be sure to visit for up-to-date information and discussions.


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

#### CONFIGS IN THE CODE:

In *common.php*:

4. enter the username used to access your database (you will need *read* and *write* access)
5. enter the password for the user that you provided in Line 4
6. enter the hostname of your database server (if you are unsure, leave this set to 'localhost')
7. enter the name of the database you created for your login system

#### PROTECTING A PAGE:

An example of a protected page can be found in *private.php*.  Protecting a page is as easy as including the *common.php*
file and checking whether or not a user is logged in.

```php

    // First we execute our common code to connection to the database and start the session
    require("common.php");

    // At the top of the page we check to see whether the user is logged in or not
    if(empty($_SESSION['user']))
    {
        // If they are not, we redirect them to the login page.
        header("Location: login.php");

        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
```


## Requirements

* **PHP 5.5+**, Minimum PHP 5.5.15
* **MySQL 5.5+**, Minimum MySQL5 (old versions have a [PDO injection bug](http://stackoverflow.com/q/134099/1114320))
* installed PHP extensions: pdo, session
* Basic knowledge of PHP and object-oriented programming


## Live Demo

A working demo of this code can be seen at [http://www.basicsecurelogin.com](http://www.basicsecurelogin.com).


## Support

Personal support requests should be made at the [Dev Shed Forums](http://forums.devshed.com).


## Contributing

This code is made freely available. Anyone and everyone is welcome to [contribute](CONTRIBUTING.md). If you would like to get involved, please review the [guidelines](CONTRIBUTING.md):

* [Bug reports](CONTRIBUTING.md#bugs)
* [Feature requests](CONTRIBUTING.md#features)
* [Pull requests](CONTRIBUTING.md#pull-requests)


## License

The code is available under the [MIT license](LICENSE).


## Useful links

- [How to program a basic but secure login system using PHP and MySQL](http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html)
- [The 6 worst sins of security](http://forums.devshed.com/php-faqs-stickies-167/6-worst-sins-security-938991.html)
- [Making PHP sessions secure](http://forums.devshed.com/php-faqs-stickies-167/php-sessions-secure-953373.html)
- [How to (properly) access a MySQL database with PHP](http://forums.devshed.com/php-faqs-stickies-167/properly-access-mysql-database-php-954131.html)
- [How to use PDO](http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers)
- [A short guideline on how to use the PHP 5.5 password hashing functions and its PHP 5.3 & 5.4 implementations](http://www.dev-metal.com/use-php-5-5-password-hashing-functions/)
- [How to setup latest version of PHP 5.5 on Ubuntu 12.04 LTS](http://www.dev-metal.com/how-to-setup-latest-version-of-php-5-5-on-ubuntu-12-04-lts/)
- [How to setup latest version of PHP 5.5 on Debian Wheezy 7.0/7.1 (and how to fix the GPG key error)](http://www.dev-metal.com/setup-latest-version-php-5-5-debian-wheezy-7-07-1-fix-gpg-key-error/)


## Thanks

A special thanks to the contributing members at Dev Shed Forums who freely give of their time and expertise so that
others may learn.  If you find this code useful, please stop by the forums and say thanks.
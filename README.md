iplocator App
===================================

iplocator is an application you can use to find the location of any given internet ip address. Just enter any internet ip address in the search bar, the ip locator app will get the actual location of that ip address for you !

The iplocator app will work for both an internet ipv4 or ipv6 address. it gives you details of the ip address like country, city, date and time etc.

iplocator app was built with PHP Yii2 framework, and will work for you both offline (on your localhost) or online when hosted on an internet server ! 

Simply download the app and enjoy.


DIRECTORY STRUCTURE
-------------------

```
assets					 contains web assets and resources
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
css                 	 contains css files and resources
environments/            contains environment-based overrides
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
vendor					 	
```


REQUIREMENTS
------------

The requirement for this application to run is that your Web server supports PHP 5.4 to PHP 7.0


INSTALLATION
------------

### Install from a Zip File download

1. Download a Zip file of the iplocator app
2. Create a folder 'iplocator' on your localhost (xampp/htdocs)
3. Extract the Zip file contents to this folder created above. 
4. Create a database and import the file: iplocatordb.sql 
5. Adjust the `components['db']` configuration in `common/config/main-local.php` with your database name, username and password. 

~~~


RUNNING THE iplocator App
-------------------------

After installation and setup, you will need to run the app !

To start using the app simply open your browser. 
On your browser address bar, just type: localhost/iplocator

Enter any ip address in the search bar, then click 'Locate ip'

Enjoy !

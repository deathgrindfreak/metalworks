# M&euml;talW&ouml;rks

M&euml;talW&ouml;rks is a pretty basic web forum that I designed for a web development course in the Summer of 2014.  There are still a few bugs hanging around that I'll try to fix at a later date, but for the most part it's a fully functional forum.

## Installation
If you're using Linux, simply clone the repository:

    git clone https://github.com/deathgrindfreak/metalworks.git

Then, change your directory to the metalworks directory and login to the MySQL command line utility \(usually "mysql -u user\_name -p"\). And execute:

    source dbdump.sql

MySQL should then create the database and populate it with some initial data.  Next, start the PHP server by executing:

    php -S localhost:8080

Finally, visit localhost:8080 and the site should be up.

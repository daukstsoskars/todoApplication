# todoApplication
Web Application for TODO list using XAMPP, PHP, MariaDB

## USAGE

```
git clone https://github.com/daukstsoskars/todoApplication.git
cd todoApplication
```
1. locate todo_event_list_db.sql (this is the file you will have to import in your phpmyadmin)
2. Launch your XAMPP Apache Web Server and MySQL Database
3. Navigate to localhost/phpmyadmin/import.php and import the todo_event_list_db.sql from todoApplication project folder
4. Create new user as i did (see NOTE section) or use any current available user and give them permissions to the newly imported database (this is done through 
phpmyadmin, you can create a user under privileges tab)
5. Now with your Apache and MySQL running nagivate to localhost/todoApplication/index.php

### NOTE
I have created a new user with username and password
inside todoApplication/db_connect.php and gave permissions to the todo_event_list_db.sql
```
$dbuser = "todoevent";
$dbpass = "todoevent";
```

### XAMPP VERSIONING
XAMPP 7.3.0

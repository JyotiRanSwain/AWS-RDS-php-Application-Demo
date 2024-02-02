some important command

Install Apache: 
```
sudo apt install apache2
```

Install PHP:
```
sudo apt install php libapache2-mod-php php-mysql
```

Restart Apache:
```
sudo systemctl restart apache2
```

Install MySQL Client:
```
sudo apt install mysql-client
```

Connect to AWS MySQL Database:

your AWS RDS MySQL instance:
```
mysql -h your-rds-endpoint -u your-username -p
```

Show all databases
```
SHOW DATABASES;
```

create the database:
```
CREATE DATABASE mydbb;
```
Database you want to inspect
```
USE your_database_name;
```

show the table
```
SHOW TABLES;
```

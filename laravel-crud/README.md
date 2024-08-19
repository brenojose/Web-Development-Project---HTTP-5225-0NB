# Laravel Project - Breno Souza

## Prerequisites

1. **MAMP**: Ensure that MAMP is installed on your computer. [Download MAMP](https://www.mamp.info/en/)

2. **Composer**: Install Composer if it’s not already installed. [Download Composer](https://getcomposer.org/)

## Setup

composer install

npm install inside the project folder using cd folder_path

modify .env file for database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=root
```

3. php artisan migrate

4. php artisan db:seed

### **SQL Files and Migrations**

You can use the SQL file, but using migrations is also available since it's Laravel.

1. **Import SQL**

   Import the database.

2. **Included File in the Project**

   The database SQL file was placed inside the project folder.

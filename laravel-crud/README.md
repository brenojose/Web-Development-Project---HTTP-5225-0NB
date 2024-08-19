# Laravel Project - Breno Souza

## Intro to your project:
- My project is a To-Do List with Users and Profiles, you can add, delete and view each profile and To-Do item. #
## Explain the features and database schema:
- Authenticator with logout function, CRUD for each table, Register and forgot login function. Relationship one-to-many regarding each users and they can have multiple to-do entries.

  ```
  At least 2 CRUD modules - 40% - Present -> Although the profile is not integrated with the list of todos through the views, the profile controller exists, as well as its migration, model, and CRUD.

Both CRUD modules should be related using one-to-one, one-to-many, many-to-many etc. - 20% - Present => There is a one-to-many relationship with the user and the todo list, where a user can add multiple todo values and perform CRUD operations on them. Although it would have been better represented if the profile had been integrated.

CREATE method on one of these CRUDs should also save relationship to another table - 20% - Partially present => The relationship between the tables was created, but I was unable to create the interaction through views in resource/views.

Authenticator => Present, user = user1@gmail.com, password: 12345678, the password is encrypted in the MySQL database.

Dashboard and Public/Admin views - 20%

Partially Present: The project has a todo list (list.blade.php) and forms for adding and editing todos, which is a form of administrative view. However, there is no separate dashboard that consolidates this information and provides an overview. Additionally, there is no clear distinction between public and administrative views. You may need to add a dashboard for administrators and possibly public views for other users.

I apologize for the incomplete work; my email was recently hacked, I had to format my phone and computer, and I faced issues with MAMP and PHP, as well as with Laravel installation, and the project took more time than I expected. I also lost access to the Humber authenticator, so at this moment I am sending this assignment from the college courtyard alone at night (it was either this or I wouldn't be able to submit it). But no excuses, life is like that—better done than perfect! Thank you for the semester and the teachings!
```

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

   ___

      To Run. **cd laravel-crud > php artisan serve**

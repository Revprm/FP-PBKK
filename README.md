# FP PBKK

| Name              | NRP        |
| ------------------|------------|
| Haikal Athallarik | 5025221232 |
| Revy Pramana      | 5025221252 |

# Overview
In this project, We developed an Web application using Laravel that implements CRUD (Create, Read, Update, Delete) features. 
CRUD is applied to the Products section, where each user can:
- View other users products in the information page
- Add, delete, and update their own products.
- Users only have access to modify their own products and cannot modify other users products.
This application ensures structured access rights and management of products based on ownership.

# How to Build and Run
## Install dependencies:
```sh
composer install
npm install
```
## Setting up the `.env`:
- Copy the `.env.example` to another file with the name `.env`
- Generate the `.env` key using `php artisan key:generate`

## Set up the database:
Because we're using PostgreSQL, we need to make sure we already configure the extension for PostgreSQL in the `php.ini` file

Search inside the `php.ini` file and remove the semicolon

![image](https://github.com/user-attachments/assets/89375660-782d-4d47-9365-49845e98a9f5)

After that, configure the `.env` file for the PostgreSQL database

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=fp_pbkk
DB_USERNAME=postgres
DB_PASSWORD=<password for username postgres>
```
Before migrating, make sure to make the database `fp_pbkk` first in PostgreSQL so we can migrate the database directly with no error

After that, we can run the command below inside the terminal
```sh
php artisan migrate:fresh --seed
```

## Run
After migrating the database, We can view the result of the project by running these commands:
```sh
php artisan serve
```
# Results
## Home Page
![image](https://github.com/user-attachments/assets/3bb07544-2f86-407c-a989-97f05fcc99fb)
## Sign in Page
![image](https://github.com/user-attachments/assets/715c9fde-a1f4-49fb-9cf5-93804585e17b)
## Sign up Page
![image](https://github.com/user-attachments/assets/dd97fd8b-0f55-4866-8a57-97951ba0f55f)
## Information Page
![image](https://github.com/user-attachments/assets/c041a4c4-d9da-4291-8b0b-18fdaffa36b5)
## Details Page
![image](https://github.com/user-attachments/assets/54460ded-f100-4490-9ce6-0b19cb7e6ad2)
## Dashboard Page
![image](https://github.com/user-attachments/assets/09a9d200-ded9-4228-a67a-f64bd589bef0)
## Add Product Page
![image](https://github.com/user-attachments/assets/f3a8b7b8-a506-4ce9-8602-39253493a1a9)
## Update Product
![image](https://github.com/user-attachments/assets/0c2b66c2-e5c7-4a3b-bca9-0a6fc32352a6)
## Delete Product
![image](https://github.com/user-attachments/assets/8d8e8102-cbdd-4341-9a9d-c1f9771b1402)


# Link Youtube
[Presentation Video](https://youtu.be/cpS3G85NwK4)

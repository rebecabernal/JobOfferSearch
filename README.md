# JOB SEARCH APP LARAVEL

>[!IMPORTANT]
>To learn how to install and also to know how I did this project, it's very important that you read every part of this readme. Thank you for your patience and have a good read.
***

## :bulb: Project description

This project was made with the idea to store and organize the employments offers that we receive and apply.

With two tables interlinked you can edit or add a new offer that you received, but you can also do that through endpoints.

The feedback table is the one that you can add comments, for example, if you made progress with an offer you can comment that as your progress and it will update.
In the two forms we have the option to create and update.

***

## Requirements to achieve in this project:

- We must display on the screen all our applied offers with their status (Blade).
  
- There must be a status position that is "In Progress" or "Completed".

- We must view all our offers applied by Endpoints.

- We must be able to delete, insert, modify and view all the entrys through Endpoints.

- We have to be able to watch the show on Endpoints.

- We have to be able to see the show (Blade).

- Date management 1 creation, 2 last modification.

- 70% minimum test coverage.
***

## :eye_speech_bubble: Project overview

Take a look at how my project turned out.
***

<P align="center">Home Page</P>

<p align="center">

 <img src="https://github.com/user-attachments/assets/f5f7187b-a874-4905-9961-b7746ea3220f" alt="home page screenshot" width="800"/>
</p>

***

<P align="center">Comments Page</P>

<p align="center">

 <img src="https://github.com/user-attachments/assets/21de760a-9fb2-40b9-9f31-0771a09ed459" alt="comments page screenshot" width="800"/>
</p>

***

## Project Diagrams (BBDD)

![relationtable](https://github.com/user-attachments/assets/640f0c23-126b-469d-a918-94719c2d5321)


The diagram I did for my database in **DrawSQL**.

As you can see both of the tables are interlinked, this one, with a **one to many** relantionship.
***

## Installation requirements

Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

1. XAMPP

2. Install Composer

3. Install NPM in Node.js

4. Xdebug (for the tests coverage)

5. Postman
***

## :scroll: Installation

1. Clone this repository:
```
 https://github.com/rebecabernal/JobOfferSearch.git
```

2. Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

3. Create a .env file copying everything inside the existing file .env.example and modify the following lines:
* DB_CONNECTION=mysql
* DB_DATABASE=job

4. Create a database in **MySQL**

5. Now go to the VSC terminal and put the following command
```
php artisan migrate:fresh --seed
```
This command will generate all the tables.

6. Open another terminal in **VSC** and put the following command
```
npm run dev
```

7. Open another terminal and run the server with this command
```
php artisan serve
```
You'll see an url that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals. 
***

## Project documentation

>[!NOTE]
>Since we have two interlinked tables, each one of them has their own CRUD, this firsts endpoints are from the offers table.
>
>In the offers table we have: title, enterprise, description, workspace, status and two timestamps that are created_at and updated_at.
***

<p align="center">Endpoints (Offers table)</p> 

GET all ids
```
http://127.0.0.1:8000/api/offers
```

GET an especific id
```
http://127.0.0.1:8000/api/offers/id
```

DELETE by id
```
http://127.0.0.1:8000/api/offers/id
```

POST update a new offer
```
http://127.0.0.1:8000/api/offers
```

PUT update an existing offer by id
```
http://127.0.0.1:8000/api/offers/id
```
***

<p align="center">Endpoints (Feedback table)</p>

GET all id
```
http://127.0.0.1:8000/api/offers/offerid/news
```

GET an especific id
```
http://127.0.0.1:8000/api/offers/offerid/news/newsid
```

DELETE by id
```
http://127.0.0.1:8000/api/offers/offerid/news/newsid
```

PUT update an existing id
```
http://127.0.0.1:8000/api/offers/offerid/news/newsid
```

POST create new id
```
http://127.0.0.1:8000/api/offers/offerid/news
```
***

## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```
php artisan test
```
<p align="center">This is what you should see after putting the command.</p>

<p align="center">
 <img src="![image](https://github.com/user-attachments/assets/1fec586c-d1ee-4db9-8178-65e67708af62)
" alt="tests screenshot" width="800"/>
</p>

<p align="center">These are all my tests passed. I tested the web, the API CRUD, the feedback CRUD and the FeedbackModel.</p>

***

## Coverage

To see the coverage you can use this command at the **VSC** terminal
```
php artisan test --coverage-html=coverage-report
```

> [!IMPORTANT]
> Everytime that you do new tests you need to put the command above in the **VSC** terminal, so it can update your coverage.
***

This will add a folder called "coverage-report", go to the folder, go to the index.html, and then open with live server. After that you should see this page:

![Screenshot 2024-12-11 012135](![image](https://github.com/user-attachments/assets/a7c55e7d-63bc-413c-a128-52a700c76f46)
)
***

## Contact and information

>[!NOTE]
>Please understand that i'm still learning, not everything will look or be perfect. Thank you for the attention.

If you want to contact me here's my gmail: talenabarbosa7@gmail.com
***

## Languages and tools I used in this project

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='canva' src='https://img.shields.io/badge/canva-100000?style=for-the-badge&logo=canva&logoColor=white&labelColor=A700FB&color=A700FB'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
***

## Thanks for reading!

Thanks for reading this readme!

Have a good day! :3
***

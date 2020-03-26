
# Boomer PHP MVC

(WORK-IN-PROGRESS)

This is a PHP Framework that i made to learn MVC Architecture, SQL based CRUD and AJAX from scratch using a Linux, Apache, MySQL and PHP , No JavaScript or PHP Frameworks used, with custom CSS & JQuery.

## Directory Structure

- `app` contains  MVC logic, `controller`, `views`, `model` and a `config` folder
- `core` contains `database` for db init, `router` for routing, `middleware` for middlewares and `utils` for helper functions
- `public` contains user facing CSS, JS and index.php

## Main Features

- Created using only pure PHP, no frameworks or external libraries.
- MVC CRUD App with AJAX features where required
- Router with support for parameterized dynamic routes and protected routes.
- Sessions based authentication, with only sessionId stored in cookie.
- Validation library to check user input.
- Middleware support for specific routes.
- Query Builder for MySQL used in Models.

## Completed Tasks

- [x] Skeleton files and directory setup
- [x] Basic router setup with controllers and views
- [x] Creating core Model methods
- [x] Login/Registration functionality
- [x] Sessions setup
- [x] Redirects based on Auth status stored in Session cookie/ Protected Routes
- [x] Store user data upon login into sessions database and return sessionId
- [x] Store sessionId cookie.
- [x] Get and display user data from sessions table by verifying sessionId with database.
- [x] Session deletion upon Logout.
- [x] Input sanitization/validation for Login and Registration
- [x] Error Message display using AJAX In the same page.
- [x] Login refactor into AJAX.
- [x] Registration refactor into AJAX.
- [x] JavaScript refactor from script tags to `.js` files.
- [x] Modify Router so it can work even with parameterized/dynamic routes.
- [x] Get username from route parameter, retreive user data, and display it.
- [x] Add functionality for users to add blog posts
- [x] List of Posts by a user in his dashboard
- [x] Add Posts refactor into AJAX
- [x] Get Posts refactor into AJAX
- [x] Add Delete functionality for Posts
- [x] Get Single Post and Display it
- [x] Add Edit functionality for Posts
- [x] Frontend design for homepage, login/registration
- [x] setup.php script to setup Database with tables

## In Progress

- [ ] Navbar should show Logged in status

## TO-DO

- [ ] SQL Join in Query Builder
- [ ] Frontend design for user profiles
- [ ] List of all users registered
- [ ] WYSIWYG text editor
- [ ] List of latest posts from all users
- [ ] Comments from registered users

## Author

### Shawn D'silva

- **Github profile :** github.com/shawn-dsilva
- **Website :** shawndsilva.com


# Boomer PHP MVC

(WORK-IN-PROGRESS)

This is a CRUD app that i made to learn MVC Architecture and AJAX from scratch using a Linux, Apache, MySQL and PHP , No JavaScript or PHP Frameworks used with custom CSS & JQuery.

## Directory Structure

- `app` contains  MVC logic, `controller`, `views`, `model` and a `config` folder
- `core` contains `database` for db init, `router` for routing, `middleware` for middlewares and `utils` for helper functions
- `public` contains user facing CSS, JS and index.php

## TO-DO

- [x] Skeleton files and directory setup
- [x] Basic router setup with controllers and views
- [x] Creating core Model methods
- [x] Login/Registration functionality
- [x] Sessions setup
- [x] Redirects based on Auth status stored in Session cookie/ Protected Routes
- [x] Store user data upon login into sessions database and return sessionId
- [x] Store sessionId cookie.
- [x] Get and display user data from sessions table by verifying sessionId with database.
- [ ] Session deletion upon Logout.
- [x] Input sanitization/validation for Login and Registration

## Author

### Shawn D'silva

- **Github profile :** github.com/shawn-dsilva
- **Website :** shawndsilva.com


# Boomer PHP MVC

This is a PHP Framework made by Shawn D'silva to learn MVC Architecture, SQL based CRUD and AJAX from scratch using Linux, Apache, MySQL and PHP , No JavaScript or PHP Frameworks used and neither are any PHP packages or libraries, The Front-End for the demo app is made with with custom CSS & JQuery.
</br>
This Project supports Docker and is deployed in Docker containers, The Docker deployment consists of a MySQL container with an Apache2 server + PHP7.2 apache mod, which runs the web app.

## Quickstart

- You need `docker` and `docker-compose` for this.
- Run `docker-compose up`
- Site is hosted on `localhost:5003` by default.

## Usage

- Entry point for the web app is in `index.php` which lives in the `public` folder, which also contains `.css` and `.js` in their respective folders
- PHP application code goes in `app` which contains `controllers`, `views` , `models` and `routes`.
- The core Framework PHP code is in `core` which contains the `database`,`sessions`,`router`,`middlewares`,`utils` and base `controller` and `models` logic
- Application controllers and models inherit from `controller` and `models` in `core` which encapsulte the parameter or middleware data for controllers from the routes or expose the database functions and Query Builder for the models

## Main Features

- Created using only pure PHP, no frameworks or external libraries.
- MVC CRUD App with AJAX features where required
- Router with support for parameterized dynamic routes and protected routes.
- Route parameters can be accessed in controller, so can the data output by Middlewares
- Sessions based authentication, with only sessionId stored in cookie, and user data stored in database.
- Validation library to check user input.
- Middleware support for specific routes.
- Database abstraction using a Query Builder for MySQL.

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
- [x] Navbar should show Logged in status
- [x] Fix broken isAuth middleware based routing
- [x] Add more CRUD fields for User model
- [x] Frontend design for User profiles
- [x] UI Fixes
- [x] Add front-end edit profile features
- [x] Fixes to protected routes
- [x] Add backend edit profile features
- [x] Profile page PHP/HTML refactored
- [x] SQL Join in Query Builder
- [x] Get user data from session changed to SQL Join
- [x] List of all posts by logged in user with links to edit, delete and view full post
- [x] Style Create Post page
- [x] Get selected text from input
- [x] Get Single Post basic CSS styling
- [x] Posts in `/postlist` link to single post
- [x] Comment Model
- [x] Comment Controller
- [x] Get Single Post complete CSS styling
- [x] Get Comments List via AJAX call
- [x] Add Comment and reload comments list on submit
- [x] Comment `created_at` field translated to human readable field in PHP itself, instead of using JS.
- [x] Returning data of a post with author data using SQL Join.
- [x] Post author and submition date below title.
- [x] Delete Posts using delete button UI
- [x] User can edit a post only if he is the post author
- [x] Style Error Page
- [x] Only Authors of commments can see edit/delete buttons
- [x] Delete comment if Author of Comment
- [x] Edit Comment Front-end done.
- [x] Edit comment if Author
- [x] Comments with CRUD functions from registered users
- [x] Publicly viewable user Profile styling.
- [x] List of all users registered
- [x] User List Page CSS styling
- [x] Check for User data associated with sessionId in isAuth middleware
- [x] getView reworked to automatically add user data from sessions into views
- [x] List of latest posts from all users
- [x] Refactor BaseController.php into RouteHandler.php.
- [x] Refactor all controller classes into object based from static
- [x] New BaseController Class for other Controller classes to inherit from.
- [x] Refactor Sessions related code into  seperate sessions folder in `core`
- [x] Refactor code for Routes list into seperate routes folder in `app`
- [x] Refactor all routers in RoutesController.php into `routes` folder inside '`app` folder
- [x] The `routes` folder must contain routes grouped by their function in a single file
- [x] Refactor into proper `baseurl` setup
- [x] Refactor resource routes(css,js,image) into its own controller in `core`

## In Progress


- [ ] Delete previous session ID entries from DB Upon new session creation
- [ ] Input validation for all new features
- [ ] Rate Limiting
- [ ] Redo CSS in SASS

## TO-DO

- [ ] Schema Builder
- [ ] Upvotes and Downvotes from users


## Author

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
| [<img src="https://avatars0.githubusercontent.com/u/33859225?s=460&u=797dc9181252488a9c325fca842898c24ff28688&v=4" width="75px;"/><br /><sub>Shawn D'silva</sub>](https://www.shawndsilva.com)<br /> |
| :---: |
<!-- ALL-CONTRIBUTORS-LIST:END -->

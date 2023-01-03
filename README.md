<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/aidong33/laravel_blog_aidong">
    <img src="public/assets/img/logo.jpeg" alt="Logo" width="100" height="100">
  </a>

<h3 align="center">Laravel Blog</h3>

  <p align="center">
    project_description
    <br />
    <a href="https://github.com/aidong33/laravel_blog_aidong"><strong>Explore the docs »</strong></a>
    <br />
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project


This is a personal blog website for posing and display blogs.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* Laravel
* Bootstrap

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

Here are instructions on setting up this project locally.

### Prerequisites

There are things you need to use the software and how to install them for Linux and macOS user.

* brew
  ```sh
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  ```

* A Dependency Manager for PHP : composer

* npm
  ```sh
  npm install npm@latest -g
  ```

* Web Server for Mac: valet
```
composer global require laravel/valet
``` 

### Create Project

1. install laravel via composer:
```
   composer global require laravel/installer 
   ```

2. create new project
```
   laravel new blogs
   ```
3. start web server
```
    php artisan server
   ```
4. create database migrate: users and posts

```
    php artisan make:migration create_users_table
   ```
```
    php artisan make:migration create_posts_table
   ```
5. create users and posts model

```  
    php artisan make:model Posts
   ```
```  
    php artisan make:model Users
   ```
6. initialize users and posts schema:

users:
   ```
   public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
```

posts:
```
public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }
```
7. create PostController (CRUD)
``` 
php artisan make:controller PostController --resource
```
8. update AuthoController: index(), customerLogin(), register(Request $request), signout(Request $request)


9. create blade files: index, login, register, post.index, post.show, post.create, post.edit

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. blog shall support guest regisration, login, and view blogs. Normal users does not have right to create, edit or delete post.
2. blog shall allow administor to create, edit, delete posts title, author, created date and thumbnail.
3. blog shall display post title, author, created date, update date, thumbnail
4. blog shall display all available posts's title, author and thumbnail.
5. blog shall display single post with title, author, full content.
6. blog shall display user dashboard after login.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Homepage display all posts with title, author and thumbnail
- [ ] Display single post full content in another page.
- [ ] User login and register
    - [ ] user shall use email and password to login
    - [ ] user shall use email and password to register
    - [ ] user could logout
    - [ ] user shall use email and password to login
- [ ] Guests could browser posts
- [ ] Admin could create, edit, and delete post

See the [open issues](https://github.com/github_username/repo_name/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Ai Dong - aidong0118@gmail.com

Project Link: [https://github.com/aidong33/laravel_blog_aidong](https://github.com/aidong33/laravel_blog_aidong)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments


<p align="right">(<a href="#readme-top">back to top</a>)</p>




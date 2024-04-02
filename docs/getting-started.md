---
hide: navigation
---


# Getting started

## Requirements

Assuming that you already have a development environment set up with PHP 8.2 or higher and an SQL server, Easy MVC is available as a [Composer package](https://packagist.org/packages/vitafeu/easy-mvc), so make sure you have Composer installed on your machine. If not, please follow the [Composer installation instructions](https://getcomposer.org/install).

## Creating a new project

When your development environment is ready, then you can create a new project. There are several ways to do that, as you can see below.

!!! warning
    At the moment, the project (therefore the package) is not stable yet (that's why we specified `dev-main`). Do not use it in production ! If you encounter any problem, please open a [GitHub issue](https://github.com/vitafeu/easy-mvc/issues).

### Using Composer

If you wanna use Composer to create the project, you can simply create a new project with the Composer `create-project` command. This command will automatically clone the [Easy MVC repository](https://github.com/vitafeu/easy-mvc) and install all the dependencies. Here's an example :

```bash
composer create-project vitafeu/easy-mvc:dev-main AwesomeProject
```

Replace `AwesomeProject` with the name of your choice, just navigate to your project directory and you'll be good to go :

```bash
cd AwesomeProject
```

### Cloning the repository

If you don't want to use Composer, you can clone the [Easy MVC repository](https://github.com/vitafeu/easy-mvc) :

```bash
git clone https://github.com/Vitafeu/easy-mvc.git AwesomeProject
```

Replace `AwesomeProject` with the name of your choice, then navigate to your project directory and install the Composer dependencies :

```bash
cd AwesomeProject
composer install
```

## Configuring the project

After creating the project, you'll need to configure it. Navigate to your project directory and copy the `.env.example` file to `.env` (you can also create a new .env file if you want) :

```bash
cp .env.example .env
```

This file will be used to define the environment variables, such as the database connection. You can edit it to suit your needs.

That's all you need to do to get started !

## Testing the project

You can now test if your projet is working as expected. Assuming that you are in the project directory, you can run the following command :

```bash
php easy serve
```

!!! info
    Don't worry if you don't know what this command's about, we'll cover it later. For now, just remember that it will start the development server.

This command will start the development server in the `public` directory (your project's entry point). You can now open your browser and navigate to [http://localhost:8080](http://localhost:8080) to test your project.

If you see the message "Welcome from Easy MVC !", then your project is working as expected ! 

!!! failure
    If you see anything else, please check you've correctly followed the instructions, or search for any hints in the console output.
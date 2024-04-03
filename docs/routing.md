The first section we will cover is the routing. It's the process of determining which controller and method should be called when a specific URL is requested. Don't worry, we'll cover the controllers in the next section. Just remember that each route is mapped to a specific controller and one of its methods.

## Understanding routes

If not done already, navigate to your project directory and open your project in your favorite code editor. There, you should find a folder named `routes`. In this folder, there's a file called `web.php` that will contain all your application's routes. This file should already contain a route for the index page :

```php
$this->addRoute('GET', '/', 'IndexController', 'home');
```

Let break this down a bit :

```php
$this->addRoute();
```

This method is used to define a new route, it simply adds the route to the list of all the router's routes. Phew, the word 'route' is used a lot !

But what does each parameter mean ? Let's look at them one by one :

- `GET` : this first parameter indicates what HTTP method should be used to access the route. In this case, we want to use the GET method to access the route.

- `/` : this is the URL that should be used to access the route. Let's say that we want to access a hypothetic route listing products, we would use `/products` as the URL.

- `IndexController` : this is the name of the controller that should be used to handle the route. In this case, we want to use the `IndexController` controller to handle the route.

- `home` : finally, this is the name of the method that should be called when the route is accessed. In this case, we want to call the `home` method of the `IndexController` controller.

## Defining routes

Now that we know how routes work, let's create another one. And why not use our products listing route as an example ?

This is what it should look like :

```php
$this->addRoute('GET', '/products', 'ProductController', 'home');
```

So, we're using the GET method to access the route, the `products` URL, the `ProductController` controller, and the `home` method. Don't worry about the controller and the method, we'll cover them in the controllers section.

Now that our route is defined, check that the local development server is running (if not, run `php easy serve` in your project directory), then open your browser. Let's go to [http://localhost:8080/products](http://localhost:8080/products) and we should see the products listing page.

Oh no ! The products listing page is not working as expected. Do you know why ? That's right ! We haven't created the `ProductController` and `home` method yet. Let's dive into the controllers section !
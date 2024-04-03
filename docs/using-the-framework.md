As we have seen, the project you created in the [previous section](getting-started.md) is based on the MVC architecture. In this section, we'll make sure that you start using the framework with a basic knowledge of this architecture. If you already have a basic understanding of it, you can skip this section.

## What is the MVC architecture ?

While we're going through this section, we'll illustrate all those concepts with what a restaurant infrastructure would look like. Let's start !

The Model-View-Controller architecture is a design pattern that divides a web application into three main parts :

1. The **model** : 
    This part serves as the backbone of our application, handling all the vital data and rules for its behavior. The model is responsible for managing the data, defining its structure, and enforcing business logic.

    In our restaurant, the model acts like a master chef in a busy kitchen, orchestrating the ingredients and recipes with precision. Just as the chef ensures that each dish is prepared to perfection, the model ensures that our application's data is organized and manipulated correctly, behind the scenes.

2. The **view** :
    Moving forward, the view is what the users see and interact with, providing a visual representation of the application's data. It's responsible for presenting information in a clear and intuitive manner, enhancing the user experience.

    In our restaurant, the view is like the inviting dining area of a restaurant, where customers browse the menu and enjoy their meals. Similar to how a well-designed restaurant layout enhances the dining experience, the view ensures that users can navigate our application seamlessly.

3. The **controller** :
    Finally, let's talk about the controller. This component acts as the intermediary between the Model and the View, facilitating communication and user interaction. The controller receives input from the user, processes it, and updates both the model and the view accordingly.

    In our restaurant, the controller takes on the role of a waiter, taking orders from customers and ensuring they are fulfilled efficiently. Like a waiter orchestrating the dining experience, the controller manages the flow of information, ensuring a smooth and responsive user interface.

By separating the application into these distinct components, we achieve a clearer structure, making it easier to develop, test, and maintain our application. This separation of concerns allows us to focus on each aspect independently, leading to a more robust and scalable application.

## Additional concepts

But wait ! How can we access all of these ressources in a web application ? And how can we add layers of verification, like authentication, to control what users can access ?

Those concepts are called **routes** and **middlewares**. Let's see how they work.

### Routes

Let's take a look at routes, the pathways that define how users interact with our application. Routes determine the URLs or endpoints that users can access to perform specific actions or access certain resources. They serve as the navigation system within our application, guiding users to their desired destinations.

### Middlewares

Now, let's shift our focus to middlewares, the intermediary layers that intercept and process incoming requests before they reach the main application logic. Middlewares add additional functionality to our application, such as authentication, logging, or error handling, without directly modifying the core functionality. Think of them as gatekeepers, intercepting requests and performing tasks like authentication checks before allowing them to proceed to the main application logic. They provide an extra layer of security and functionality, ensuring that incoming requests are properly validated and processed before being handled by the application.

## Conclusion

That's it for this section ! You've gained a solid understanding of fundamental concepts in the MVC architecture, which will undoubtedly aid you in your journey of web development. If any concept remains unclear, don't hesitate to search for clarification online !

In the following sections, we'll learn how to use all of these concepts to build a complete web application, with this framework. We'll create a small project along the way to show you how to use them.
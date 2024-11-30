# Wasp 𓆤
An open-source framework for making clean, efficient Apache/PHP applications.

## Features
* Allows you to make flexible microservices, within a monolithic PHP application. Whether you have just a single application instance (using the internal router), or multiple instances using a reverse-proxy, Wasp allows for it.
* Intelligent package manager. Specify what functions, classes, or variables you need, and it will include only the code you require.
* By default, Apache/PHP does not have any clean ways of making scalable, multithreaded applications. Sure, Apache itself uses multithreading, but utilizing it within a single request is difficult. Wasp creates multi-threaded behaviour by making requests to *itself*. This ensures that difficult requests can be handled more quickly. See the Worker API.

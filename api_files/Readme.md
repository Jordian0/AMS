# What is API
API (Application Programming Interface) facilitates communication between different software applications, allowing 
them to interact and share data, functionality, and services in a standardized and accessible manner. 

# What is REST API [Representational State Transfer](https://ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.html)

REST (Representational State Transfer) API is a type of web API that follows principles like statelessness, uniform 
interface, and resource-based interactions. It uses HTTP requests (GET, POST, PUT, DELETE) to perform CRUD 
operations on resources. Data is exchanged in formats like JSON or XML, promoting scalability and simplicity.<br>
Architecture style for designing networked applications<br>
Relies on a stateless, client-server protocol, almost always HTTP, treats server objects as resources that can be
created or destroyed<br>
Can be used by virtual any programming language.

# JWT [JSON Web Token](https://jwt.io/)
It is an open standard that defines a compact and self-contained way for securely transmitting information between
parties as a JSON object. This information can be verified and trusted because it is digitally signed.
Features of JWT:
- Compact : because of their smaller size, JWTs can be sent through a URL, POST parameter, or inside an HTTP header.
  Additionally, the smaller size means transmission is fast.
- Self-contained : The payload contains all the required information about the user, avoiding the need to query the
  database more than once.

Why to use JSON Web Tokens?
- Authentication : once the user is logged in, each subsequent request will include the JWT, allowing the user to
  access routes, services, and resources that are permitted with that token.
- Information Exchange - JSON Web Tokens are a good way of securely transmitting information between parties.
  Because JWT can be signed.


## HTTP Methods
- GET : retrieve data from a specified resource
- POST : submit data to be processed to a specified resource
- PUT : update a specified resource
- DELETE : delete a specified resource
- HEAD, OPTIONS, PATCH


# PHP PDO
Using PHP PDO to create REST API with JWT


# structure
model will connect with database and is referring to DB modal.<br>
config will have configuration files.<br>
api folder containing requests files.<br>
Headers in PHP help us to view data in a well manner<br>

# SWAGGER UI
[swagger.ui](https://petstore.swagger.io/)<br>
configuring composer and swagger ui<br>
composer require zircote/swagger-php ^3.2.0  (version 3.2.0 is required!)\
required composer for the project \
https://zircote.github.io/swagger-php/guide/ \
change localhost in swagger-initializer.js in the dist directory \
change the directory in api.php accordingly to the server configuration \
https://zircote.github.io/swagger-php/guide/annotations.html#doctrine \
https://github.com/swagger-api/swagger-ui/blob/master/docs/usage/installation.md \

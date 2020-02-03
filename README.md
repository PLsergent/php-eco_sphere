# PHP LAMP - User authentication
Stay hydrated

## Sources
`./www/`

## Features
- User signup (diplay form errors)
- User login (display form errors)
- Logout
- Use MVC

## Prerequisite
- docker
- docker-compose

## Usage

### Launch app

Clone the project.
```
git clone https://github.com/PLsergent/php-eco_sphere.git
```

Then execute:<br/>
*You may have to use sudo.*
```
docker-compose build
docker-compose up
```
*This will take a little while (like 1min).*

### Replace mysql container Ip address

Go to the file :
`./www/Model/Connexion.php`

You will have to replace the ip address of the mysql docker based on your docker ip address.

Execute `docker ps` and get the id from the container **eco-mysql**.

Then execute `docker inspect <container_id>` and you'll be able to get the ip address amoung all the informations given on your mysql docker.

Now replace the ip address in the file.

### App running
http://localhost

You have now access to several link.

phpMyAdmin :
- username : root
- password : tiger

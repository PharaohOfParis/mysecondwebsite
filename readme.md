# Bamzooka from Bootstrap Exemple Web Page

Still learning how to use Bootstap efficiently. My second job is to adapt an existing Bootstrap web page source code into my Bamzooka website. So I went to the Examples page of Bootstrap website and chose the Carousel one (https://getbootstrap.com/docs/4.5/examples/carousel). 

## Usage

There are two folders: 
- the Images one with the two logos and the three Fontawesome images;
- the Sources one with the PHP files (index, header and footer) and the CSS page.

## Deployment

I did three ways of deployment (two locals and one global):

### local with PHP: 

First install PHP:
```bash
sudo apt install php
```
Then go to the repertory containing "src" and "images" and type:
```bash
php -S localhost:8000
```
Then finish by going to your browser and type in the URL : http://localhost:8000/src

Finally, after finishing working, to stop the PHP server, do Ctrl-C.

### local with Apache:

First install Apache:
```bash
sudo apt-get install apache2
``` 
Then copy the repertory containing "src" and "images" and paste it to the following folder : /var/www/html .

Then start the Apache server by typing: 
```bash
sudo /etc/init.d/apache2 start
```
Then go to your browser and type in the URL : http://XXX/YYY/src/ where:
XXX is your IP address:
YYY is the name of your repertory containing "src" and "images".

To know your IP adress, type: 
```bash
 hostname -I
```

Finally, after finishing working, to stop the Apache server, type:
```bash
sudo /etc/init.d/apache2 stop
```
### lobal with firebase:

Go to your browser and type in the URL: ...

## TODO

Finishing the CSS page.

## Last Update day:

09/24/20


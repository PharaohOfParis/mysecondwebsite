# My Bamzooka from Bootstrap Exemple Web Page

## 1. Description

Hello, I'm still learning how to use **Bootstap efficiently**. My second job is to adapt an existing Bootstrap web page source code into my Bamzooka website. So I went to the **Examples Page** of Bootstrap website and chose the **Carousel** one (https://getbootstrap.com/docs/4.5/examples/carousel). Then I must host it on **Firebase**. 

## 2. Installation

* First install **PHP**:
 ``` bash
 sudo apt install php
 ```

* Then install **Apache**:
 ``` bash
 sudo apt-get install apache2
 ```

* Finally install the **Firebase CLI**:
 ``` bash
 curl -sL https://firebase.tools | bash
 ```
 NB: For more details about Firebase configuration, see: https://firebase.google.com/docs/hosting/quickstart .

## 3. Getting Started

### a) With Apache:

Put your website folder in the following repertory: `/var/www/html` .

### b) With Firebase hosting:

Go to your repertory above `src` and `images` and type:
``` bash
firebase init hosting
```
Then follow the instructions.

## 4. Usage

* To edit the code, go to the `src` folder, and then you can modify either the header( `header.php` ), footer( `footer.php` ), or the main page ( `index.php` ).

* To add logos or images, put them in the `images` folder.

* To see your changes, deploy your website in local either with PHP or with Apache. To do this, read the `Deployment` section below.

* When your website is ready to be shown to the World Wide Web, put the `src` and `images` folders in the `public` folder.

## 5. Deployment

### a) Local with PHP: 

1. First start the PHP server in the repertory above `src` and `images` by typing in a shell:
 ``` bash
 php -S localhost:8000
 ```

2. Then go to your browser and type in the URL : http://localhost:8000/src .

3. Finally, after finishing working, to stop the PHP server, do Ctrl-C.

### b) Local with Apache:

1. First start the Apache server by typing in a shell one of the 3 following commands: 
 ``` bash
 sudo /etc/init.d/apache2 start
 ```
 ``` bash
 sudo service apache2 start
 ```
 or via systemd for Debian/Ubuntu Linux users:
 ``` bash
 sudo systemctl start apache2.service
 ```

2. Then go to your browser and type in the URL: `http://{ipAdress}/{repertory}`
 where:
     - {ipAdress} is your IP address;
     - {repertory} is the path name of your repertory containing `index.php` within the `/var/www/html` folder.

     - NB1: To know your IP address, you can type in a shell: 
     ``` bash
     hostname -I
     ```
     Your IP address is the first group of numbers.

     - NB2: If you want to write a **specific URL** (e.g. `mubramaj.com` ) to have your localhost website (instead of `http://{ipAdress}/{repertory}` ), do the following:
         1. Go to the repertory `/etc/apache2/sites-available/` and create a new file named `mubramaj.com.conf` in which you must insert:
         ``` 
         <VirtualHost *:80>
         ServerName mubramaj.com
         DocumentRoot /var/www/html/{repertory}

         <Directory /var/www/html/{repertory}>
         Options Indexes FollowSymLinks Includes
         AllowOverride All
         Order allow,deny
         Allow from all
         </Directory>
         </VirtualHost>
         ```
         2. Activate the virtual host by typing:
         ``` bash
         sudo a2ensite mubramaj.com.conf
         sudo service apache2 reload
         ```
         3. Edit the `/etc/hosts` file by adding the line:
         ``` 
         127.0.0.1       mubramaj.com
         ```

3. Finally, after finishing working, to stop the Apache server, type:
 ``` bash
 sudo /etc/init.d/apache2 stop
 ```
 ``` bash
 sudo service apache2 stop
 ```
 or via systemd for Debian/Ubuntu Linux users:
 ``` bash
 sudo systemctl stop apache2.service
 ```

### c) Global with Firebase:

1. After finishing working in local, to deploy the website in global on Firebase, type:
 ``` bash
 firebase deploy --only hosting
 ```

2. Then go to your browser and type in the URL one of the 2 following URL:
     - https://bamzooka-adapted.web.app/
     - https://bamzooka-adapted.firebaseapp.com/

NB: If your work hasn't changed, you don't need to do the first step the next time you want to see your website. 

## 6. Contributing

Any contributions or even suggestions are **greatly appreciated**. To contribute, do the following:

1. Fork the Project
2. Create your Suggestions Branch ( `git checkout -b Suggestions/AmazingSuggestion` )
3. Commit your Changes ( `git commit -m 'Add some AmazingSuggestion'` )
4. Push to the Branch ( `git push origin Suggestions/AmazingSuggestion` )
5. Open a Pull Request

## 7. Authors and acknowledgment

* Author:
     - Mohamed Abdelkoddous - mohamed.abdelkoddous@metadot.com

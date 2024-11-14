# Food Website Backend
To set up this project, follow these steps:

- you need to have both php & Mysql installed on your machine.
  - [download php](https://windows.php.net/downloads/releases/php-8.3.13-nts-Win32-vs16-x64.zip)
  - [download mysql](https://dev.mysql.com/get/Downloads/MySQLInstaller/mysql-installer-community-8.0.40.0.msi)
- steps to install both
  - #### php
    Extract the downloaded zip file into `C:\php\`
    (create `php` folder in **C drive** if it does not exist)
    Open This PC (run this in terminal)
    ```shell
    rundll32.exe sysdm.cpl,EditEnvironmentVariables
    ```
    find & double-click on`Path` under `System variables` section
    
    click `New` and paste this: `C:\php\php.exe` finally click **Ok**
  - #### MySql
    open `mysql-installer-community-8.0.40.0.msi` that downloaded in previous step *(**Stop** xampp mysql if it's already 
    started)*
    once the installer showed up choose `Full` and follow instructions to complete installation
---
### Booting up Application
- Download this repository and extract it.
- open the project folder once it has been extracted
- Now we have to import `food-order.sql` into our database.
  - open `MySQL Workbench 8.0 CE` by pressing `windows key` and typing `mysql work` (it must shows up)
  - click on **Local instance MYSQL80** and type the password that you set while installing MySQL
  - finally, let's import their database into our machine by clicking on `Server` at the top menu bar of the application
  - a list will be opened, now click `Data Import`
  - choose `Import from Self-Contained File` which is second radio button

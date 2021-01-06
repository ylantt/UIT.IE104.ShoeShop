# N7 website
--- The website is built for "Internet and Web Technology" subject at University of Information Technology, VNU ---

## 1. More information
To have database, access to [Wiki page](https://github.com/ylan2000/ie104/wiki/Database-ie104-project)  
### Usecase Diagram
![Use case Diagram](https://user-images.githubusercontent.com/53938599/103502329-77a64600-4e83-11eb-94a1-6b0c1063a73e.png)

The Use case Diagrame was build by Vietnamese language, the grey blocks are the function that we have not done yet!

## 2. Create Virtual host 
> “Before software can be reusable it first has to be usable.” – Ralph Johnson

Because we have some base link in the head tag, so you need to create virtual host to have the right route

**We apologise for any inconvenience caused. We will fix it soon!!** :sweat: :sweat:

Setting up a virtual host allows you to use an alias name for your localhost

Some steps to configure Virtual Hosts in XAMPP
### Step 1:
Open the Virtual Hosts Apache configuration file httpd-vhosts.conf from _C:\xampp\apache\conf\extra\httpdvhosts.conf_
### Step 2:
Uncomment the below  line to enable name based virtual hosts on your XAMPP
```
# NameVirtualHost *:80
```
So will be:

```
NameVirtualHost *:80
```
### Step 3:
For each other virtual host (website) you would like to configure on the XAMPP Apache web server, add the below code at the end of the file
```
<VirtualHost *:80>
  DocumentRoot "C:\xampp\htdocs\ie104"
  ServerName ie104project.test
  <Directory "C:\xampp\htdocs\ie104">
    Options FollowSymLinks
    AllowOverride All
    DirectoryIndex index.php
    Require all granted
  </Directory>
</VirtualHost>
```
By adding the above directives to httpd-vhosts.conf (XAMPP virtual hosts configuration file), the Apache web server running on XAMPP knows that:
1. The website files can be found in _C:\xampp\htdocs\ie104_ (line 2), **you have to replace the directory if your project in _another place_**
2. This website should respond to www.ie104project.test (line 3)
3. Allow everyone to access the content of the directory (line 4 to 7)
### Step 4:
Add the following line in the Windows Hosts File from _C:\Windows\System32\drivers\etc_
```
127.0.0.1 ie104project.test
```
### Step 5:
Restart XAMPP

**The _default_ port used by Apache is _80_, so if you have _different port_ in Apache, _replace it in step 2 and 3_ and write _ie104project.test:your-port_ in the URL instead of ie104project.test**

---

**GREAT!!!!!!** :+1:

**Welcome to the new adventure and we hope you will contribute to improve this project!!**

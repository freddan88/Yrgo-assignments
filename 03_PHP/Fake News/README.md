# Yrgo-assignments/Fake News
Assignments from School ( Yrgo ) Gothenburg : 2018-09-03 - 2020-05-29

### Assignment 1 FakeNews Yrgo

> Our first assignment in php at Yrgo in Sweden Gothenburg. Deadline for: 2018-10-31 23:59 \
This assignment is called Fake News and I have generated text from StarTrek ipsum to use as articles \
Like-buttons are connected to a function in javascript and working but will not save likes permanently \
Every author "character" have a link to wikipedia as well as authors.php which will filter authors by id...

_Languages Used:_ \
_HTML CSS PHP Javascript Markdown <- Readme.md_

[License: MIT](https://choosealicense.com/licenses/mit/)

#### Installation

![Github Repository](https://github.com/freddan88/fakenews/blob/master/screenshots/screenshot-github.png)

~~1. Click the green button "clone or download" at top of this github repository \~~

~~*( You can use git from your terminal or GitHub Desktop to clone this repository )*~~

~~2. For easy instalation on Windows, Mac or Linux you can click "Download ZIP"~~

1. HEJ

2. DÅ

3. Extract the compressed zip-archive to the root-folder of your webserver

4. Start your webserver (xampp/wamp/mamp/lamp) and open the webpage in your browser

*Example wget*
```bash
wget 
```

~~*Example Git Clone*~~
```bash
git clone https://github.com/freddan88/fakenews.git
```

pre-requirements:
* A webserver with php version 7.x like: 
[XAMPP](https://www.apachefriends.org/index.html "Download XAMPP for Windows Linux Mac") 
[WAMP](https://bitnami.com/stack/wamp/installer "Download WAMP for Windows Mac Linux")
[MAMP](https://www.mamp.info/en/downloads "Download MAMP for Mac Windows")
[LAMP Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04 "Install LAMP on Ubuntu Linux")
[LAMP CentOS6](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-centos-6 "Install LAMP on CentOS6 Linux")
[LAMP CentOS7](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-centos-7 "Install LAMP on CentOS7 Linux")
* [Git](https://git-scm.com/downloads "Git downloads Mac Windows Linux/Unix") if you need or want to clone this repository to your computer

#### Usage

* Start your browser and point the URL to this folder
* The URL will vary depending on if you downloaded or cloned this repository

**Examples:** \
_http://{webserver}/fakenews_ \
_http://{webserver}/fakenews-master_

![Startpage](https://github.com/freddan88/fakenews/blob/master/screenshots/screenshot-startpage.png)
*The above picture is the startpage were you can read all articles. They are sorted on date with the latest date first.
If you press thumb-up or thumb-down you will add likes or dislikes. Every author will have a link to wikipedia, clicking this link will open a new tabb in your browser. Every authors name are linked to the page below "authors.php"...*

![Authorpage](https://github.com/freddan88/fakenews/blob/master/screenshots/screenshot-authorpage.png)
*The above picture is the authorspage which will filter the output to only show articles from a single author.
This page also includes links to the authors wikipedia-page and also a link to authors.php for the current author.
The arrow in the header will link you back to the startpage again...*

#### Testers

Name|OS|Browser|Status
-|-|-|-
[Maja Filipsson](https://github.com/majafilipsson "Maja Filipsson GitHub")|Windows 10 Professional|Google Chrome v70.0.3538.77|working
[Maja Filipsson](https://github.com/majafilipsson "Maja Filipsson GitHub")|Windows 10 Professional|Microsoft Edge 17.17134|working
|||
[André Broman](https://github.com/laykith "André Broman GitHub")|macOS High Sierra v10.13.6|Chromium v57|working
[André Broman](https://github.com/laykith "André Broman GitHub")|macOS High Sierra v10.13.6|Mozilla Firefox v64.0b4 ( dev )|working
[André Broman](https://github.com/laykith "André Broman GitHub")|macOS High Sierra v10.13.6|Safari 11.1|working
|||
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|Windows 7 Home Premium SP1|Google Chrome v70.0.3538.77|working
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|Windows 7 Home Premium SP1|Mozilla Firefox v63.0|working
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|Windows 7 Home Premium SP1|Internet Explorer v11.0.9600.18665|working
|||
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|macOS High Sierra v10.13.6|Google Chrome v70.0.3538.77|working
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|macOS High Sierra v10.13.6|Mozilla Firefox v64.0b4 ( dev )|working
[Fredrik Leemann](https://github.com/freddan88 "Fredrik Leemann GitHub")|macOS High Sierra v10.13.6|Brave Version 0.55.20|working

#### Servers

Server|PHP|Apache
-|-|-
MAMP v5.1 (350)|v7.2.8|v2.2.34
XAMP v3.2.2|v7.2.5|v2.4.33

---

#### References

- [Star Trek main page](http://www.startrek.com)
- [Star Trek ipsum generate](https://vlad-saling.github.io/star-trek-ipsum)
- [Star Trek characters wiki](https://en.wikipedia.org/wiki/List_of_Star_Trek:_Voyager_characters)
- [Favicon generator Dan's Tools](https://www.favicon-generator.org)
- [Download free favicon blog-page](https://www.freefavicon.com/blog)
- [HTML meta-taggs and robots.txt](http://www.robotstxt.org)
- [Philip Walton Sticky Footer using flexbox](https://philipwalton.github.io/solved-by-flexbox/demos/sticky-footer)
- [Traversy Media Markdown Crash Course - YouTube](https://www.youtube.com/watch?v=HUBNt18RFbo)
- [Nicholas Cifuentes-Goodbody Academic Writing in Markdown - YouTube
](https://www.youtube.com/watch?v=hpAJMSS8pvs)

#### Some programing-snippets from this project

*New javascript*
```javascript
'use strict';

const buttons = document.querySelectorAll('.thumb-button');
const btnArray = Array.from(buttons);

btnArray.forEach((button)=>{
	let numLikes = parseInt(button.querySelector('span').innerText, 10);

	button.addEventListener('click',()=>{

		if(numLikes === 50){
			return;
		}
		button.querySelector('span').innerText = ++numLikes;
	});
});
```

*Old Javascript*
```javascript
    'use strict';

    function funcJSlikes(btx){
        let number = parseInt(btx.querySelector('span').textContent);
        if (number === 50){
            return;
        }
        btx.querySelector('span').textContent = ++number;
    }
```
*php*
```php
    declare(strict_types=1);

    function funcSortByDate(array $a, array $b): int {
    return $a['published'] <=> $b['published'];
    }
    
    function funcSearchAuthorID(array $array): bool{
        $urlAuthorID = $_GET['author_id'];
        return $array['author_id'] == $urlAuthorID;
    }
```

---

YRGO - Assignment 1 ( php ) - October 31 2018 23:59 URL [www.leemann.se/fredrik](http://www.leemann.se/fredrik)

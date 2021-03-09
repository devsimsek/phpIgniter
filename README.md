<p align="center">
  <img src="https://repository-images.githubusercontent.com/345938322/5bc25900-80ed-11eb-8406-35e75b118dc7" width="120px">
</p>

# phpIgniter Micro Php Framework

> phpIgniter is an MVC based micro framework project of Lightr project.

* phpIgniter is similar to codeigniter project. We use MVC based php scructre but we dont force you to use MVC.
* phpIgniter is well documented and supported micro framework. You can learn phpIgniter in 1 week (1 hour per day.) and
  get an Certificate on Udemy.

## Installation

Use the package manager [svcs](https://svcs.smsk.ga/web/)
or [click here](https://api.github.com/repos/devsimsek/phpigniter/tarball/master) to install phpIgniter.

```bash
# This Is Beta. Use wget svcsapi to install svcs packager.
svcs i phpigniter php@latest && svcs i --module simpledb # not required.
# or
wget https://svcs.smsk.ga/install/phpigniter | sh # recomended
```

## Usage

open application/config/config.php and set your custom configuration. Then create/edit index.php in root directory.

```php
define('DIRECT_ACCESS', TRUE); // Adding To Block Direct Access
/*
 * phpIgniter 0.0.1 DEVELOPMENT
 */

//Start the Session
session_start();
global $config;

// Startup Settings;
$config['application_dir'] = 'application'; // Application Directory. No Trailing Slash!!! (e.g. application)
$config['public_dir'] = 'static'; // Public Directory. No Trailing Slash!!! (e.g. static, public)
$config['system_dir'] = 'system'; // System Directory. No Trailing Slash!!! (e.g. system)


// Define Directories;
// Define Configuration

define('phpIgniter_VERSION', "0.0.1 DEVELOPMENT");
define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
define('APP_DIR', ROOT_DIR . $config['application_dir'] . '/');
define('SYSTEM_DIR', ROOT_DIR . $config['system_dir'] . '/');
define('PUBLIC_DIR', ROOT_DIR . $config['public_dir'] . '/');

require(APP_DIR . 'config/config.php');
define('BASE_URL', $config['base_url']);

// Include Required Files
require(ROOT_DIR . 'system/phpIgniter.php');

// Lets Ignite phpIgniter;
phpIgniter();

```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Versions

| Image | Name | Version | Description | Link |
|---------------|----------------|----------------|----------------|---|
|<img src="https://cdn4.iconfinder.com/data/icons/mammals-flat/48/Animals_Mammals_Artboard_112-512.png" width="60px">|Ocelot|0.0.1 DEV|Created phpIgniter Project|[svcs](https://svcs.smsk.ga/web/phpigniter/ocelot)|

## Upcoming Features

| Feature Name | Feature Type | Status |
|---|---|---|
|Routing System|Core|Will Be Added In Dev 0.0.1_a|

### About The Author

<hr>
<h1 align="center">Hi 👋, I'm metin</h1>
<h3 align="center">A passionate web, devops developer from Turkey</h3>

- 🔭 I’m currently working on **phpIgniter (A Micro Framework Of Lightr Project), Lightr**

- 📝 I regularly write articles on [blog.smsk.me](https://blog.smsk.me)

- 💬 Ask me about **everything**

- 📫 How to reach me **mtnsmsk@smsk.me**

- 📄 Know about my experiences [smsk.me](https://smsk.me)

- ⚡ Fun fact **I Am Good At This Job :D**

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://developer.android.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/android/android-original-wordmark.svg" alt="android" width="40" height="40"/> </a> <a href="https://angular.io" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/angularjs/angularjs-original-wordmark.svg" alt="angularjs" width="40" height="40"/> </a> <a href="https://cordova.apache.org/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/apache_cordova/apache_cordova-icon.svg" alt="apachecordova" width="40" height="40"/> </a> <a href="https://www.arduino.cc/" target="_blank"> <img src="https://cdn.worldvectorlogo.com/logos/arduino-1.svg" alt="arduino" width="40" height="40"/> </a> <a href="https://aws.amazon.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" alt="aws" width="40" height="40"/> </a> <a href="https://azure.microsoft.com/en-in/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/microsoft_azure/microsoft_azure-icon.svg" alt="azure" width="40" height="40"/> </a> <a href="https://www.gnu.org/software/bash/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/gnu_bash/gnu_bash-icon.svg" alt="bash" width="40" height="40"/> </a> <a href="https://www.blender.org/" target="_blank"> <img src="https://download.blender.org/branding/community/blender_community_badge_white.svg" alt="blender" width="40" height="40"/> </a> <a href="https://getbootstrap.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a> <a href="https://www.cprogramming.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/c/c-original.svg" alt="c" width="40" height="40"/> </a> <a href="https://canvasjs.com" target="_blank"> <img src="https://raw.githubusercontent.com/Hardik0307/Hardik0307/master/assets/canvasjs-charts.svg" alt="canvasjs" width="40" height="40"/> </a> <a href="https://www.chartjs.org" target="_blank"> <img src="https://www.chartjs.org/media/logo-title.svg" alt="chartjs" width="40" height="40"/> </a> <a href="https://codeigniter.com" target="_blank"> <img src="https://cdn.worldvectorlogo.com/logos/codeigniter.svg" alt="codeigniter" width="40" height="40"/> </a> <a href="https://offeescript.org" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/coffeescript/coffeescript-original-wordmark.svg" alt="coffeescript" width="40" height="40"/> </a> <a href="https://www.w3schools.com/cpp/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg" alt="cplusplus" width="40" height="40"/> </a> <a href="https://www.w3schools.com/cs/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/csharp/csharp-original.svg" alt="csharp" width="40" height="40"/> </a> <a href="https://www.w3schools.com/css/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.djangoproject.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/django/django-original.svg" alt="django" width="40" height="40"/> </a> <a href="https://www.docker.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg" alt="docker" width="40" height="40"/> </a> <a href="https://dotnet.microsoft.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/dot-net/dot-net-original-wordmark.svg" alt="dotnet" width="40" height="40"/> </a> <a href="https://www.electronjs.org" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/electron/electron-original.svg" alt="electron" width="40" height="40"/> </a> <a href="https://expressjs.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original-wordmark.svg" alt="express" width="40" height="40"/> </a> <a href="https://firebase.google.com/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/firebase/firebase-icon.svg" alt="firebase" width="40" height="40"/> </a> <a href="https://cloud.google.com" target="_blank"> <img src="https://www.vectorlogo.zone/logos/google_cloud/google_cloud-icon.svg" alt="gcp" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://heroku.com" target="_blank"> <img src="https://www.vectorlogo.zone/logos/heroku/heroku-icon.svg" alt="heroku" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.adobe.com/in/products/illustrator.html" target="_blank"> <img src="https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg" alt="illustrator" width="40" height="40"/> </a> <a href="https://www.java.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://kotlinlang.org" target="_blank"> <img src="https://www.vectorlogo.zone/logos/kotlinlang/kotlinlang-icon.svg" alt="kotlin" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.linux.org/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/linux/linux-original.svg" alt="linux" width="40" height="40"/> </a> <a href="https://mariadb.org/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/mariadb/mariadb-icon.svg" alt="mariadb" width="40" height="40"/> </a> <a href="https://www.mathworks.com/" target="_blank"> <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/master/icons/mathworks.svg" alt="matlab" width="40" height="40"/> </a> <a href="https://www.mongodb.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mongodb/mongodb-original-wordmark.svg" alt="mongodb" width="40" height="40"/> </a> <a href="https://www.microsoft.com/en-us/sql-server" target="_blank"> <img src="https://cdn.worldvectorlogo.com/logos/microsoft-sql-server.svg" alt="mssql" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.nginx.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nginx/nginx-original.svg" alt="nginx" width="40" height="40"/> </a> <a href="https://nodejs.org" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" width="40" height="40"/> </a> <a href="https://developer.apple.com/library/archive/documentation/Cocoa/Conceptual/ProgrammingWithObjectiveC/Introduction/Introduction.html" target="_blank"> <img src="https://www.vectorlogo.zone/logos/apple_objectivec/apple_objectivec-icon.svg" alt="objectivec" width="40" height="40"/> </a> <a href="https://www.photoshop.com/en" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/photoshop/photoshop-line.svg" alt="photoshop" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> <a href="https://www.postgresql.org" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/postgresql/postgresql-original-wordmark.svg" alt="postgresql" width="40" height="40"/> </a> <a href="https://postman.com" target="_blank"> <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" alt="postman" width="40" height="40"/> </a> <a href="https://pugjs.org" target="_blank"> <img src="https://cdn.worldvectorlogo.com/logos/pug.svg" alt="pug" width="40" height="40"/> </a> <a href="https://github.com/puppeteer/puppeteer" target="_blank"> <img src="https://www.vectorlogo.zone/logos/pptrdev/pptrdev-official.svg" alt="puppeteer" width="40" height="40"/> </a> <a href="https://www.python.org" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="40" height="40"/> </a> <a href="https://pytorch.org/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/pytorch/pytorch-icon.svg" alt="pytorch" width="40" height="40"/> </a> <a href="https://reactjs.org/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" width="40" height="40"/> </a> <a href="https://reactnative.dev/" target="_blank"> <img src="https://reactnative.dev/img/header_logo.svg" alt="reactnative" width="40" height="40"/> </a> <a href="https://www.ruby-lang.org/en/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/ruby/ruby-original.svg" alt="ruby" width="40" height="40"/> </a> <a href="https://www.sqlite.org/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/sqlite/sqlite-icon.svg" alt="sqlite" width="40" height="40"/> </a> <a href="https://developer.apple.com/swift/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/swift/swift-original.svg" alt="swift" width="40" height="40"/> </a> <a href="https://www.tensorflow.org" target="_blank"> <img src="https://www.vectorlogo.zone/logos/tensorflow/tensorflow-icon.svg" alt="tensorflow" width="40" height="40"/> </a> <a href="https://www.typescriptlang.org/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-original.svg" alt="typescript" width="40" height="40"/> </a> <a href="https://unity.com/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/unity3d/unity3d-icon.svg" alt="unity" width="40" height="40"/> </a> <a href="https://unrealengine.com/" target="_blank"> <img src="https://raw.githubusercontent.com/kenangundogan/fontisto/036b7eca71aab1bef8e6a0518f7329f13ed62f6b/icons/svg/brand/unreal-engine.svg" alt="unreal" width="40" height="40"/> </a> <a href="https://dotnet.microsoft.com/apps/xamarin" target="_blank"> <img src="https://raw.githubusercontent.com/detain/svg-logos/780f25886640cef088af994181646db2f6b1a3f8/svg/xamarin.svg" alt="xamarin" width="40" height="40"/> </a> </p>

## Links

[License](https://choosealicense.com/licenses/mit/) | [Author's Website](https://smsk.me) | [Github](https://github.com/devsimsek/phpIgniter) | [Changelog](https://github.com/devsimsek/phpIgniter/wiki/Changelog)

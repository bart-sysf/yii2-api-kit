# Yii 2 API Kit
Heavily inspired by [trntv/yii2-starter-kit](https://github.com/trntv/yii2-starter-kit), this API kit may be used to quickly start building your Yii2-based API and not waste any time on initializing your project. 

This kit is in development. [Would you like to contribute?](#how-to-contribute)

## TABLE OF CONTENTS
* [Features](#features)
* [Installation](#installation)
* [Configuration](#configuration)
* [Testing](#testing)
* [Console commands](#console-commands)
* [How to contribute?](#how-to-contribute)
* [Issues](#issues)
* [Read more](#read-more)

## FEATURES
* Migrations for initial database with user-functionality
* AutoController which generates ActiveRecords models and API documentation based on apidoc
* Pre-created account functionality (register & login)
* Authentication based on HTTP-header
* dotenv support
* Test-ready

## REQUIREMENTS
* PHP >= 5.6.0
* Composer >= 1.1.2 (https://getcomposer.org/)
* Node.js >= 8.1.0 (https://nodejs.org/en/)

## INSTALLATION
Please follow these instructions carefully to quickly start building your own API.

### Composer
* Install all required Composer packages (```composer install```).
* When deploying to production, only install production packages (```composer install --no-dev```).

### Node.js
* Install all required Node.js packages (```npm install```).
* When deploying to production, only install production packages (```npm install --production```).

### Environment
* Rename ```.env.demo``` to ```.env``` in your project root and alter the variables to your current environment.
* Make sure that the ```ENTRY_URL``` variable has a trailing slash (/).

### Webserver
* Follow the instruction in the [Yii2 guide](http://www.yiiframework.com/doc-2.0/guide-start-installation.html) to make 
your API available to the internet (or to your local development environment).

## TESTING
This api-kit is test-ready. 
The controllers and models are included in both acceptance and unit testing based on Codeception. 
They are located in ```/tests```. To execute the tests, run ```./vendor/bin/codecept run```.

## CONSOLE COMMANDS

### AutoController
These actions should normally not run on a production server. 
The actions mentioned here generate files and data that may be used in development or testing. 
When executing these actions in a production environment, the controller will generate a warning prompt that you may override.

#### ./yii auto/all
Executes all the actions in the AutoController.

#### ./yii auto/gii-models
Generates ActiveRecords for all the tables in your database in the ```./models``` folder. 
It automatically overwrites the ActiveRecords if they exist.
The ActiveRecords are named ```Base[Tablename]``` and extend ```BaseActiveRecord```.
It also creates a class ```[Tablename]``` which extends ```Base[Tablename]``` for custom code, extra validation rules, etc.
The ```[Tablename]``` class will not be overridden when executing the action again.

#### ./yii auto/apidoc
Generates API documentation based on [apidoc](http://apidocjs.com/) from the comments in the ```./controllers``` folder.
It outputs the documentation in the Git-ignored folder ```./web/apidoc```.
You may include this folder in Git manually if you want to export the documentation to a production server.
Please note, apidoc is a dev-dependency in Node.js. It will only be installed when using the ```npm install``` command.

## ISSUES
If you have any questions or experience any issues with this kit, please [submit an issue](https://github.com/blurrywindows/yii2-api-kit/issues).

## READ MORE
* https://github.com/yiisoft/yii2/blob/master/README.md
* https://github.com/yiisoft/yii2/tree/master/docs/guide

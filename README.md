<p align="center"><h3>Multitenant Laravel with Keycloak integration</h3></p>



## About 

This is a barebones Multitenant Laravel application with Keycloak for authentication. Currently working with the latest version of keycloak(18.x). I modified and integrated the [laravel-keycloak-web-guard](https://github.com/mariovalney/laravel-keycloak-web-guard) package to work on the latest version of keycloak(18.x). As well as to work for multitenancy

## Installation

You will need a working installation of keycloak. Setting up keycloak is out of the scope of this project. The quickest way to setup keycloak is using their docker image [Keycloak](https://github.com/keycloak/keycloak-containers)

Assuming you already have a working installation of keycloak, fill out the enviroment variables and run the laravel application as usual.

## Issues

At the moment keycloak seperates the tenant in a per realm. There is a known issue in which keycloak struggles to work once you reach ~400+ realms [Issue](https://keycloak.discourse.group/t/maximum-limit-of-realms/8189). A workaround this to put all your tenant in a single realms and seperate them with a combination of roles and groups [One-Realm](https://medium.com/swlh/using-keycloak-for-multi-tenancy-with-one-realm-7be81583ed7b).  
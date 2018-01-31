# Simple-RESTful-API-CRUD-using-CodeIgniter
Here I make a very simple RESTful API CRUD operation using [CodeIgniter](https://codeigniter.com/)

## Files
`rest_ci` as REST server that serves resources

`rest_ci_client` as REST client that uses the resources

## Requirements
1. PHP 5.4 +
2. CodeIgniter 3.xx

## Installation
Simply put `rest_ci` and `rest_ci_client` to your `htdocs` or `www` folder. Then load [`kontak.sql`](https://github.com/arnoldgultom/Simple-RESTful-API-CRUD-using-CodeIgniter/blob/master/rest_ci/kontak.sql) to your DBMS (I use mySQL)

## This project uses these libs
[https://github.com/chriskacerguis/codeigniter-restserver](https://github.com/chriskacerguis/codeigniter-restserver), used in `rest_ci`

[https://github.com/philsturgeon/codeigniter-curl](https://github.com/philsturgeon/codeigniter-curl), used in `rest_ci_client`

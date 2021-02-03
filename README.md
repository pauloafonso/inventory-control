# Inventory Control Application

Training small DDD-based application development using PHP 8.

## Ubiquitous language glossary

* **product**: product to be registered
* **sale**: a product sales agreement signed, containing quantity and value of each product sold, as well as the total value and total quantity
* **client**: customer who buys products
* **bar code**: the barcode that will be printed and pasted on the product sold

## organization / layers:

### Domain Layer

Is represented by src/Domain directory which contains the Entities, Aggregate Objects, Aggregate Roots, Value Objects (src/Domain/Entity), domain validators (src/Domain/Validators) and the Interfaces to use external services (such as the agnostic ORM implementations in the Application Layer [src/Domain/RepositoryInterface]). This layer must not depend on any other.

### Infrastructure Layer

Represented by src/Infrastructure directory, contains persistence, db connection, http communication and external services or libraries implementations.

***Persistence sub-layer***: Contains ORM files (in this case, Illuminate Model Entities) and repository implementations to work with database and persistence.

***Http comunication***: Controllers to handle with external http calls, using Slim Framework.

***External services / libraries***: Soon there will be here a document printer implementation.

### Application Layer:

A thin layer which has the job of isolating the "external world" which is using this app from the domain layer, no matter how is this connection (http api, cli, etc). Its services are supposed to be oriented by the bussines use cases, therefore there is this UseCaseInterface that is implemented by the services within the dir Application.

## docker:
```bash
docker build -t inventory-control-image
```
```bash
docker run -d --restart=unless-stopped --mount type=bind,source="$(pwd)",target=/var/www/inventory-control -p 8081:80 --name ic-container ic-image
```

***executable re-building file***

in order to facilitate the docker rebuilding process, there is this sh file which can be executed:

```bash
sh rebuild-docker.sh
```

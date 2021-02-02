# Inventory Control Application

## purpose:

Training small DDD-based applications development.

## Ubiquitous language glossary, bounded-contexts, context-map:

soon i'll upload ;P

## organization / layers:

### Domain Layer

Is represented by src/Domain directory which contains the Entities, Aggregates and Value Objects (src/Domain/Entity), domain validators (src/Domain/Validators) and the Interfaces to use external services (such as the agnostic ORM implementations in the Application Layer [src/Domain/RepositoryInterface]). This layer must not depend on any other.

### Infrastructure Layer

Represented, for a while, only by src/Persistence dir, which has the database / ORM implementations. Inside this dir there are two directories: 1) Repository, wich is supposed to have the interface repository implementations (in this case, using Illuminate ORM); and 2) Models, where is supposed to be the Entities classes representing the database tables (in this implementation, I'm going to use MYSQL).

### Application Layer:

Is the thin layer which deals with the connection between the application and UI. In this case, I'm going to develop a public HTTP API using Slim Framework.

## docker:

`docker build -t inventory-control-image`

`docker run -d --restart=unless-stopped --mount type=bind,source="$(pwd)",target=/var/www/inventory-control -p 8081:80 --name inventory-control-container inventory-control-server`

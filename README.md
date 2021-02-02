h2. prupose:

Training samll DDD-based applications development.

h2. ubiquitous language glossary, bounded-contexts, context-map:

soon i'll upload ;P

h2. organization / layers:

h3. Domain Layer

Is represented by src/Domain directory, wich contains the Entities, Agregattes and Value Objects (src/Domain/Entity), domain validators (src/Domain/Validators) and the Interfaces to use external services (such as the agnostic ORM implementations in the Application Layer [src/Domain/RepositoryInterface]). This layer must not depend on any other.

h3. Infrastructure Layer

Represented, for a while, only by src/Persistence dir, wich has the database / ORM implementations. Inside this dir there is two directories: 1) Repository, wich is supposed to have the interface repository implementations (in this case, using Illuminate ORM); and 2) Models, where is suposed to be the Entities classes representing the database tables (in this implementation, I'm going to use MYSQL).

h3. Application Layer:

Is the thin layer wich deals with the connection between the application and UI. In this case, I'm going to develop a public HTTP API using Slim Framework.

h2. docker:

`docker build -t inventory-control-image`

`docker run -d --restart=unless-stopped --mount type=bind,source="$(pwd)",target=/var/www/inventory-control -p 8081:80 --name inventory-control-container inventory-control-server`


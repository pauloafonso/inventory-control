docker stop -t0 ic-container &&
docker container rm ic-container &&
docker build -t ic-image . &&
docker run -d --restart=unless-stopped --mount type=bind,source="$(pwd)",target=/var/www/inventory-control -p 8081:80 --name ic-container ic-image
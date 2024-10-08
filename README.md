# cyber_training_docker

Containerized environment to realize exercises on web application security.

> [!WARNING]
> Be careful, the web applications exposed by the docker images deliberately contain vulnerabilities.
> Do not expose these web applications on a untrusted network.

# How it Works

Docker-compose is used to build the environment.
4 docker containers will be started:
- php73: which includes cyber exercices based on php application (exposed on port 80).
- mysql8: which includes the mysql BDD used by php73 applications (exposed on port 3306).
- phpmyadmin: which includes the PHPMyAdmin UI to configure the mysql8 database (exposed on port 8080).
- dvwa: which includes a DVWA instance for cybersecurity exercices (exposed on port 8899).

# Setup

 - Ensure you have Docker and Docker-composed installed
 - `git clone` this repository
 - `sudo docker-compose up -d` 


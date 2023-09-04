# Docker

## overview

* Docker allow mutiple applications with different packages and dependencies to run inside same machine
side by side without conflicting with each other.
* Each application in docker share os of hosts compared to VMs that require thier own os installed.

* To dockerize an application we write a Dockerfile. Docker take instructions from this file and convert it into an image.

* image has source code files, packages,dependencies and all other things required to run an application in any os. images are readonly template.

* When we have an image, we tell docker to start a container. Container is a special kind of process. it has its own filesystem which is provided by image. so our app get loaded in container and this is how we run our application locally.

## Docker Commands:
 * docker ps
 (this will show running docker containers)

 * docker ps -a
 (this will show all containers including those that are stopped)


 * docker container ls -aq
  (this command will bring ids of all running and stopped container. ) 


* docker container rm -f $(docker container ls -aq)
    (removing all container)
* docker image ls -q
   (show images id)

 * docker image rm <image_id>
(to remove any image using id)
* docker image rm -f $(docker image ls -aq)


 * docker images

* docker images -a


* docker-compose up

* docker-compose down

* docker-compose up --build

 
* docker-compose up -d
(running container in detached mode.)







     
  
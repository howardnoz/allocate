docker run --name allocate_mysql \
    -p 3306:3306 \
    -e MYSQL_ROOT_PASSWORD=password1 \
    -e MYSQL_DATABASE=allocate \
    -d mysql:5.7

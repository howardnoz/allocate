start-mysql:
	sh bin/start-mysql.sh

stop-mysql:
	docker stop allocate_mysql

remove-mysql: stop-mysql
	docker rm allocate_mysql

restart-mysql: remove-mysql
	sh bin/start-mysql.sh

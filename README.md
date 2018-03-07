# ChainboxOpg

Det eneste repositoriet mangler er en phpmyadmin database, men den bliver heller ikke brugt lige nu.

her er docker commandsene (som jeg tror du har liggende i forvejen) den sidste laver en phpmyadmin database som er hooket op til mysqlen

passwords og brugernavne er censoreret så bare tilføj dit eget i stedet for "(password)", -v stierne skal nok også rettes til efter dit setup

docker run --name wpmysql -e MYSQL_ROOT_PASSWORD="(password)" -v C:\Docker\WPMysql:/var/lib/mysql -d mysql:5.7

docker run --name wordpress --link wpmysql:mysql -e WORDPRESS_DB_PASSWORD="(password)" -v C:\Docker\wordpress:/var/www/html/wp-content -p 8080:80 -d wordpress

docker run --name myadmin -d --link wpmysql:db -e MYSQL_USERNAME="(password)" -e MYSQL_ROOT_PASSWORD="(password)" -p 8081:80 phpmyadmin/phpmyadmin

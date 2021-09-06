FROM mysql:latest

# set these to something more secure before building.
# also, read up on using Docker secrets so these don't
# get stored in a repository.
ENV MYSQL_ROOT_PASSWORD=passw0rd \
  MYSQL_DATABASE=testing \
  MYSQL_USER=testing \
  MYSQL_PASSWORD=testing

# note to whoever is reading this: these entries get executed in
# alphabetical order. the schema needs to be created before the
# database gets populated, and that's why the files get renamed
# as they do.
ADD schema.sql /docker-entrypoint-initdb.d/a.sql
ADD populate.sql /docker-entrypoint-initdb.d/b.sql

RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/

EXPOSE 3306

FROM mysql:latest

# note to whoever is reading this: these entries get executed in
# alphabetical order. the schema needs to be created before the
# database gets populated, and that's why the files get renamed
# as they do.
ADD schema.sql /docker-entrypoint-initdb.d/a.sql
ADD populate.sql /docker-entrypoint-initdb.d/b.sql

RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/

EXPOSE 3306

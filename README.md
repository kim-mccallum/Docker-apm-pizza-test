Simple sample Docker thing to create an Apache/PHP/MySQL
application. Mostly a proof of concept before I tear into bigger
and better things.

Before building/running, edit passwords in mysql/Dockerfile. Then:

```console
cd /where/this/application/lives
docker compose up -d
```

Running application lives at http://127.0.0.1:8000

PHPInfo lives at http://127.0.0.1:8000/info.php

DB Admin page lives at http://127.0.0.1:8080



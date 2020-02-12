>To get migration help type `php artisan migrate --help`

```bash
wchamara@DESKTOP-44CNAP9 MINGW64 /c/xampp/htdocs/rest api/restapi (master)
$ php artisan migrate --help
Description:
  Run the database migrations

Usage:
  migrate [options]

Options:
      --database[=DATABASE]  The database connection to use
      --force                Force the operation to run when in production
      --path[=PATH]          The path(s) to the migrations files to be executed (multiple values allowed)
      --realpath             Indicate any provided migration file paths are pre-resolved absolute paths
      --pretend              Dump the SQL queries that would be run
      --seed                 Indicates if the seed task should be re-run
      --step                 Force the migrations to be run so they can be rolled back individually
  -h, --help                 Display this help message
  -q, --quiet                Do not output any message
  -V, --version              Display this application version
      --ansi                 Force ANSI output
      --no-ansi              Disable ANSI output
  -n, --no-interaction       Do not ask any interactive question
      --env[=ENV]            The environment the command should run under
  -v|vv|vvv, --verbose       Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

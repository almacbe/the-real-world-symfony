# The Real Project API

Symfony 7 implementation of the RealWorld backend specification (https://realworld-docs.netlify.app).

## Requirements
- PHP 8.4 with `pdo_sqlite` (and `pdo_pgsql` when using PostgreSQL)
- Composer
- OpenSSL (for JWT key generation)
- Node.js with [`newman`](https://www.npmjs.com/package/newman) installed globally
- (Optional) Symfony CLI for local server management

## Installation
1. Install dependencies:
   ```bash
   composer install
   ```
2. Generate JWT keys (skip if already present):
   ```bash
   php bin/console lexik:jwt:generate-keypair --skip-if-exists
   ```
3. Create the database schema and seed demo data:
   ```bash
   php bin/console doctrine:migrations:migrate --no-interaction
   php bin/console app:seed
   ```

## Running the Application
Start a local HTTP server (either method works):
```bash
# Using PHP built-in server
php -S 127.0.0.1:8000 -t public

# Or with Symfony CLI
symfony server:start --port=8000 --no-tls
```
The API will be available at `http://127.0.0.1:8000/api`.

## Make Targets
```
make install   # composer install
make serve     # php -S 127.0.0.1:8000 -t public
make migrate   # run doctrine migrations
make seed      # seed demo data
make test      # run PHPUnit suite
make cs        # code style check (php-cs-fixer)
make stan      # PHPStan level 8
make postman   # run official Postman suite with newman
```

Equivalent Composer scripts exist for the same tasks (`composer test`, `composer cs`, `composer stan`, `composer postman`, ...).

## Testing
- PHPUnit: `composer test`
- Code style: `composer cs`
- Static analysis: `composer stan`
- Postman collection: `composer postman`

> **Note**: `composer stan` and `composer postman` rely on PHAR binaries stored in the `tools/` directory. They require the ability to open local TCP sockets. If your environment blocks binding local ports, run these commands on a machine where it is permitted.

## Postman / Newman
The official RealWorld collection is bundled as `Conduit.postman_collection.json`. Run the entire suite with:
```bash
composer postman
```
The helper script `run-api-tests.sh` mirrors the upstream RealWorld runner. It accepts the same environment variables:
- `APIURL` (default `http://127.0.0.1:8000/api`)
- `USERNAME`, `EMAIL`, `PASSWORD` (randomised by default)
- `DELAY_REQUEST` (default `50`, in milliseconds)
Any extra arguments passed to `composer postman`/`run-api-tests.sh` are forwarded to `npx newman`.
By default the script targets `http://127.0.0.1:8001/api`; either run the local server on that port or override `APIURL` before executing the tests.

## Switching to PostgreSQL
1. Update `.env` (or `.env.local`) with a PostgreSQL DSN, e.g.:
   ```dotenv
   DATABASE_URL="postgresql://user:password@127.0.0.1:5432/realworld?serverVersion=16&charset=utf8"
   ```
2. Re-run migrations:
   ```bash
   php bin/console doctrine:migrations:migrate --no-interaction
   ```

## Assumptions
- The sandbox used to build this project does not permit binding to local TCP ports; therefore `composer stan` and `composer postman` could not be executed here. They are wired and ready to run on a standard local setup.
- JWT keys are generated with an empty passphrase by default. Update `JWT_PASSPHRASE` in the environment when using a non-empty passphrase.

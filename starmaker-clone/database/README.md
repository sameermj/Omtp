# Database Setup and Migrations

This directory contains the necessary files for managing the database setup and migrations for the StarMaker clone application.

## Migrations

- **migrations/init.sql**: This file includes SQL commands to initialize the database schema. It sets up the necessary tables and relationships required for the application to function properly.

## Usage

To apply the migrations, execute the SQL commands in `init.sql` on your MySQL database. Ensure that your database connection settings are correctly configured in the application before running the migrations.

## Best Practices

- Always back up your database before applying new migrations.
- Test migrations in a development environment before deploying to production.
- Keep track of changes in the database schema to maintain consistency across different environments.
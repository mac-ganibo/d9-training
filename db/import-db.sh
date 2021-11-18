# Use a table that should exist in your database.
if ! mysql -e 'SELECT * FROM users;' db 2>/dev/null; then
  echo 'Importing the database'
  # Provide path to custom database.
  gzip -dc /var/www/html/db/db.sql.gz | mysql db
fi
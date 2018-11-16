Database Setup (Usig Vagrant VM)

1) If needed, change IP address in dataScrape.php on line 9.

2) Create a database named 'pokedex' in a database manager. 

3) Run 'database/pokedex_2018-11-14.sql' in a database manager to create the Pokemon table.

4) In the terminal, navigate to 'pokedex-2018-phbees', run 'vagrant ssh', cd into /var/www/html/pokedex-2018-phbees/script and run 'php dataScrape.php' to populate the Pokemon table.

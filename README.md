# Vulnerable-Web-App
Web app that is vulnerable to SQL-Injection and XSS attacks.

Add text data to template.html

---

### To start 
Install docker and docker-compose 

`cd public`

Run `docker-compose start`

Run `docker-compose up`

Navigate to <http://localhost:8080>

---

### To add tables or records in MySQL
Edit `public/sql/dump.sql`

Run `docker-compose stop`

Run `docker-compose rm`

Start app again

---

### SQL Inject Tutorial
Navigate to <http://localhost:8080/catalog.html>

Enter `Hammer` to see how table shows up

Enter `Hammer' UNION SELECT table_schema, table_name, 1, 1 FROM information_schema.tables;#` to view all tables

*All tables with table_schema ceh are in current database*

Enter `Hammer' UNION SELECT * FROM users;#` to view information from users table

---

### XSS Tutorial
Navigate to <http://localhost:8080/contact.html>

All three of the form inputs with output to the page once button is pressed

Enter into any of the boxes `<button onclick="alert('test');">Test</button>` to test for XSS Vulnerability

*Insert any script into the onclick portion of the button to have it run when the button is clicked*

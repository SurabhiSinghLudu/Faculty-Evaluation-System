 <?php 
 // Connects to your Database 
 mysql_connect("localhost", "bitcoin_jigyasa", "India!@#456") or die(mysql_error()); 
 mysql_select_db("bitcoin_jigyasa") or die(mysql_error()); 
 mysql_query("CREATE TABLE tablename ( name VARCHAR(30), 
 age INT, car VARCHAR(30))"); 
 Print "Your table has been created"; 
 ?> 


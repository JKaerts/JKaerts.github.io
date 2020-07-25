<?php 
$title="Moving from csv files to SQLite tables";
include("header.php");
?>

<?= topic($title) ?>
<p>
After following a couple tutorials on SQL I wanted to convert some tabular data on my computer to a SQLite database.
Here is a quick summary of the steps I followed in order to convert my list of cd's to a relational database.
</p>

<?= heading("Prerequisites") ?>
<p>
I used the following things.
</p>
<ul>
  <li>SQLite: Of the well-known relational databases, SQLite allows me to store the database as a file on disk, is extremely lightweight and very easy to install. I just downloaded the binaries and added them to my path.</li>
  <li>DB Browser for SQLite: One of the advantages of csv files is that I can open them in a program like Microsoft Excel of Libreoffice Calc and immediately see the structure of the data. DB Browser for SQLite gives the same possibilities to SQLite databases.</li>
  <li>A csv-file containing your data: I will assume the csv-file is delimited by commas and has a header.</li>
</ul>

<?= heading("Making a single table") ?>



<pre>
-- load data.csv into a temporary table
.mode csv
.import data.csv raw_finances

-- The table raw_finances still treats every column as text.
-- This small alteration makes sure the amounts are treated
-- as integers.
drop table if exists finances;
create table finances as
  select
    date,
	description,
	account,
	cast(amount as integer) as amount
  from raw_finances;

-- Clean the raw data
drop table raw_finances;
</pre>

<?php 
include("footer.php");
?>

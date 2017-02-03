<?php
echo "<!doctype html>";

echo <<<STYLE
<style>
table, td, th {
    border: 1px solid black;
}

td {
    padding: 2px 2px 2px 2px;
}


table {
    border-collapse: collapse;
    width: 50%;
}

th {
	background-color: #aac
}


tr:hover {background-color:ee0; }

tr:nth-child(odd)		{ background-color:#eee; }
tr:nth-child(even)		{ background-color:#ccc; }






</style>
STYLE;



$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-Mail Address</th><th>Info</th></tr>";

foreach($people as $item) {
		$button = "<input value=\"Click Here\" type=\"button\" onclick=\"javascript:alert('You selected    \\r\\nName: {$item['first_name']} \\r\\nEmail: {$item['email']}')\"";
		echo "<tr><td>{$item['id']}</td><td>{$item['first_name']}</td><td>{$item['last_name']}</td><td>{$item['email']}</td><td>$button</td></tr>";
}

echo "</table>";

?>

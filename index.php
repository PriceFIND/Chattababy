<html>
<>

<?php

$mysqli=new mysqli("localhost","bubbles","yellow","chattababy");

//put sql code in here
$result=$mysqli->query("
SELECT chat_messages, user_names. name AS 'Username',
	chat_rooms.name_of_room AS 'room'
FROM chat_messages
		INNER JOIN user_names ON
		chat_messages.sender = user_names.ID
		INNER JOIN chat_rooms ON
		chat_messages.room = chat rooms.ID
");		

$result_count = $mysqli->field_count;


$html=
	"<html>
		<head>
			</head>
				<body>
					<table>
						<tr>
							<td><b>ID</b></td>
							<td><b>User Name</b></td>
							<td><b></b></td>
							<td><b></b></td>
							<td><b></b></td>
							<td><b></b></td>
							</tr>";

while($row=$result->fetch_array())
{
	$html.="<tr>";
	for($i=0; $i<$result_count; $i++)
	{
	$html.="<td>".$row[$i]."</td>";
}
$html.="</tr>";
}

$html.=
"</table>
</body>
</html>";

echo $html;


?>

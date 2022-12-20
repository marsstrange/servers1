<?php
require_once '../../vendor/autoload.php';
include 'diagrams_maker.php';
include 'addWatermark.php';

?>
 

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег table</title>
  <style>
   table {
    width: 100%; /* Ширина таблицы */
    background: white; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    border-spacing: 1px; /* Расстояние между ячейками */
   }
   td, th {
    background: #6600ff; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг текста */
   }

   td {
    background: #C69FFF; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг текста */
   }
  </style>
 </head> 
 <body>
  <table>
   <tr><th>Id</th><th>Name</th><th>Email</th><th>Phone number</th><th>Password</th><th>Avarage attendance</th><th>Salary</th><th></th></tr>
   <?php
   for ($i = 1; $i < 51; $i++) {
       $faker = Faker\Factory::create();
       $id[] = $i;
       $name[] = $faker->name();
       $email[] = $faker->email();
       $numb[] = $faker->tollFreePhoneNumber();
       $pass[] = $faker->password();
       $att[] = $faker->numberBetween(1000, 100000);
       $salary[] = $faker->numberBetween(200, 1000);
   }

   	for ($i = 0; $i < 50; $i++){
	   	echo "<tr>";
        echo "<td>" . $id[$i] . "</td>";
		echo "<td>" . $name[$i] . "</td>";
		echo "<td>" . $email[$i] . "</td>";
		echo "<td>" . $numb[$i] . "</td>";
		echo "<td>" . $pass[$i] . "</td>";
        echo "<td>" . $att[$i] . "</td>";
        echo "<td>" . $salary[$i] . "</td>";
		echo "</tr>";
   	}
   $file = makeDiagram($salary, $att, $i, 1);
   $file_2 = makeDiagram($att, $id, $i, 2);
   $file_3 = makeDiagram($salary, $id, $i, 3);
   addWatermark($file);
   addWatermark($file_2);
   addWatermark($file_3);

?>
  </table>
  <img src="<?php echo $file; ?>">
  <img src="<?php echo $file_2; ?>">
  <img src="<?php echo $file_3; ?>">
 </body>
</html>


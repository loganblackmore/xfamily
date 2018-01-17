<?php
if (isset($_GET['Date']) &&isset($_GET['Time']) && isset($_GET['Text'])) // проверка на Null
{
    $Date = $_GET['Date']; // Дата
    $Time = $_GET['Time']; // Время
    $Text = $_GET['Text']; // Текст

    $file = 'developer.txt'; // Имя файла куда всё записыват
    if (empty($file)) // Проверка на Null
    {
  echo "No file name";
    }
    else
    {
  $current = file_get_contents($file);
  $current .= "$Date - $Time\n$Text\n";

  file_put_contents($file, $current);
  echo "Text ADD";
    }
}
else
{
    echo "Not Markers"
}
?>

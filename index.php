<html>
    <head>
    </head>
    <body>
    	<?php
           // 1. Выполнить задания из теоретической части. 
		   // 2. Определить существует ли файл?
		   // 3. Определить доступен ли файл для чтения? 
		   // 4. Определить доступен ли фал для записи? 
		   // 5. Определить размер файла в байтах? 
		   // 6. Вывести данную информацию на страницу. 
		   // 7. Прочитать из файла информацию. Вывести на экран 
		   // 8. Записать в файл информацию. 
		   // 9. Удалить одну строку из файла (на выбор преподавателя). 
		   // 2 file_exists — Проверяет наличие указанного файла или каталога
		   // 3 is_readable — Определяет существование файла и доступен ли он для чтения
		   // 4 is_writable — Определяет, доступен ли файл для записи
		   // 5 filesize — Возвращает размер файла
		   // 7 file_get_contents — Читает содержимое файла в строку
		   // 7 readfile — Выводит файл
		   // 7 file — Читает содержимое файла и помещает его в массив
		   // 8 file_put_contents — Пишет строку в файл
            $fe=file_exists("file.txt");
			if ($fe == 1) {
				echo "File is!<br/>";
			} else {
				echo "No file!<br/>";
			}
            $ir=is_readable("file.txt");
            if ($ir == 1) {
				echo "The file exists and is readable!<br/>";
			} else {
				echo "The file does not exist and can not be read!<br/>";
			}
			$iw=is_writable("file.txt");
            if ($ir == 1) {
				echo "File is writable!<br/>";
			} else {
				echo "File not writable!<br/>";
			}
			$file=file("file.txt");
            $fp=fopen("file.txt","w");
			$fs=filesize("file.txt");
			echo "File.txt is " . $fs . " bytes<br/>";
            for($i=0;$i<sizeof($file);$i++) {
                echo $file[$i];
            }
            fwrite($fp,"Hello world!!<br>");
            unset($file[2]);
            fputs($fp,implode("",$file));

            fclose($fp);
        ?>   
    </body>
</html>
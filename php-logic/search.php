<?php
if (!empty($_GET['word']))
{
	$dir = '../html/';
	$files = scandir($dir);
	$count = count($files); // Кол-во файлов
	$searchingWord = preg_replace("'<script[^>]*?>.*?'si", "", $_GET['word']);
	for ($i = 2; $i < $count; $i++)
	{

		$fileText = file_get_contents($dir . $files[$i]);
		$fileText = strstr($fileText, "<body>");
		$fileText = preg_replace('/' . $searchingWord . '/', '<mark>' . $searchingWord . '</mark>', $fileText);
		$textLenght = strlen($fileText); // длина строки
		// Получаем в $wordArray массив всех содержаний слова в файле с его позицией
		preg_match_all('/' . $searchingWord . '/', $fileText, $wordArray, PREG_OFFSET_CAPTURE);
		$fullText[] = $fileText;
		echo '<h3> В файле ' . $files[$i] . ' найдено ' . count($wordArray[0]) . ' cовпадений слова "' . $searchingWord . '"</h3>
	<h4>Текст файла</h4>';
		echo '<article>' . $fileText . '</article>';
	}
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../includes/readmore.js"></script>
<script>
    $('article').readmore({
        maxHeight: 240,
        moreLink: '<a href="#">Развернуть текст</a>',
        lessLink: '<a href="#">Свернуть текст</a>'
    });
</script>

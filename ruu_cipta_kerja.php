<?php
	$allText = '';

	for($i = 1; $i <= 1028; $i++) {
		echo "Processing page " . $i . "\n";

		$textPerPage = shell_exec('/usr/bin/pdftotext -f ' . $i . ' -l ' . $i . ' -layout BALEG-RJ-20200605-100224-2372.pdf -');

		$textPerPage = rtrim($textPerPage, "\n\f");
		$textPerPage = rtrim($textPerPage, $i);

		$page = str_pad($i, 4, "0", STR_PAD_LEFT);

		file_put_contents('ruu_cipta_kerja_pages/page_' . $page . '.txt', $textPerPage);

		$textPerPage = "=============================== PAGE " . $i . " ===============================\n\n\n" . 
		        	   $textPerPage .
		        	   "\n\n\n";

		$allText = $allText . $textPerPage;
	}

	file_put_contents('BALEG-RJ-20200605-100224-2372.txt', $allText);

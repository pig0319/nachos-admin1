<?php
				$tableData = stripcslashes($_POST['pTableData']);
				$tableData = json_decode($tableData,TRUE);
				echo $tableData[1]['description'];
	?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $table = $_POST["table"];
//    var_dump($table); exit;
require 'vendor/autoload.php'; // Include the autoload file from PhpSpreadsheet

 $html = $table;
//  file_get_contents('table.php');
// var_dump($html); die;
// Create a new Excel workbook and worksheet
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Parse HTML and populate Excel
$dom = new DOMDocument();
$dom->loadHTML($html);
$rows = $dom->getElementsByTagName('tr');
$rowIndex = 1; // Initialize the row index

foreach ($rows as $row) {
    $columns = $row->getElementsByTagName('td');
    $columnIndex = 1; // Initialize the column index for each row
    $rowData = [];

    foreach ($columns as $column) {
        $rowData[] = $column->nodeValue;
    }

    // Set the entire row of data at once
    $sheet->fromArray($rowData, null, 'A' . $rowIndex);
    $rowIndex++; // Increment the row index
}

// Send headers to force a download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="convert.xlsx"');
header('Cache-Control: max-age=0');

// Save Excel file to output stream
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('php://output');

echo "<h1>Table converted into Excel format and downloaded successfully</h1>";
}else{
    echo "<h1>Table Not converted into Excel format and downloaded successfully</h1>";
}
?>

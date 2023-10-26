<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HTML  table data Conversion in EXCEL Format</h1>

    <label for="myTextarea">Enter your table data without 'tbody':
    <p>This is an example:<br> &lt;table&gt;
         &lt;tr&gt;  &lt;td&gt; AB&lt;/td&gt;            <br> &lt;td&gt; CB&lt;/td&gt;  &lt;/tr&gt;  &lt;/table&gt; </p>
    <!-- <p>You can also use &lt;em&gt;HTML&lt;/em&gt; entities for &lt;a href="https://example.com"&gt;special characters&lt;/a&gt;.</p> -->
    </label>
    <br>
    <form action="index2.php" method="post">
    <textarea id="table" name="table" rows="14" cols="150"></textarea>
    <button type="submit">Convert EXCEL</button>
    </form>
</body>
</html>
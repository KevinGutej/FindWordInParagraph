

<!DOCTYPE html>
<html>
<head>
    <style>
        .find {
            background-color: yellow;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paragraph = $_POST["paragraph"];
    $word = $_POST["word"];
    
    $highlighted_paragraph = str_replace($word, '<span class="highlight">' . $word . '</span>', $paragraph);

    echo "<p>{$highlighted_paragraph}</p>";
}
?>
</body>
</html>
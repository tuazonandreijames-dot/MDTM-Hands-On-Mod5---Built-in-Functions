<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">PHP Built-in String Functions</h2>
    <table>
        <tr><th>Category</th><th>Function</th><th>Code</th><th>Output</th></tr>

        <!-- changing case -->
        <?php
        $text = "PACQUIAO STATE UNIVERSITY";
        echo "<tr><td rowspan='3'>Changing the Case of Characters</td>
              <td>Lowercase</td>
              <td>strtolower('$text')</td>
              <td>" . strtolower($text) . "</td></tr>";

        echo "<tr><td>Uppercase</td>
              <td>strtoupper('$text')</td>
              <td>" . strtoupper($text) . "</td></tr>";

        echo "<tr><td>Capitalize</td>
              <td>ucwords(strtolower('$text'))</td>
              <td>" . ucwords(strtolower($text)) . "</td></tr>";

        //for counting
        $name = "Demetrius Demarcus Daquavious Montenegro III";
        echo "<tr><td rowspan='2'>Counting Characters and Words</td>
              <td>Number of Characters</td>
              <td>strlen('$name')</td>
              <td>" . strlen($name) . "</td></tr>";

        echo "<tr><td>Number of Words</td>
              <td>str_word_count('$name')</td>
              <td>" . str_word_count($name) . "</td></tr>";

        //for trimming and replacing
        $dirty = "Fetty Wap";
        echo "<tr><td rowspan='6'>Removing and Replacing Characters</td>
              <td>Remove whitespaces from left</td>
              <td>ltrim('$dirty')</td>
              <td>'" . ltrim($dirty) . "'</td></tr>";

        echo "<tr><td>Remove whitespaces from right</td>
              <td>rtrim('$dirty')</td>
              <td>'" . rtrim($dirty) . "'</td></tr>";

        echo "<tr><td>Remove whitespace from both sides</td>
              <td>trim('$dirty')</td>
              <td>'" . trim($dirty) . "'</td></tr>";

        echo "<tr><td>String replace</td>
              <td>str_replace('Drake', 'Kanye', '$dirty')</td>
              <td>" . str_replace("Drake", "Kanye", $dirty) . "</td></tr>";

        echo "<tr><td>String ireplace (case-insensitive)</td>
              <td>str_ireplace('drake', 'kanye', '$dirty')</td>
              <td>" . str_ireplace("drake", "kanye", $dirty) . "</td></tr>";

        echo "<tr><td>String Repeat</td>
              <td>str_repeat('PHP ', 3)</td>
              <td>" . str_repeat("PHP ", 3) . "</td></tr>";

        //other functions
        $sample = "I want you to be mine again baby.";
        echo "<tr><td rowspan='9'>Other Built-in Functions</td>
              <td>strpos</td>
              <td>strpos('$sample', 'fox')</td>
              <td>" . strpos($sample, "fox") . "</td></tr>";

        echo "<tr><td>strrpos</td>
              <td>strrpos('$sample', 'o')</td>
              <td>" . strrpos($sample, "o") . "</td></tr>";

        echo "<tr><td>substr</td>
              <td>substr('$sample', 4, 5)</td>
              <td>" . substr($sample, 4, 5) . "</td></tr>";

        echo "<tr><td>strrev</td>
              <td>strrev('$sample')</td>
              <td>" . strrev($sample) . "</td></tr>";

        echo "<tr><td>str_shuffle</td>
              <td>str_shuffle('abcdef')</td>
              <td>" . str_shuffle("abcdef") . "</td></tr>";

        echo "<tr><td>str_split</td>
              <td>implode('-', str_split('drake'))</td>
              <td>" . implode("-", str_split("drake")) . "</td></tr>";

        echo "<tr><td>similar_text</td>
              <td>similar_text('apple', 'apples')</td>
              <td>" . similar_text("apple", "apples") . "</td></tr>";

        echo "<tr><td>str_repeat</td>
              <td>str_repeat('*', 10)</td>
              <td>" . str_repeat("*", 10) . "</td></tr>";
        ?>
    </table>
</body>
</html>
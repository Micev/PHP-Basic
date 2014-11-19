<!DOCTYPE html>
<html>
<head>
    <title>HTMLTagsCounter</title>
    <style>
        h1{
            margin: 0px 0px;
        }
    </style>
</head>

<body>
    <div id="div"></div>
    <p>Enter HTML tags:</p>
    <form method="get">
        <input type="text" name="input">
        <input type="submit">
    </form>

<?php
$Tags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
    'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
    'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
    'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
    'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
    'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
    'tt', 'u', 'ul', 'var');
session_start();
$counter = 0;
if(isset($_GET['input'])){
    $tag = $_GET['input'];
    if(in_array($tag,$Tags)){
        if(isset($_SESSION['counter'])){
            $_SESSION['counter']++;
            echo"<h1>"."Valid HTML tag!"."</h1>";
            echo"<h1>"."Score: ". $_SESSION['counter']."</h1>";
        }
        else{
            $_SESSION['counter'] = 1;
            echo"<h1>"."Valid HTML tag!"."</h1>";
            echo"<h1>"."Score: ". $_SESSION['counter']."</h1>";
        }
    }
    else{
        if(isset($_SESSION['counter'])){
            echo"<h1>"."Invalid HTML tag!"."</h1>";
            echo"<h1>"."Score: ". $_SESSION['counter']."</h1>";
        }
        else{
            $_SESSION['counter'] = 0;
            echo"<h1>"."Invalid HTML tag!"."</h1>";
            echo"<h1>"."Score: ". $_SESSION['counter']."</h1>";
        }
    }
}
?>
</body>
</html>
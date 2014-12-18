<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow, noodp,noydir" />
<!--Variable Teile XYZ ersetzen-->
<meta name="docID" content="XYZ"  />
<meta name="description" content="XYZ" />
<meta name="keywords" content="XYZ" />
<base href="/befehle.htm?<?php echo $_SERVER['datei']; ?>"
<title></title>
<link rel="stylesheet" type="text/css" href="mimes/styles/standart.css">
</head>
<body>
<?php 
$komplettpfad = $_SERVER['PHP_SELF'];
echo 'Komplettpfad: ' . $komplettpfad; 
$pos = strrpos ($dateiname, '/');
$dateiname = substr($dateiname, $pos + 1);
echo $dateiname;
?>
<br />
<?php 
/*$dateiname = $_SERVER['PHP_PATH'];
echo $komplettpfad;
$pos = strrpos ($dateiname, '/');
$dateiname = substr($dateiname, $pos + 1);
echo $dateiname;
*/?>
<br />
<?php
$url = "http://mallorca-finca-reisen.de/forum/archiv.html";
print_r(parse_url($url)); ?><br />

PHP_URL_SCHEME: <?php echo parse_url($url, PHP_URL_SCHEME);?> <br />
PHP_URL_HOST: <?php echo parse_url($url, PHP_URL_HOST);?> <br />
PHP_URL_PORT: <?php echo parse_url($url, PHP_URL_PORT);?> <br />
PHP_URL_USER: <?php echo parse_url($url, PHP_URL_USER);?> <br />
PHP_URL_PASS: <?php echo parse_url($url, PHP_URL_PASS);?> <br />
PHP_URL_PATH: <?php echo parse_url($url, PHP_URL_PATH);?><br />
PHP_URL_QUERY: <?php echo parse_url($url, PHP_URL_QUERY);?><br />
PHP_URL_FRAGMENT: <?php echo parse_url($url, PHP_URL_FRAGMENT);?><br />

<?php //Geben Sie einen der folgenden Parameter an, um nur einen spezifischen Teil des URL als String zu erhalten: 
//PHP_URL_SCHEME, PHP_URL_HOST, PHP_URL_PORT, PHP_URL_USER, PHP_URL_PASS, PHP_URL_PATH, PHP_URL_QUERY  oder PHP_URL_FRAGMENT. 
?>

<div id="container">
    <div id="content">
        <div id="left">
            Left
        </div>
        <div id="middle">
            <h1>ich bin der middle</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit </p>
        </div>
        <div id="right">
            Right
        </div>
    </div>
    <div id="header">
        Header <?php $_FILES?>
    </div>
    <div id="footer">
        Footer
    </div>
    <div id="advertleft">
        Werbung
    </div>
    <div id="advertright">
        Werbung
    </div>
</div>
</body>
</html>

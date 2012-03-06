<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="fr-BE"
      lang="fr-BE">

<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type"
          content="text/css"/>
    <meta http-equiv="Content-Language"
          content="fr"/>

    <title>
        Bibliothèque - <?php echo $view['data']['view_title']; ?>
    </title>

    <link rel="stylesheet"
          type="text/css"
          href="./vues/screen.css"
          media="screen"
          title="Normal"/>
</head>
<body>
<div class="header">
    <div class="connection">
    </div>
    <div class="menu">
    </div>

</div>

<div class="content">
    <?php include($view['html']); ?>
</div>

</body>
</html>
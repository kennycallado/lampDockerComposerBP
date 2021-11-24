<?php

require_once "../vendor/autoload.php";

echo "$_ENV[ENVIRONMENT]";

/*
 * Test for twig. Remember create the index.html in src/templates/
 * mkdir templates/ && echo "<h1>hola mundo</h1><p>{{ '2019-08-07 23:00:00' | format_datetime(locale='es') }}</p>" > templates/index.html;
 *
 * use Twig\Loader\FilesystemLoader;
 * use Twig\Environment;
 * use Twig\Extra\Intl\IntlExtension;
 * 
 * $loader = new FilesystemLoader("../templates/");
 * $twig = new Environment($loader);
 * $twig->addExtension(new IntlExtension());
 * 
 * echo $twig->render("index.html");
 */

<?php
/**
 * Helpers for the template file.
 */

/**
 * Add static entries in the template file. 
 */
$mu->data['header'] = '<h1>Muffin</h1>';

$mu->data['footer'] = <<<EOD
<p>Footer: &copy; Muffin by Jonathan</p>

<p>Tools: 
<a href="http://validator.w3.org/check/referer">HTML5</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<a href="http://validator.w3.org/i18n-checker/check?uri=<?php echo getCurrentUrl(); ?>">i18n</a>
<a href="http://validator.w3.org/checklink?uri=<?php echo getCurrentUrl(); ?>">Links</a>
</p>

<p>Docs:
<a href="http://www.w3.org/2009/cheatsheet/">Cheetsheet</a>
<a href="http://dev.w3.org/html5/spec/">HTML5</a> 
<a href="http://www.w3.org/TR/CSS2/">CSS2</a> 
<a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a>
<a href="http://php.net/manual/en/index.php">PHP</a> 
</p>

EOD;


?>
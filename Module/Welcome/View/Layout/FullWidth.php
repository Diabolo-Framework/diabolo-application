<?php 
/** @var $this \X\Service\XAction\Component\WebView\Html */
$this->getMetaManager()->setCharset('UTF-8');

$links = $this->getLinkManager();
$links->addCSS('bootstrap', 'https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css');

$scripts = $this->getScriptManager();
$scripts->add('jquery', 'https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js');
$scripts->add('bootstrap','https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js');
?>
<body id="page-top">
<?php echo $this->getParticleViewManager()->toString(); ?>
</body>

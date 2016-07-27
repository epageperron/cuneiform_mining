2°/ "onblur" par exemple, tu comptes dans la DB combien de "nom_du_roi = valeurDeInput"
3°/ si 1 rien ne se passe, si 0, alors tu passes la divCachee en "display: bloc"
4°/ Tu mets un lien valider, et onclick tu envoies tes données en Ajax soit en GET soit en POST (avec xmlhttprequest)
5°/ Tu vérifies l'état => xmlhttp.readyState==2 && xmlhttp.status==200, tu recaches ta div, tu peux remettres le focus sur ton input, et voilà...

echo $this->Js->codeBlock();
?>
function myfunc()
{
<?php echo $this->Ajax->remoteFunction(array('url' => 'where you want to
go', 'with' => 'Element.serialize(\'id_of_obersered_field\')',
'update' => 'divtoupdate')); ?>
}
<?php
echo $this->Js->blockEnd();
?> 


function countTabletRulers{

request in b
if() {
$showValidateNewTabletRuler = $this->Ajax->remoteFunction(
array(
'url' => array( 'controller' => 'rulers', 'action' => 'add', 1 ),
'update' => 'post' )
);
}
}




?>
<div id="post" onmouseover="<?php echo $showValidateNewTabletRuler ?>" >
Mouse Over This
</div>


	'onblur'="<?php echo $remoteFunction; ?>"
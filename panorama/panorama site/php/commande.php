	<?php
	
$dochtml = new DOMDocument();
//libxml_use_internal_errors(true);
$dochtml->loadHTMLFile("../menu.html");

$div = $dochtml->getElementById('tabPanier');
$div2html = get_inner_html($div);
echo "store information as: ".$div2html;


function get_inner_html(DOMNode $elem ) 
{

    $innerHTML = " ";
$children = $elem->childNodes;

foreach ($children as $child)
{
    $innerHTML .= $elem->ownerDocument->saveHTML( $child );
}
echo "function return: ".$innerHTML."<br />";
return $innerHTML;
 }
		?>
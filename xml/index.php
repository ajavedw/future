<?php
$xml=simplexml_load_file("spy.xml");
print_r($xml);
echo $xml->to ."<br>";
foreach($xml->children() as $element)
{
    echo $element->getName().":".$element. "<br>";
}
?>
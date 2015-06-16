require_once 'phpdocx/classes/CreateDocx.inc'; 

$docx = new CreateDocx();
$docx->addText('Hello world!');
$docx->createDocx('../word_documents/hello_world');
<?php
use Magento\Framework\App\Bootstrap;

require __DIR__ . '/../../../../app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);

$objectManager = $bootstrap->getObjectManager();

$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

$storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');

$storeIds=array(1,2,3,4,5,6,7,8,9,10,13,22,23,24,25,26,27,28,29,30,31,32,33);


include("funcs/translateText.php");
include("funcs/slug.php");
include("funcs/categories.php");
include("funcs/products.php");

//translateProducts(1);
//translateCategories(2,53);
slugCategories(2,2);









<?php
$item1 = 100;
$item2 = 200;
$item3 = 300;

echo getRemainingStocks ("item1", 3);
echo "\n";
echo getRemainingStocks ("item1", 5);
echo "\n";
echo getRemainingStocks ("item2", 5);
echo "\n";
echo getRemainingStocks ("item1", 50);
echo "\n";
echo getRemainingStocks ("item3", 5);



function getRemainingStocks($item, $qty) {
  if ($item == "item1"){
    global $item1;
    $item1 = $item1 - $qty;
    return "Item 1 - ($qty) qty | Remaining Stocks = $item1";
  }
  
  else if ($item == "item2"){
    global $item2;
    $item2 = $item2 - $qty;
    return "Item 2 - ($qty) qty | Remaining Stocks = $item2";
  }
  
  else if ($item == "item3"){
    global $item3;
    $item3 = $item3 - $qty;
    return "Item 3 - ($qty) qty | Remaining Stocks = $item3";
  }
  
  else {
    return "Item not stated";
  }
  
}
?>

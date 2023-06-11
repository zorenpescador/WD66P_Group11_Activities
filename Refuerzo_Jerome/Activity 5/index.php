<?php

// Step 1: Creating global variables for the items
$Item1 = 100;
$Item2 = 200;
$Item3 = 300;

// Step 2: Creating a function to compute total stocks per item
function computeStocks($item, $quantity)
{
    global $Item1, $Item2, $Item3;

    switch ($item) {
        case 'Item1':
            $Item1 -= $quantity;
            echo "Item 1 - ($quantity) qty | Remaining Stocks = $Item1\n";
            break;
        case 'Item2':
            $Item2 -= $quantity;
            echo "Item 2 - ($quantity) qty | Remaining Stocks = $Item2\n";
            break;
        case 'Item3':
            $Item3 -= $quantity;
            echo "Item 3 - ($quantity) qty | Remaining Stocks = $Item3\n";
            break;
        default:
            echo "Invalid item!\n";
            break;
    }
}

// Example usage
computeStocks('Item1', 3);
computeStocks('Item1', 5);
computeStocks('Item2', 5);
computeStocks('Item1', 50);
computeStocks('Item3', 5);

?>

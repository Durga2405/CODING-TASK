<?php
// Your code here!
/* 

Burgerking sells three items: 
VegBurger which needs 2 breads & 1 veg pattice
NonVegBurger which needs 2 breads & 1 non-veg pattice
TikkiBurger which needs 2 breads & 1 tikki pattice

Given bread quantity, veg pattice quantity, non-veg pattice quantity, tikki pattice quantity & price of all 3 items

Print the maximum possible profit

*/

$breads = 15;
$vegPattice = 3;
$nonVegPattice = 2;
$TikkiPattice = 1;
$priceVegBurger = 100;
$priceNonVegBurger = 125;
$priceTikkiBurger = 112;

$maxProfit = 0;
$costpriceVegBurger= 33;
$costpriceNonVegBurger= 32;
$costpriceTikkiBurger=31;

if($priceVegBurger>$costpriceVegBurger)
{
  $profitVegBurger= $priceVegBurger - $costpriceVegBurger;
  echo"profitVegBurger=".$profitVegBurger;
}
if($priceNonVegBurger>$costpriceNonVegBurger)
{
  $profitNonVegBurger= $priceVegBurger - $costpriceNonVegBurger;
  echo"profitNonVegBurger=".$profitNonVegBurger;
}
if($priceTikkiBurger>$costpriceTikkiBurger)
{
  $profitTikkiBurger = $priceVegBurger - $costpriceTikkiBurger;
  echo"profitTikkiBurger=".$profitTikkiBurger;
}
$maxProfit = $profitVegBurger + $profitTikkiBurger + $profitNonVegBurger;
echo"maxprofit=".$maxProfit;
?>

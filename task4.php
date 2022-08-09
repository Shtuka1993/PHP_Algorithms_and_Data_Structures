<?php
include("Tree.php");
function lca($root, $v1, $v2) {
  v1k = [];
  v2k = [];
}

$tree = new BinarySearchTree();
$t = 11;

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

for($i; $i <= $t; $i++) {
    $tree->create($arr[i]);
}

$v1 = 7;
$v2 = 11;

$ans = lca($tree->root, $v1, $v2);
echo $ans->info;
?>
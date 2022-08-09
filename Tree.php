<?php
class Node {
    public $info;
    public $left = null;
    public $right = null;
    public $level = null;
    public function __construct($info) { 
        $this->info = $info; 
    }

    public function toStr() {
        return $this->info;
    }
} 

class BinarySearchTree{
    public $root = null;

    public function create($val){  
        if($this->root == null) {
            $this->root = new Node($val);
        } else {
            $current = $this->root;
            while(True){
                if($val < $current->info) {
                    if(current.left) {
                        $current = $current->left;
                    } else {
                        $current->left = new Node($val);
                        break;
                    }
                } elseif($val > $current->info) {
                    if( $current->right ) {
                        $current = $current->right;
                    } else {
                        $current->right = new Node($val);
                        break;
                    }
                } else {
                    break;
                }
            }
        }
    }
}

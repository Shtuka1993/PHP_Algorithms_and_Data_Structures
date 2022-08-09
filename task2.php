<?php

class SinglyLinkedListNode {
    public $data;
    public $next;

    public function __construct($node_data)
    {
        $this->data = $node_data;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertNode($node_data)
    {
        $node = new SinglyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }

        $this->tail = $node;
    }
}

function printSinglyLinkedList($node, $sep, $fptr)
{
    while (!is_null($node)) {
        fwrite($fptr, $node->data);

        $node = $node->next;

        if (!is_null($node)) {
            fwrite($fptr, $sep);
        }
    }
}

/*
 * Complete the 'reverse' function below.
 *
 * The function is expected to return an INTEGER_SINGLY_LINKED_LIST.
 * The function accepts INTEGER_SINGLY_LINKED_LIST llist as parameter.
 */

/*
 * For your reference:
 *
 * SinglyLinkedListNode {
 *     int data;
 *     SinglyLinkedListNode next;
 * }
 *
 */

function reverse($llist) {
    $response = new SinglyLinkedList();
    if (! is_null( $llist ) ) {
        $previous = $llist;
        $temporary = $llist;
        $current = $llist->next;        
    }
    $previous->next = null;
    while ( ! is_null( $current ) ) {
        $temporary = $current->next;
        $current->next = $previous;
        $previous = $current;
        $current = $temporary; 
    }
    $llist = $previous;
    
    return $llist;
}

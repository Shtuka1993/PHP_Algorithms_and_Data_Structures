<?php

class DoublyLinkedListNode {
    public $data;
    public $next;
    public $prev;

    public function __construct($node_data)
    {
        $this->data = $node_data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList {
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertNode($node_data)
    {
        $node = new DoublyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
            $node->prev = $this->tail;
        }

        $this->tail = $node;
    }
}

function printDoublyLinkedList($node, $sep, $fptr)
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
 * Complete the 'sortedInsert' function below.
 *
 * The function is expected to return an INTEGER_DOUBLY_LINKED_LIST.
 * The function accepts following parameters:
 *  1. INTEGER_DOUBLY_LINKED_LIST llist
 *  2. INTEGER data
 */

/*
 * For your reference:
 *
 * DoublyLinkedListNode {
 *     int data;
 *     DoublyLinkedListNode next;
 *     DoublyLinkedListNode prev;
 * }
 *
 */

function sortedInsert($llist, $data) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
<?php
require_once 'bentuk2d.php';
class Lingkaran extends Bentuk2D {
    private $jariJari;

    function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    function namaBidang() {
        return "Lingkaran";
    }

    function luasBidang() {
        return pi() * $this->jariJari * $this->jariJari;
    }

    function kelilingBidang() {
        return 2 * pi() * $this->jariJari;
    }
}
?>
<?php
require_once 'bentuk2d.php';
class PersegiPanjang extends Bentuk2D {
    private $panjang;
    private $lebar;

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function namaBidang() {
        return "Persegi Panjang";
    }

    function luasBidang() {
        return $this->panjang * $this->lebar;
    }

    function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>
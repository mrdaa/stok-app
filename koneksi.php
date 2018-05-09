<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4905153_mrdaa"; // root
    private $password = "april@#1997"; // ""
    private $db = "id4905153_stok";
    function getKoneksi() {
        return new mysqli($this->server, $this->username, 
        $this->password, $this->db);
    }
}
?>
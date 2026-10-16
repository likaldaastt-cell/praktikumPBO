<?php

class Buku
{
    public string $judul;
    private string $penulis;  

    public function info(): void
    {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
    }
}
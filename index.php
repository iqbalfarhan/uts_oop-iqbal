<?php

// Parent class
class PekerjaKreatif {
    protected string $nama;
    protected string $bidang;

    public function __construct(string $nama, string $bidang) {
        $this->nama = $nama;
        $this->bidang = $bidang;
    }

    public function info(): void {
        echo "Nama: {$this->nama}, Bidang: {$this->bidang}\n";
    }
}

// Child class 1 - Desainer Grafis
class DesainerGrafis extends PekerjaKreatif {
    private string $softwareFavorit;

    public function __construct(string $nama, string $softwareFavorit) {
        parent::__construct($nama, "Desain Grafis");
        $this->softwareFavorit = $softwareFavorit;
    }

    public function info(): void {
        parent::info();
        echo "Software Favorit: {$this->softwareFavorit}\n";
    }
}

// Child class 2 - Penulis Konten
class PenulisKonten extends PekerjaKreatif {
    private string $niche;

    public function __construct(string $nama, string $niche) {
        parent::__construct($nama, "Penulisan Konten");
        $this->niche = $niche;
    }

    public function info(): void {
        parent::info();
        echo "Niche Spesialis: {$this->niche}\n";
    }
}

// Tes
$desainer = new DesainerGrafis("Alya", "Adobe Illustrator");
$penulis = new PenulisKonten("Rizky", "Tech & Gadget");

echo "--- Info Desainer Grafis ---\n";
$desainer->info();

echo "\n--- Info Penulis Konten ---\n";
$penulis->info();

<?php

// Parent class
class ProdukDigital {
    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function info(): void {
        echo "Nama Produk: {$this->nama}, Harga: Rp{$this->harga}\n";
    }
}

// Child class 1 - Aplikasi Mobile
class AplikasiMobile extends ProdukDigital {
    private string $platform; // Android / iOS

    public function __construct(string $nama, int $harga, string $platform) {
        parent::__construct($nama, $harga);
        $this->platform = $platform;
    }

    public function info(): void {
        parent::info();
        echo "Platform: {$this->platform}\n";
    }
}

// Child class 2 - Plugin Website
class PluginWebsite extends ProdukDigital {
    private string $cms; // WordPress, Joomla, dll

    public function __construct(string $nama, int $harga, string $cms) {
        parent::__construct($nama, $harga);
        $this->cms = $cms;
    }

    public function info(): void {
        parent::info();
        echo "CMS Support: {$this->cms}\n";
    }
}

// Tes
$aplikasi = new AplikasiMobile("TodoBuddy", 150000, "Android");
$plugin = new PluginWebsite("SEO Booster", 100000, "WordPress");

echo "--- Info Aplikasi Mobile ---\n";
$aplikasi->info();

echo "\n--- Info Plugin Website ---\n";
$plugin->info();

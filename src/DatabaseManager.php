<?php declare(strict_types=1);
namespace PazerApp\DatabaseManager;
class DatabaseManager {
    protected array $_host;
    public function __construct() { return $this->clear(); }
    public function clear() : self { $this->_client = array(); $this->_host = array(); return $this;}
    public function addHost(string $name) : ?DatabaseStructHost { $this->_host[$name] = new DatabaseStructHost(); return $this->_host[$name] ?? null; }
    public function getHost(string $name) : ?DatabaseStructHost { return $this->_host[$name] ?? null; }
    public function getClient(string $name) : ?DatabaseClient { return new DatabaseClient($this->_host[$name]) ?? null; }
}

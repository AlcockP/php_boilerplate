<?php

class SomeAPI
{
    private $_service;

    public function getData() {
        $this->getService()->getData();
    }

    private function getService() {
        if (!$this->_service) {
            $this->_service = null; // change for the actual service after
        }
        return $this->_service;
    }

    public function setService($service) {
        $this->_service = $service;
    }
}

?>
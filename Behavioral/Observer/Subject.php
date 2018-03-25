<?php

namespace Observer;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObserver();

    public function setChanged(bool $changed);
}

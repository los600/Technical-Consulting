<?php

namespace App\Core;

interface ICitaRepository{
    function getAll();
    function save($username, $subject);
}
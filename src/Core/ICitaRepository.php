<?php

namespace App\Core;

interface ICitaRepository{
    function getAll();
    function save($username, $subject);
    function delete($id);
    function edit($id);
}


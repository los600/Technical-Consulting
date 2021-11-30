<?php

namespace App\Core;

interface ICitaRepository
{
    function getAll();
    function save($username, $subject);
    function delete($id);
    function editUser($id, $username, $subject);
    function getById($id);
}

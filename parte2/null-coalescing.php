<?php
$data = ['user' => 'Teste'];

//antes do php 7
$user = isset($data['user']) ? $data['user'] : 'Valor default';

print $user;

//depois do php
$user = $data['user'] ?? 'Valor default';

print ' - ' . $user;

$data['user'] ??= 'Valor default';

print ' - ' . $data['user'];
<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAdmin();


$userId  = request()->get('userId');
$role = request()->get('role');

switch (strtolower($role)) {
	case 'promote':
		promote($userId);
		$session->getFlashBag()->add('success', 'User Has been successfully promoted to Admin');
		break;

	case 'demote':
		demote($userId);
		$session->getFlashBag()->add('error', 'User Has been demoted from Admin');
		break;
}

redirect('adminDashboard.php');

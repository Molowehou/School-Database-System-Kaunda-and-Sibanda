<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAdmin();

$staffID  = request()->get('staffID');
$Status = request()->get('Status');
$Name = request()->get('name');

echo $staffID;
echo $Status;
echo $Name;

switch (strtolower($Status)) {
	case 'deactivate':
		DeactivateTeacher($staffID);
		$session->getFlashBag()->add('error', $Name. ' Has been successfully Deleted from The system');
		break;

	case 'Reactivate':
		ReactivateTeacher($staffID);
		$session->getFlashBag()->add('success', $Name.' Has been Reactivated');
		break;
}

redirect('staffDashboard.php');

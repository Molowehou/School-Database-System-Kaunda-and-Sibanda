<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAdmin();

$studentID  = request()->get('studentID');
$Status = request()->get('Status');
$Name = request()->get('name');


switch (strtolower($Status)) {
	case 'deactivate':
		DeactivateStudent($studentID);
		$session->getFlashBag()->add('error', $Name. ' Has been successfully Deleted from The system');
		break;

	case 'Reactivate':
		ReactivateStudent($studentID);
		$session->getFlashBag()->add('success', $Name.' Has been Reactivated');
		break;
}

redirect('index.php');

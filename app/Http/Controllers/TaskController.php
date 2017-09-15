<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TaskController extends Controller
{
    /* Get tasks of a user and display it */
    public function test()
    {
    	$tasks = User::find(1)->tasks;
    	foreach ($tasks as $task) {
    		echo $task['body'];
    	}
    }
}

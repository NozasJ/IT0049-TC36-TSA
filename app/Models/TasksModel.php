<?php 

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = 
        ['status', 'task_date', 'created_at'];
}
<?php 
namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'email',
        'password',
        'name'
    ];
}
?>
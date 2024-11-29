<?php
namespace App\Models;

use CodeIgniter\Model;

class Products_model extends Model{
    protected $table      = 'producttbl';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'barcode',
        'productname',
        'description',
        'unit',
        'status',
        'Reservationdate',
        'dateencoded'
    ];
}
?>
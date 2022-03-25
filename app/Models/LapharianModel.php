<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class LapharianModel extends Model
{
    protected $table = "lap_harian";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['riksa','waktu','rute','terminal','no_flight', 'kru', 'wni','wna','doc','keterangan'];
}
<?php 

namespace App\Models;

use CodeIgniter\Model;
 
class PortfolioModel extends Model
{
    protected $table            ="portfolio";
    protected $primaryKey       ="id";
    protected $useTimestamps    =true;
    protected $useSoftDeletes   =true;
}

?>
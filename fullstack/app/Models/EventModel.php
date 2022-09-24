<?php 

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table            = 'event_single';
    protected $primaryKey       = 'id';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
}
?>
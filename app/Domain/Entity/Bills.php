<?php

namespace App\Domain\Entity;

use Database\Factories\BillsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;

    /*
     * @var bool
     */
    public $timestamps = false;

    /*
     * @var string
     */
    protected $table = 'bills';

    /*
     * @var string
     */
    protected $primaryKey = 'bill_id';

    /*
     * @var bool
     */
    public $incrementing = true;

    protected static function newFactory(): Factory
    {
        return BillsFactory::new();
    }
}

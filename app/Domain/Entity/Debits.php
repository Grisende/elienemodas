<?php

namespace App\Domain\Entity;

use Database\Factories\DebitsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debits extends Model
{

    use HasFactory;

    /*
     * @var bool
     */
    public $timestamps = false;

    /*
     * @var string
     */
    protected $table = 'debits';

    /*
     * @var string
     */
    protected $primaryKey = 'debit_id';

    /*
     * @var bool
     */
    public $incrementing = true;

    protected static function newFactory(): Factory
    {
        return DebitsFactory::new();
    }
}

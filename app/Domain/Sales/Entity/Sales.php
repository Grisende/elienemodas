<?php

namespace App\Domain\Sales\Entity;

use Database\Factories\SalesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    /*
     * @var bool
     */
    public $timestamps = false;

    /*
     * @var string
     */
    protected $table = 'sales';

    /*
     * @var string
     */
    protected $primaryKey = 'sale_id';

    /*
     * @var bool
     */
    public $incrementing = true;

    protected static function newFactory(): Factory
    {
        return SalesFactory::new();
    }
}

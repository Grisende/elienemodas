<?php

namespace App\Domain\Sales\Entity;

use Database\Factories\InstallmentsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installments extends Model
{
    use HasFactory;

    /*
     * @var bool
     */
    public $timestamps = false;

    /*
     * @var string
     */
    protected $table = 'installments';

    /*
     * @var string
     */
    protected $primaryKey = 'installment_id';

    /*
     * @var bool
     */
    public $incrementing = true;

    protected static function newFactory(): Factory
    {
        return InstallmentsFactory::new();
    }
}

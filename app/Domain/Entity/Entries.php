<?php

namespace App\Domain\Entity;

use Database\Factories\EntriesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    use HasFactory;

    /*
     * @var bool
     */
    public $timestamps = false;

    /*
     * @var string
     */
    protected $table = 'entries';

    /*
     * @var string
     */
    protected $primaryKey = 'entry_id';

    /*
     * @var bool
     */
    public $incrementing = true;

    protected static function newFactory(): Factory
    {
        return EntriesFactory::new();
    }
}

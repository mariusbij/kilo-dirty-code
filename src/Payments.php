<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    private $id;

    public function getPaymentsStatistics() {
        return Payments::where('user_id', $this->id)
            ->groupBy('created_at')
            ->get();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}

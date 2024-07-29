<?php

namespace Domain\OSIS\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class OsisModel extends BaseModel
{
    use SoftDeletes;

    protected $casts = [];
}

<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Resources\Employee;

use Illuminate\Http\Resources\Json\ResourceCollection;

final class EmployeeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        return parent::toArray($request);
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdeasToImplementResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        //if you want to specify the data output

        /*return [
            'id' => $this->id,
            'UserIdentity' => $this ->UserIdentity,
            'Title' => $this->Title,
        ];*/

    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'Info' => [
                'Version' => '1.0.0',
                'Auther' => 'Me'
            ],
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //menampilkan semua data
        // return parent::toArray($request); 

        //menamppilkan variabel yang dierlukan
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.0',
            'author' => url('http://tavsite.com')
        ];
    }
}

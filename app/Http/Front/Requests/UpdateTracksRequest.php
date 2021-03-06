<?php

namespace App\Http\Front\Requests;

use App\Domain\Event\Rules\TrackIdBelongsToEventRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTracksRequest extends FormRequest
{
    public function authorized()
    {
        return $this->user()->can('administer', $this->event);
    }

    public function rules()
    {
        return [
            'tracks.*.name' => ['required'],
            'tracks.*.id' => [new TrackIdBelongsToEventRule($this->event)],
        ];
    }
}

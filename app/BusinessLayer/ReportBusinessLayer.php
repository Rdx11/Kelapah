<?php

namespace App\BusinessLayer;

use App\Models\Report;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ReportBusinessLayer
{

    public function getAll(): LengthAwarePaginator
    {
        return Report::exclude(['updated_at'])->paginate(100);
    }

    public function store($request): void
    {
        if (request()->file('photo')){
            $request['photo'] = request()->file('photo')
            ->store('/photo', 'public');
        }

        Report::create([
            'user_id' => auth()->user()->id,
            'title' => $request['title'],
            'photo' => $request['photo'],
            'description' => $request['description'],
            'location' => $request['location'],
        ]);
    }

    public function delete($id): void
    {
        $report = Report::find($id);
        $report->delete($id);
    }
}

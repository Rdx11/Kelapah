<?php

namespace App\Http\Controllers;

use App\BusinessLayer\ReportBusinessLayer;
use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    private $reportBusinessLayer;

    public function __construct(ReportBusinessLayer $reportBusinessLayer) {
        $this->reportBusinessLayer = $reportBusinessLayer;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = $this->reportBusinessLayer->getAll();
        return view('backend.pages.report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('frontend.pages.report');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportRequest $request): RedirectResponse
    {
        $this->reportBusinessLayer->store($request->validated());
        return redirect(route('home'))->with('success', 'Laporan Telah Dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->reportBusinessLayer->delete($id);
        return redirect(route('report.index'))->with('success', 'report has been deleted');
    }

    public function updateStatus(Request $request, $id): RedirectResponse
    {
        $report = Report::find($id);
        $report->update([
            'status' => $request->status
        ]);

        return redirect(route('report.index'))->with('success', 'report status was updated');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reportModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{
    public function index()
    {
        $reports = reportModel::all();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $log = Log::channel("report");
        $log->info("simpan report");
        try {
            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'title' => 'required',
                'description' => 'required',
                'attachment' => 'required|mimes:pdf|max:2048', // Hanya izinkan file PDF, maksimal 2 MB
                'id_category' => 'required',
                'location_report' => 'required',
                'status' => 'required',
                'date_report' => 'required|date',
            ]);

            if ($validator->fails()) {
                return redirect('reports/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Menyimpan file PDF
            $attachment = $request->file('attachment');
            $attachmentName = 'report_' . time() . '.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('attachments'), $attachmentName);

            // Menyimpan data report
            $data = $request->all();
            $data['attachment'] = $attachmentName;
            $report = reportModel::create($data);

            Log::info('Report created: ' . $report->id_report);

            return redirect('reports')->with('success', 'Report added successfully');
        } catch (\Exception $e) {
            Log::error('Error creating report: ' . $e->getMessage());
            return redirect('reports')->with('error', 'Error adding report');
        }
    }

    public function edit($id)
    {
        $report = reportModel::find($id);
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'title' => 'required',
                'description' => 'required',
                'attachment' => 'nullable|mimes:pdf|max:2048', // Hanya izinkan file PDF, maksimal 2 MB
                'id_category' => 'required',
                'location_report' => 'required',
                'status' => 'required',
                'date_report' => 'required|date',
            ]);

            if ($validator->fails()) {
                return redirect('reports/' . $id . '/edit')
                    ->withErrors($validator)
                    ->withInput();
            }

            $report = reportModel::find($id);

            // Jika ada file PDF baru diunggah, simpan dan update nama file
            if ($request->hasFile('attachment')) {
                $attachment = $request->file('attachment');
                $attachmentName = 'report_' . time() . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('attachments'), $attachmentName);
                $report->attachment = $attachmentName;
            }

            $report->update($request->all());

            Log::info('Report updated: ' . $report->id_report);

            return redirect('reports')->with('success', 'Report updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating report: ' . $e->getMessage());
            return redirect('reports')->with('error', 'Error updating report');
        }
    }

    public function destroy($id)
    {
        try {
            $report = reportModel::find($id);
            $report->delete();

            Log::info('Report deleted: ' . $id);

            return redirect('reports')->with('success', 'Report deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting report: ' . $e->getMessage());
            return redirect('reports')->with('error', 'Error deleting report');
        }
    }
}

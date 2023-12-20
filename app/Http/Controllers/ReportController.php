<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    private $reportModel;

    public function __construct(ReportModel $reportModel)
    {
        $this->reportModel = $reportModel;
    }

    public function index()
    {
        $reports = $this->reportModel->all();
        return view('reports.index', compact('reports'));
    }


    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $log = Log::channel("report");

        try {
            $data = $request->validate([
                'id_user' => 'required',
                'title' => 'required',
                'description' => 'required',
                'attachment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'id_category' => 'required',
                'location_report' => 'required',
                'status' => 'required',
            ]);

            if ($request->hasFile('attachment')) {
                $attachmentPath = $request->file('attachment')->store('attachments', 'public');
                $data['attachment'] = $attachmentPath;
            }

            // Menambahkan tanggal laporan
            $data['date_report'] = now();

            $report = $this->reportModel->create($data);

            Log::info('Laporan berhasil dibuat', $data);

            return redirect('reports')->with('success', 'Laporan berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error creating report: ' . $e->getMessage(), $data);
            return redirect('reports')->with('error', 'Error menambahkan laporan');
        }
    }


    public function edit($id)
    {
        $report = $this->reportModel->find($id);
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, ReportModel $report)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'title' => 'required',
                'description' => 'required',
                'attachment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'id_category' => 'required',
                'location_report' => 'required',
                'status' => 'required',

            ]);

            if ($validator->fails()) {
                return redirect()->route('reports.edit', ['report' => $report->id_report])
                    ->withErrors($validator)
                    ->withInput();
            }

            // Proses file attachment
            if ($request->hasFile('attachment')) {
                // Hapus file lama jika ada
                if ($report->attachment) {
                    Storage::disk('public')->delete($report->attachment);
                }

                // Simpan file gambar baru
                $attachmentPath = $request->file('attachment')->store('attachments', 'public');
                $report->attachment = $attachmentPath;
            }

            $report->update($request->except('attachment')); // Kecuali field attachment

            Log::info('Laporan berhasil diperbarui', ['id_report' => $report->id_report]);

            return redirect()->route('reports.index')->with('success', 'Laporan berhasil diperbarui');
        } catch (\Exception $e) {
            Log::error('Error updating report: ' . $e->getMessage());
            return redirect()->route('reports.edit', ['report' => $report->id_report])->with('error', 'Error memperbarui laporan');
        }
    }



    public function destroy($id)
    {
        try {
            $report = ReportModel::findOrFail($id);

            // Hapus file lampiran jika ada
            if ($report->attachment) {
                Storage::disk('public')->delete($report->attachment);
            }

            $report->delete();

            Log::info('Laporan dihapus: ' . $id);

            return redirect('reports')->with('success', 'Laporan berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Error menghapus laporan: ' . $e->getMessage());
            return redirect('reports')->with('error', 'Error menghapus laporan. Silakan coba lagi.');
        }
    }
}

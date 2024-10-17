<?php

namespace App\Http\Controllers\Web\backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class TeamController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {

            $data = Team::latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image_url', function ($data) {
                    $url = asset($data->image_url);
                    $image = '<img src="'. $url .'" width="100px">';

                    return $image;
                })
                ->addColumn('status', function ($data) {
                    $backgroundColor  = $data->status == "active" ? '#4CAF50' : '#ccc';
                    $sliderTranslateX = $data->status == "active" ? '26px' : '2px';
                    $sliderStyles     = "position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background-color: white; border-radius: 50%; transition: transform 0.3s ease; transform: translateX($sliderTranslateX);";

                    $status = '<div class="form-check form-switch" style="margin-left:40px; position: relative; width: 50px; height: 24px; background-color: ' . $backgroundColor . '; border-radius: 12px; transition: background-color 0.3s ease; cursor: pointer;">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status" style="position: absolute; width: 100%; height: 100%; opacity: 0; z-index: 2; cursor: pointer;">';
                    $status .= '<span style="' . $sliderStyles . '"></span>';
                    $status .= '<label for="customSwitch' . $data->id . '" class="form-check-label" style="margin-left: 10px;"></label>';
                    $status .= '</div>';

                    return $status;
                })

                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('admin.team.edit', ['id' => $data->id]) . '" type="button" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                    <i class="fe fe-edit"></i>
                                </a>

                                <a href="#" type="button" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger fs-14 text-white delete-icn" title="Delete">
                                    <i class="fe fe-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['image_url', 'status', 'action'])
                ->make(true);
        }
        return view('backend.layouts.team.index');
    }

    public function create() {
        return view('backend.layouts.team.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:4048',
        ]);

        if ($request->hasFile('image')) {
            $image                        = $request->file('image');
            $imageName                    = uploadImage($image, 'Team');
        }

        try {

            Team::create([
                'name'=> $request->name,
                'designation'=> $request->designation,
                'image_url'=> $imageName,
            ]);

            return to_route('admin.team.index')->with('t-success', 'New Team Created');

        } catch (\Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

    public function edit($id) {
        $data = Team::findOrFail($id);
        return view('backend.layouts.team.edit', compact('data'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:4048',
        ]);

        $data = Team::findOrFail($id);
        if ($request->hasFile('image')) {

            if ($data->image_url) {
                $previousImagePath = public_path($data->image_url);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }

            $image                        = $request->file('image');
            $imageName                    = uploadImage($image, 'Team');
        }else {
            $imageName = $data->image_url;
        }

        try {

            Team::where('id', $id)->update([
                'name'=> $request->name,
                'designation'=> $request->designation,
                'image_url'=> $imageName,
            ]);

            return to_route('admin.team.index')->with('t-success', 'Team Updated');

        } catch (\Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

    public function status(int $id): JsonResponse {
        $data = Team::findOrFail($id);
        if ($data->status == 'inactive') {
            $data->status = 'active';
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'inactive';
            $data->save();

            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        }
    }

    public function destroy(int $id): JsonResponse {
        $data = Team::findOrFail($id);
        if ($data->image_url) {
            $previousImagePath = public_path($data->image_url);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $data->delete();
        return response()->json([
            't-success' => true,
            'message'   => 'Deleted successfully.',
        ]);
    }
}

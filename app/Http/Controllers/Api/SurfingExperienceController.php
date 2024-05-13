<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SurfingExperience;
use Illuminate\Http\Request;

class SurfingExperienceController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'visit_date');
        $order = $request->input('order', 'asc');
        $perPage = $request->input('per_page', 10);

        $experiences = SurfingExperience::orderBy($sort, $order)
            ->paginate($perPage);

        return response()->json($experiences);
    }

    public function show($id)
    {
        $experience = SurfingExperience::findOrFail($id);
        return response()->json($experience);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'surfer_id' => 'required|exists:surfers,surfer_id',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string|max:20',
            'experience' => 'required|numeric',
        ]);

        $experience = SurfingExperience::create($validated);
        return response()->json($experience, 201);
    }

    public function update(Request $request, $id)
    {
        $experience = SurfingExperience::findOrFail($id);

        $validated = $request->validate([
            'surfer_id' => 'sometimes|required|exists:surfers,surfer_id',
            'visit_date' => 'sometimes|required|date',
            'desired_board' => 'sometimes|required|string|max:20',
        ]);

        $experience->update($validated);
        return response()->json($experience);
    }

    public function destroy($id)
    {
        $experience = SurfingExperience::findOrFail($id);
        $experience->delete();
        return response()->json(['message' => 'Surfing experience deleted']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Surfer;
use Illuminate\Http\Request;
use App\Models\SurfingExperience;
use Illuminate\Support\Facades\DB;

class SurferController extends Controller
{

    public function index(Request $request)
    {

        $sort = $request->input('sort', 'name');
        $order = $request->input('order', 'asc');
        $perPage = $request->input('per_page', 10);

        $surfers = Surfer::orderBy($sort, $order)
            ->paginate($perPage);

        return response()->json($surfers);
    }

    public function show($id)
    {
        $surfer = Surfer::findOrFail($id);
        return response()->json($surfer);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:surfers',
            'phone_number' => 'required|string|max:15',
            'experience' => 'required|numeric',
            'id_card' => 'required|string',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string|max:100',
        ]);

        $surfer = Surfer::create($validated);
        $surfer->surfingExperiences()->create([
            'visit_date' => $validated['visit_date'],
            'desired_board' => $validated['desired_board'],
            'experience' => $validated['experience'],
        ]);

        $surfer->load('surfingExperiences');

        return response()->json([
            'surfer' => [
                'name' => $surfer->name,
                'country' => $surfer->country,
                'email' => $surfer->email,
                'phone_number' => $surfer->phone_number,
                'id_card' => $surfer->id_card,
                'surfer_id' => $surfer->surfer_id,
                'created_at' => $surfer->created_at,
                'updated_at' => $surfer->updated_at,
                'surfing_experiences' => $surfer->surfingExperiences
            ]
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $surfer = Surfer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'country' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|string|email|max:100|unique:surfers,email,' . $surfer->surfer_id,
            'phone_number' => 'sometimes|required|string|max:15',
            'id_card' => 'sometimes|required|string',
        ]);

        $surfer->update($validated);
        return response()->json($surfer);
    }


    public function destroy($id)
    {
        $surfer = Surfer::findOrFail($id);
        $surfer->delete();
        return response()->json(['message' => 'Surfer deleted']);
    }
}

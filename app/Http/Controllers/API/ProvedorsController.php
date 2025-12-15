<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Provedors;
use Illuminate\Http\Request;

class ProvedorsController extends Controller
{
    public function index()
    {
        return response()->json(Provedors::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'contact' => 'required|string',
            'phone' => 'nullable|string',
            'email' => 'required|email|unique:provedors,email',
            'direction' => 'nullable|string',
        ]);

        $provedor = Provedors::create($validated);

        return response()->json($provedor, 201);
    }

    public function show(string $id)
    {
        return response()->json(Provedors::findOrFail($id), 200);
    }

    public function update(Request $request, string $id)
    {
        $provedor = Provedors::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string',
            'contact' => 'sometimes|string',
            'phone' => 'nullable|string',
            'email' => 'sometimes|email|unique:provedors,email,' . $id,
            'direction' => 'nullable|string',
        ]);

        $provedor->update($validated);

        return response()->json($provedor, 200);
    }

    public function destroy(string $id)
    {
        $provedor = Provedors::findOrFail($id);
        $provedor->delete();

        return response()->json(['message' => 'Proveedor eliminado correctamente'], 200);
    }
}

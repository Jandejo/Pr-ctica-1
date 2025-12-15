<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Mostrar todos los productos activos.
     */
    public function index()
    {
        $products = Product::where('is_activate', true)->get();
        return response()->json($products, 200);
    }

    /**
     * Crear un nuevo producto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'code'        => 'required|string|max:100|unique:products,code',
            'stock'       => 'required|integer|min:0',
            'is_activate' => 'boolean'
        ]);

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Producto creado exitosamente',
            'product' => $product
        ], 201);
    }

    /**
     * Mostrar un producto específico.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product, 200);
    }

    /**
     * Actualizar un producto existente.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'price'       => 'sometimes|required|numeric|min:0',
            'code'        => 'sometimes|required|string|max:100|unique:products,code,' . $id,
            'stock'       => 'sometimes|required|integer|min:0',
            'is_activate' => 'sometimes|boolean'
        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Producto actualizado correctamente',
            'product' => $product
        ], 200);
    }

    /**
     * Eliminar un producto.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Producto eliminado correctamente'], 200);
    }
}

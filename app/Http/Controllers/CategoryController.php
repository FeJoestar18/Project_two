<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /// Exibir todas as categorias
    public function index()
    {
        $categories = Category::all(); // Pega todas as categorias
        return response()->json($categories);
    }

    // Exibir uma categoria específica
    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }
        return response()->json($category);
    }

    // Criar uma nova categoria
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::create($validated);
        return response()->json($category, 201); // Retorna a categoria criada com status 201
    }

    // Atualizar uma categoria existente
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);
        return response()->json($category);
    }

    // Excluir uma categoria
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        $category->delete();
        return response()->json(['message' => 'Categoria excluída com sucesso']);
    }
}

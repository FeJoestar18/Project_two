<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    // Exibir todos os planos
    public function index()
    {
        $plans = Plan::all();
        return response()->json($plans);
    }

    // Exibir um plano específico
    public function show($id)
    {
        $plan = Plan::find($id);
        if (!$plan) {
            return response()->json(['message' => 'Plano não encontrado'], 404);
        }
        return response()->json($plan);
    }

    // Criar um novo plano
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer', // Ex: duração em meses
        ]);

        $plan = Plan::create($validated);
        return response()->json($plan, 201);
    }

    // Atualizar um plano
    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);
        if (!$plan) {
            return response()->json(['message' => 'Plano não encontrado'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        $plan->update($validated);
        return response()->json($plan);
    }

    // Excluir um plano
    public function destroy($id)
    {
        $plan = Plan::find($id);
        if (!$plan) {
            return response()->json(['message' => 'Plano não encontrado'], 404);
        }

        $plan->delete();
        return response()->json(['message' => 'Plano excluído com sucesso']);
    }
}

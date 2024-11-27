<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    // Exibir todas as assinaturas
    public function index()
    {
        $subscriptions = Subscription::all();
        return response()->json($subscriptions);
    }

    // Exibir uma assinatura específica
    public function show($id)
    {
        $subscription = Subscription::find($id);
        if (!$subscription) {
            return response()->json(['message' => 'Assinatura não encontrada'], 404);
        }
        return response()->json($subscription);
    }

    // Criar uma nova assinatura
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Referencia o usuário que assinou
            'plan_id' => 'required|exists:plans,id', // Referencia o plano
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $subscription = Subscription::create($validated);
        return response()->json($subscription, 201);
    }

    // Atualizar uma assinatura
    public function update(Request $request, $id)
    {
        $subscription = Subscription::find($id);
        if (!$subscription) {
            return response()->json(['message' => 'Assinatura não encontrada'], 404);
        }

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan_id' => 'required|exists:plans,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $subscription->update($validated);
        return response()->json($subscription);
    }

    // Excluir uma assinatura
    public function destroy($id)
    {
        $subscription = Subscription::find($id);
        if (!$subscription) {
            return response()->json(['message' => 'Assinatura não encontrada'], 404);
        }

        $subscription->delete();
        return response()->json(['message' => 'Assinatura excluída com sucesso']);
    }
}

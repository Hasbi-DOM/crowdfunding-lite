<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store (Request $request, Campaign $campaign) 
    {
        $validated = $request->validate([
            'campaign_id' => 'required',
            'name' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:1000',
            'message' => 'nullable|string',
        ]);

        $campaign->Donation()->create([
            'campaign_id' => $validated['campaign_id'],
            'name' => $validated['name'] ?? 'Anonymous',
            'amount' => $validated['amount'],
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Thank you for your donation 🙏');
    }
}

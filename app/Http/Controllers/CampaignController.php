<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::whereDate('end_date', '>=', Carbon::today()) // get all campaigns where end_date >= today
            ->withCount('Donation')
            ->latest()
            ->get(); 
        
        return view('campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:10240',
            'target_amount' => 'required|numeric|min:1',
            'category' => 'required|string',
            'end_date' => 'required|date|after:today',
            'bank_name' => 'required|string',
            'account_number' => 'required|string',
            'account_holder' => 'required|string',
        ]);
       
        DB::transaction(function () use ($validated, $request) {

            // upload image
            $imagePath = $request->file('image')->store('campaigns', 'public');

            // create campaign
            $campaign = Campaign::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image' => $imagePath,
                'target_amount' => $validated['target_amount'],
                'current_amount' => 0,
                'category' => $validated['category'],
                'end_date' => $validated['end_date'],
            ]);

            // create bank based on campaign
            $campaign->bank()->create([
                'bank_name' => $validated['bank_name'],
                'account_number' => $validated['account_number'],
                'account_holder' => $validated['account_holder'],
            ]);
        });

        return redirect()->route('campaigns.index')
         ->with('success', 'Campaign created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaigns.show', compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

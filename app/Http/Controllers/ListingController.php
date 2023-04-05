<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            "listings" => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->simplePaginate(10)]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', 'min:4'],
            'tags' => ['required'],
            'company' => ['required', 'min:4'],
            'location' => ['required'],
            'email' => ['required', 'email'],
            'website' => ['required'],
            'description' => ['required']
        ]);

        $formFields['user_id'] = auth()->id();

        // check if file is attached to the form
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('logos', 'public');
        }
        
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }

    public function show(Listing $listing)
    {
        return view('listings.show', ["listing" => $listing]);
    }

    public function edit(Listing $listing)
    {
        // make sure logged in user is the owner
        if ($listing->user_id != auth()->user()->id) {
            return abort(403, 'Unauthorized Action');
        }

        return view('listings.edit', ["listing" => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        // make sure logged in user is the owner
        if ($listing->user_id != auth()->user()->id) {
            return abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => ['required', 'min:4'],
            'tags' => ['required'],
            'company' => ['required', 'min:4'],
            'location' => ['required'],
            'email' => ['required', 'email'],
            'website' => ['required'],
            'description' => ['required']
        ]);

        // check if file is attached to the form
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('logos', 'public');
        }
        
        $listing->update($formFields);

        return back()->with('message', 'Listing Updated Successfully');
    }

    public function destroy(Listing $listing)
    {
        // make sure logged in user is the owner
        if ($listing->user_id != auth()->user()->id) {
            return abort(403, 'Unauthorized Action');
        }

        $listing->delete();

        return back()->with('message', 'Listing Deleted Successfully');
    }

    public function manage()
    {
        return view('listings.manage', [
            'listings' => auth()
                ->user()
                ->listings()
                ->latest()
                ->filter(request(['search']))
                ->simplePaginate(10)]);
    }
}

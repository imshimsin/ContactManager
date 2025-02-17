<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class XMLImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate(['xml_file' => 'required|file|mimes:xml']);

        $xmlContent = simplexml_load_file($request->file('xml_file'));

        foreach ($xmlContent->contact as $contact) {
            Contact::create([
                'name' => (string) $contact->name,
                'phone' => (string) $contact->phone,
            ]);
        }

        return redirect()->route('contacts.index')->with('success', 'Contacts imported successfully!');
    }
}


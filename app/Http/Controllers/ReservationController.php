<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Reservation; // Assurez-vous que cette importation existe

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
        ]);

        // Création effective de la réservation dans la base de données
        $reservation = Reservation::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'guests' => $validatedData['guests']
        ]);

        // Redirection avec message de succès
        return redirect()->route('reservation')
               ->with('success', 'Réservation enregistrée avec succès !');
    }
}
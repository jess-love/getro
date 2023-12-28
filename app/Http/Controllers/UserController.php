<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function MonCompte()
    {

        $users = auth()->user();

        if ($users instanceof User) {
            $users->load(['address' => function ($query) {
                $query->select('address.*');
            }]);
        }
//        dd($users);
        return view('account', compact('users'));
    }

    public function Address()
    {

        $users = auth()->user();

        if ($users instanceof User) {
            $users->load(['address' => function ($query) {
                $query->select('address.*');
            }]);
        }
//        dd($users);
        return view('address', compact('users'));
    }

    public function addAddress(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'lastname'  => 'required|string',
            'firstname' => 'required|string',
            'street'    => 'required|string',
            'phone'     => 'required|string',
            'city'      => 'required|string',
            'zip_code'  => 'required|string',
            'country'   => 'required|string',
        ]);

        $address = Address::create([
            'lastname'  => $request->input('lastname'),
            'firstname' => $request->input('firstname'),
            'street'    => $request->input('street'),
            'phone'     => $request->input('phone'),
            'city'      => $request->input('city'),
            'zip_code'  => $request->input('zip_code'),
            'country'   => $request->input('country'),
        ]);
        $user->address()->attach($address->id);
        return back()->with('success', 'Adresse Ajoutée avec Succes!');

    }


    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'first_name' => 'nullable|string',
            'last_name'  => 'nullable|string',
        ]);

        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name'  => $request->input('last_name'),
        ]);

        return back()->with('success', 'Profil modifé avec Succes!');
    }


    public function updateAddress(Request $request, $addressId)
    {
        // Validation des données du formulaire
        $this->validate($request, [
            'lastname'  => 'nullable|string',
            'firstname' => 'nullable|string',
            'street'    => 'nullable|string',
            'city'      => 'nullable|string',
            'phone'     => 'nullable|string',
            'zip_code'  => 'nullable|string',
        ]);

        $address = Address::findOrFail($addressId);

        // Mise à jour des champs uniquement s'ils sont présents dans la requête
        foreach ($request->only(['lastname', 'firstname', 'street', 'city', 'phone', 'zip_code', 'country']) as $field => $value) {
            if (!is_null($value)) {
                $address->$field = $value;
            }
        }

        // Enregistrement seulement si des modifications ont été apportées
        if ($address->isDirty()) {
            $address->save();
            return redirect()->back()->with('success', 'Adresse mise à jour avec succès');
        } else {
            return redirect()->back()->withErrors(['Aucune modification détectée.']);
        }
    }




    public function removeAddress($id)
    {
        $user = auth()->user();
        $referencesExist = UserAddress::where('user_id', $user->id)->where('address_id', $id)->exists();

        if ($referencesExist) {
            UserAddress::where('user_id', $user->id)->where('address_id', $id)->delete();
            $address = Address::findOrFail($id);
            $address->delete();

            return redirect()->back()->with('success', 'Adresse supprimée avec succès');
        } else {
            return redirect()->back()->with('error', 'Adresse introuvable');
        }
    }


    public function deleteAddress(Request $request){
        if(Auth::check()){
            $address_id = $request->input('address_id');
            if(UserAddress::where('address_id',$address_id)->where('user_id',Auth::id())->exists()){
                $address_user = UserAddress::where('address_id',$address_id)->where('user_id',Auth::id())->first();
                if ($address_user) {
                    $address_user->delete();
                    return response()->json(['status' => "Address Deleted successfully"]);
                } else {
                    return response()->json(['status' => "Address not found"]);
                }
            }

        }else{
            return response()->json(['status',"login to continue"]);

        }
    }




}

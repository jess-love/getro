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



    public function updateAddress(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'lastname'  => 'sometimes|string',
                'firstname' => 'sometimes|string',
                'street'    => 'sometimes|string',
                'phone'     => 'sometimes|string',
                'city'      => 'sometimes|string',
                'zip_code'  => 'sometimes|string',
                'country'   => 'sometimes|string',
            ]);

            $addressId = $request->input('address_id');
            Log::debug("ID d'adresse reçu pour la mise à jour : $addressId");

            $address = Address::findOrFail($addressId);

            if (!$address) {
                Session::flash('error', 'Adresse non trouvée. La modification a échoué cherie.');
                Log::debug("ID d'adresse reçu pour la mise à jour babe: $addressId");
                return back();
            }

            $address->update($validatedData);
            Log::debug('Adresse trouvée et mise à jour avec succès.');

            Session::flash('success', 'Adresse modifiée avec succès!');
            return back();
        } catch (ModelNotFoundException $e) {
            Log::error("ModelNotFoundException lors de la mise à jour de l'adresse : " . $e->getMessage());
            Session::flash('error', 'Adresse non trouvée. La modification a échouéwwwwwwwww.');
            return back();
        } catch (\Exception $e) {
            Log::error("Exception lors de la mise à jour de l'adresse : " . $e->getMessage() . ' | ' . $e->getTraceAsString());
            Session::flash('error', 'Une erreur est survenue lors de la modification de l\'adresse.');
            return back();
        }
    }


//    public function removeAddress($id)
//    {
//        try {
//            // Vérifier s'il y a des références dans la table user_address
//            $referencesExist = UserAddress::where('address_id', $id)->exists();
//
//            if ($referencesExist) {
//                return response()->json(['error' => 'Il existe des références à cette adresse dans d\'autres tables.'], 500);
//            }
//
//            $address = Address::findOrFail($id);
//            $address->delete();
//
//            return response()->json(['message' => 'Adresse supprimée avec succès.'], 200);
//        } catch (\Exception $e) {
//            return response()->json(['error' => 'Une erreur est survenue lors de la suppression de l\'adresse.', 'message' => $e->getMessage()], 500);
//        }
//    }

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




    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);


        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        ]);

        return redirect()->route('account')->with('success', 'Profil mis à jour avec succès');
    }

}

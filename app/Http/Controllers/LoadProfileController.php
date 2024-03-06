<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoadProfile;
use App\Models\RegUser;
use App\Models\RegDonor;

class LoadProfileController extends Controller
{
   
    public function loadProfile(Request $request)
    {
        // Retrieve the donorId from the request
        $donorId = $request->input('donorId');
    
        // Retrieve the profile data from reg_donors table
        $profileData = RegDonor::where('donorId', $donorId)->first();
    
        if (!$profileData) {
            // If profile data doesn't exist, return a response with empty data
            return response()->json([
                'regUserData' => null,
                'profileData' => null,
            ]);
        }
    
        // Check if email exists in reg_users table
        $user = RegUser::where('email', $profileData->email)->first();
    
        // Initialize user registration data
        $userRegData = [
            'id' => null,
            'accountType' => null
        ];
    
        // If user exists, populate user registration data
        if ($user) {
            $userRegData = [
                'id' => $user->id,
                'accountType' => $user->accountType
            ];
        }
    
        // Return the response as JSON
        return response()->json([
            'regUserData' => $userRegData,
            'profileData' => $profileData,
        ]);
    }

     // Method to fetch and display donor profile
    
        public function showProfile(Request $request)
    {
        // Retrieve the donorId from the request
        $donorId = $request->input('donorId');

       // Retrieve the profile data from reg_donors table
       $profileData = RegDonor::where('donorId', $donorId)->first();

        // Return the donor profile data
        return response()->json(['profileData' => $profileData]);
    }
     



}

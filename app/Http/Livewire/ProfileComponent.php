<?php

namespace App\Http\Livewire;
use App\Models\Profile;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class ProfileComponent extends Component
{
    public function render()
    {
        /*
        $userProfile =User::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        */
        $user =User::find(Auth::user()->id);
        return view('livewire.profile-component',['user'=>$user])->layout('layouts.base');
    }
}

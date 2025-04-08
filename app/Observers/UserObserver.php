<?php

namespace App\Observers;

use App\Models\User;
use App\Models\informacion_general;
class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
	        
	 $user->informacion_general()->create([

       	     'name' => '',
             'last_name' => '',
             'cedula' => '',
	     'fecha_nacimiento' => '',
	     'genero' => ''
	
              ]);

    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}

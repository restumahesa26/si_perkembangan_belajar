<?php

namespace App\Policies;

use App\Models\NilaiRapor;
use App\Models\Siswa;
use App\Models\User;

class NilaiPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Siswa $siswa)
    {
        return $user->orang_tua->id === $siswa->orang_tua_id;
    }
}

<?php

namespace App\Policies;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ArtistPolicy
{
    // return boolean only!!!
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool //user ที่ login เข้ามา ดูอะไรได้บ้าง
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Artist $artist): bool //user ดู artist ที่ระบุ
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool //user มีสิทธิ์สร้าง artist ? (ดูหน้า create และ กด CREATE)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Artist $artist): bool //มีสิทธิ์แก้ไข
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Artist $artist): bool //มีสิทธิ์ลบ
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Artist $artist): bool //มีสิทธิ์ restore (ต้องทำ softDelete)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Artist $artist): bool //มีสิทธิ์ forceDelete (ลบจริงๆ)
    {
        return false;
    }
}

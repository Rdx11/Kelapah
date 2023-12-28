<?php

namespace App\BusinessLayer;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserBusinessLayer
{
    public function getAll(): LengthAwarePaginator
    {
        return User::select(['id', 'name', 'email'])
                ->whereNot('id', 1)
                ->with('profile')
                ->latest()
                ->paginate(100);
    }

    public function store($request): void
    {
        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make('qweasd456'),
            ]);

            $user->assignRole($request['role']);

            $user->profile()->create($this->profileCollection($request));

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            Log::error($error);
        }
    }

    public function update($request, $id): void
    {
        try {
            DB::beginTransaction();

            $user = User::find($id);
            $user->update([
                'name' => $request['name'],
                'email' => $request['email'],
            ]);

            $user->syncRoles($request['role']);

            $user->profile()->update($this->profileCollection($request));

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            Log::error($error);
        }
    }

    public function delete($id): void
    {
        $user = User::find($id);
        $user->delete();
    }

    public function profileCollection($request): array
    {
        return collect($request)->only(['address', 'phone_number', 'gender', 'photo'])->toArray();
    }
}

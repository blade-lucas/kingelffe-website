<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MinecraftUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServerController extends Controller
{
    public function showServer(Request $request)
    {
        // Get all users of the specified types
        $users = MinecraftUser::select('username', 'usertype', 'uuid')
            ->whereIn('usertype', ['Server Moderator', 'Moderator', 'Admin', 'Owner'])
            ->get();

        // Total number of users
        $totalUsers = $users->count();

        // Get the current offset from the request, defaulting to 0
        $currentOffset = 0;

        // Get the next 5 users based on the offset
        $usersToShow = $users->slice($currentOffset, 5); // Show 5 users at a time

        // Calculate the next and previous offsets
        $nextOffset = ($currentOffset + 1) % $totalUsers;  // Next 5 users (wrap around if needed)
        $prevOffset = ($currentOffset - 1 + $totalUsers) % $totalUsers;  // Previous 5 users (wrap around if needed)

        return view('V2.serverV2', compact('usersToShow', 'currentOffset', 'nextOffset', 'prevOffset', 'totalUsers'));
    }

    // Pagination function for AJAX
    public function paginateModerators(Request $request)
    {
        // Get all users of the specified types
        $users = MinecraftUser::select('username', 'usertype', 'uuid')
            ->whereIn('usertype', ['Server Moderator', 'Moderator', 'Admin', 'Owner'])
            ->get();

        // Total number of users
        $totalUsers = $users->count();

        // Get the current offset from the request, defaulting to 0 if not set
        $currentOffset = $request->input('currentOffset', 0);

        // Calculate the next set of 5 users (wrap around if needed)
        $nextOffset = ($currentOffset + 1) % $totalUsers;  // Next 5 users (wrap around if needed)
        $prevOffset = ($currentOffset - 1 + $totalUsers) % $totalUsers;  // Previous 5 users (wrap around if needed)

        // Get the next 5 users based on the current offset
        $usersToShow = collect();
        for ($i = 0; $i < 5; $i++) {
            // Calculate the index for the user in the circular array
            $index = ($currentOffset + $i) % $totalUsers;
            $usersToShow->push($users[$index]);
        }

        // Return a JSON response with updated HTML for the users and the next/previous offsets
        return response()->json([
            'usersToShow' => view('partials.minecraftUsers', compact('usersToShow'))->render(),
            'nextOffset' => $nextOffset,
            'prevOffset' => $prevOffset,
        ]);
    }

}

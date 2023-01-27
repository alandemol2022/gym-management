<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function welcome()
    {
        return view('welcome')->with('members', Member::all());
    }

    public function create()
    {
        return view('create');
    }

    public function update(Request $request)
    {
        $member = Member::find($request->id);

        $member->name                    = $request->name;
        $member->email                   = $request->email;
        $member->primembership_typece    = $request->membership_type;
        $member->membership_expiration   = $request->membership_expiration;

        $member->save();

        return redirect()->route('welcome')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('welcome')->with('success', 'Member deleted successfully!');
    }

}

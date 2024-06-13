<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // 增
    public function addMember(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $model = new Member;
        $name = $request->name;
        $email = $request->email;

        $model->name = $name;
        $model->email = $email;

        $model->save();

        return response()->json(['message' => '成功新增會員'], 201);
    }

    // 刪
    public function deleteMember($id)
    {
        $member = Member::find($id);

        if ($member) {
            $member->delete();
            return response()->json(['message' => '成功刪除會員'], 200);
        } else {
            return response()->json(['message' => '找不到資料'], 404);
        }
    }

    // 修
    public function updateMember(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $member = Member::find($id);

        $name = $request->name;
        $email = $request->email;

        $member->name = $name;
        $member->email = $email;

        if ($member) {
            $member->save();

            return response()->json(['message' => '成功修改會員資料'], 200);
        } else {
            return response()->json(['message' => '找不到會員'], 404);
        }
    }

    // 查
    public function selectMember(Request $request)
    {
        $member = Member::all();
        return response()->json($member);
    }
}

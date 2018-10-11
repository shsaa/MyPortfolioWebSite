<?php

namespace App\Http\Controllers;

use App\Http\Resources\IdeasToImplementResources;
use App\IdeasToImplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdeasToImplementController extends Controller
{
    //these four function are without API
    public function ShowData(Request $request)
    {
        //get data if id passed or not
        if ($request->input('SearchTextBox') == null) {
            $IdeasData = IdeasToImplement::all();
            return view('FunctionalityPages.DatabaseFunctionality')->with("IdeasData", $IdeasData);
        } else {
            $IdeasData = DB::table('ideas_to_implements')->where('UserIdentity', 'like', '%' . $request->input('SearchTextBox') . '%')->get();
            return view('FunctionalityPages.DatabaseFunctionality')->with("IdeasData", $IdeasData);
        }
    }

    public function AddIdea(Request $request)
    {
        $this->validate($request, [
            'Title' => 'required|max:255',
        ]);

        $NewIdeas = new IdeasToImplement;
        $NewIdeas->UserIdentity = $request->input('UserIdentity');
        $NewIdeas->Title = $request->input('Title');
        $NewIdeas->Details = $request->input('Details');
        $NewIdeas->DateAdded = date('Y-m-d H:i:s');

        $NewIdeas->save();

        return redirect('/DatabaseFunctionality')->with('success', 'Data Added');
    }

    public function UpdateIdea($Idea, Request $request)
    {
        $this->validate($request, [
            'UserIdentity' => 'required',
            'Title' => 'required|max:255',
        ]);

        $UserIdentity = $request->input('UserIdentity');
        $Title = $request->input('Title');
        $Details = $request->input('Details');
        DB::table('ideas_to_implements')->where('id', '=', $Idea)->update([
            'UserIdentity' => $UserIdentity,
            'Title' => $Title,
            'Details' => $Details,
            'LastUpdate' => date('Y-m-d H:i:s')
        ]);

        return redirect('/DatabaseFunctionality')->with('success', 'Data updated for ' . $UserIdentity);
    }

    public function DeleteIdea($Idea)
    {
        DB::table('ideas_to_implements')->where('id', '=', $Idea)->delete();
        return redirect('/DatabaseFunctionality')->with('success', 'Idea Deleted');
    }

    //these four function are for API
    public function ShowDataAPI(Request $request, $id = null)
    {
        //get data if id passed or not
        if ($request->input('SearchTextBox') == null && $id == null) {
            $IdeasData = IdeasToImplement::paginate(15);
            //return the collection
        } else {
            if ($id == null) {
                $IdeasData = IdeasToImplement::where('UserIdentity', 'like', '%' . $request->input('SearchTextBox') . '%')->paginate(15);
            } else {
                $IdeasData = IdeasToImplement::findOrFail($id);
            }
            //return specified
        }
        return new IdeasToImplementResources($IdeasData);
    }

    public function AddIdeaAPI(Request $request)
    {
        $this->validate($request, [
            'Title' => 'required|max:255',
        ]);

        $NewIdeas = new IdeasToImplement;
        $NewIdeas->UserIdentity = $request->input('UserIdentity');
        $NewIdeas->Title = $request->input('Title');
        $NewIdeas->Details = $request->input('Details');
        $NewIdeas->DateAdded = date('Y-m-d H:i:s');

        $NewIdeas->save();

        return new IdeasToImplementResources($NewIdeas);
    }

    public function UpdateIdeaAPI($id, Request $request)
    {
        $this->validate($request, [
            'UserIdentity' => 'required',
            'Title' => 'required|max:255',
        ]);

        $UpdateIdeas = IdeasToImplement::findOrFail($id);
        /*$UpdateIdeas->update([
            'UserIdentity' => $UserIdentity,
            'Title' => $Title,
            'Details' => $Details,
            'LastUpdate' => date('Y-m-d H:i:s')
        ]);*/

        $UpdateIdeas->id = $id;
        $UpdateIdeas->UserIdentity = $request->input('UserIdentity');
        $UpdateIdeas->Title = $request->input('Title');
        $UpdateIdeas->Details = $request->input('Details');
        $UpdateIdeas->LastUpdate = date('Y-m-d H:i:s');

        if ($UpdateIdeas->save()) {
            return new IdeasToImplementResources($UpdateIdeas);
        } else {
            return response()->json([
                'Message' => 'No Data Deleted',
            ], 404);
        }
    }
/* here a commer */
    public function DeleteIdeaAPI($id)
    {
        $DeleteIdea = IdeasToImplement::findOrFail($id);
        try {
            $DeleteIdea->delete();
        } catch (\Exception $e) {
            return response()->json([
                'Message' => 'No Data Deleted',
            ], 404);
        }
        return new IdeasToImplementResources($DeleteIdea);

    }
}

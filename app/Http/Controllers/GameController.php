<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{

    public function shows(){
        $games = Game::all();
        return response()->json([
            "data" => $games
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:games',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'status' => 'required'
        ]);

        $game = Game::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        return response()->json([
            "data" => [
                "message" => "Game added!"
            ]
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:games',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'status' => 'required'
        ]);

        $game = Game::find($id);
        if (!$game) {
            return response()->json([
                "data" => [
                    "message" => "Game not found!"
                ]
            ]);
        }

        $dataRequest =  [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ];

        $game->update($dataRequest);

        return response()->json([
            "data" => [
                "message" => "Game updated!"
            ]
        ]);
    }
    
    public function delete($id){
        $game = Game::find($id);

        if ($game) {
            $game->delete();
            return response()->json([
                "data" => [
                    "message" => "Game deleted!"
                ]
            ]);
        } else {
            return response()->json([
                "data" => [
                    "message" => "Game not found!"
                ]
            ]);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $games = Game::where('name', 'like', '%' . $keyword . '%')
        ->orWhereHas('category', function($query) use ($keyword) {
            $query->where('name', 'like', "%{$keyword}%");
        })
        ->get();

        return response()->json([
            "data" => $games
        ]);
    }
}

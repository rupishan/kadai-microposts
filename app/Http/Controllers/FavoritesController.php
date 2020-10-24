<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りにするアクション。
     *
     * @param  $id  相手ユーザが投稿したid
     * @return \Illuminate\Http\Response
     */
     
     public function store($micropost)
     {
         //認証済みユーザ(閲覧者)がidの投稿をお気に入りにする
         \Auth::user()->favorite($micropost);
         //前のURLへリダイレクトさせる
         return back();
     }
     
     /**
     * 投稿をお気に入りから外すアクション。
     *
     * @param  $id  相手ユーザが投稿したid
     * @return \Illuminate\Http\Response
     */
     
     public function destroy($micropost)
     {
         //認証済みユーザ(閲覧者)がidの投稿をお気に入りから外す
         \Auth::user()->unfavorite($micropost);
         //前のURLへリダイレクトさせる
         return back();
     }
}

<?php

namespace App\Http\Controllers\frontend\news;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;
use Auth;

class news_detailController extends Controller
{
	protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index(Request $req)
    {
    	$data    = $this->model->d_news()->with('m_category_news')->where('n_id',$req->id)->first();
        $comment = $this->model->d_news_comment()->where('dnc_news',$req->id)->get();
        if (Auth::user() != null) {
            $cek_like_user     = $this->model->d_news_like()->where('dnl_news',$req->id)->where('dnl_like_user',Auth::user()->m_id)->count('dnl_news');
            $cek_interest_user = $this->model->d_news_interest()->where('dni_news',$req->id)->where('dni_interest_user',Auth::user()->m_id)->count('dni_news');
        }
        $total_like     = $this->model->d_news_like()->where('dnl_news',$req->id)->count();
        $total_interest = $this->model->d_news_interest()->where('dni_news',$req->id)->count();
        $total_comment  = $this->model->d_news_comment()->where('dnc_news',$req->id)->count('dnc_id');
        return view('frontend.news.news_detail',compact('data','comment','total_like','total_interest','total_comment','cek_like_user','cek_interest_user'));
    }
    public function news_detail_viewer_update(Request $req)
    {
        $total_view = $this->model->d_news()->where('n_id',$req->id)->sum('n_views');
        $total_view = $this->model->d_news()->where('n_id',$req->id)->update(['n_views'=>$total_view+1]);
    }
    public function news_detail_like(Request $req)
    {
        // return Auth::user()->m_id;
        $cek_like_user = $this->model->d_news_like()->where('dnl_news',$req->news)->where('dnl_like_user',Auth::user()->m_id)->count('dnl_news');
        if ($cek_like_user == 0) {
            $save_like = $this->model->d_news_like()
                      ->create([
                        'dnl_news'=>$req->news,
                        'dnl_like_user'=>Auth::user()->m_id,
                        'dnl_creator'=>$req->creator,
                      ]);
            $status_like = 'plus';
        }else{
            $save_like = $this->model->d_news_like()->where('dnl_news',$req->news)->where('dnl_like_user',Auth::user()->m_id)->delete();
            $status_like = 'minus';
        }
        
        $total_like = $this->model->d_news_like()->where('dnl_news',$req->news)->count();
        return response()->json(['status'=>'sukses','total_like'=>$total_like,'status_like'=>$status_like]);
    }
    public function news_detail_interest(Request $req)
    {
        $cek_interest_user = $this->model->d_news_interest()->where('dni_news',$req->news)->where('dni_interest_user',Auth::user()->m_id)->count('dni_news');
        if ($cek_interest_user == 0) {
            $save_interest = $this->model->d_news_interest()
                      ->create([
                        'dni_news'=>$req->news,
                        'dni_interest_user'=>Auth::user()->m_id,
                        'dni_creator'=>$req->creator,
                      ]);
            $status_interest = 'plus';
        }else{
            $save_interest = $this->model->d_news_interest()->where('dni_news',$req->news)->where('dni_interest_user',Auth::user()->m_id)->delete();
            $status_interest = 'minus';
        }
        
        $total_interest = $this->model->d_news_interest()->where('dni_news',$req->news)->count();
        return response()->json(['status'=>'sukses','total_interest'=>$total_interest,'status_interest'=>$status_interest]);
    }
    public function news_detail_comment(Request $req)
    {
        $save_comment = $this->model->d_news_comment()
                      ->create([
                        'dnc_news'=>$req->news,
                        'dnc_comment_text'=>$req->message,
                        'dnc_comment_user'=>Auth::user()->m_id,
                        'dnc_creator'=>$req->creator,
                      ]);
        $comment_user = $this->model->m_mem()->where('m_id',Auth::user()->m_id)->first();
        return response()->json(['status'=>'sukses','comment_text'=>$req->message,'comment_user'=>$comment_user,'comment_date'=>date('d F Y')]);
    }
}

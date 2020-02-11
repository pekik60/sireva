<?php

namespace App\Http\Controllers\frontend\event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;
use Auth;
class event_detailController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index(Request $req)
    {
    	  $data    = $this->model->d_event()->with('m_mem','m_category_event')->where('e_id',$req->id)->first();
        $comment = $this->model->d_event_comment()->with('comment_user','creator')->where('dec_event',$req->id)->orderBy('dec_id','DESC')->get();
        if (Auth::user() != null) {
            $cek_like_user     = $this->model->d_event_like()->where('del_event',$req->id)->where('del_like_user',Auth::user()->m_id)->count('del_event');
            $cek_interest_user = $this->model->d_event_interest()->where('dei_event',$req->id)->where('dei_interest_user',Auth::user()->m_id)->count('dei_event');
        }
        $total_like     = $this->model->d_event_like()->where('del_event',$req->id)->count();
        $total_interest = $this->model->d_event_interest()->where('dei_event',$req->id)->count();
        $total_comment  = $this->model->d_event_comment()->with('d_event_comment_dt')->where('dec_event',$req->id)->count('dec_id');
        // $total_interest = $this->model->d_event_interest()->where('dei_event',$req->id)->count();
        return view('frontend.event.event_detail',compact('data','comment','total_like','total_interest','total_comment','cek_like_user','cek_interest_user'));
    }
    public function event_detail_viewer_update(Request $req)
    {
        $total_view = $this->model->d_event()->where('e_id',$req->id)->sum('e_views');
        $total_view = $this->model->d_event()->where('e_id',$req->id)->update(['e_views'=>$total_view+1]);
    }
    public function event_detail_like(Request $req)
    {
        $cek_like_user = $this->model->d_event_like()->where('del_event',$req->event)->where('del_like_user',Auth::user()->m_id)->count('del_event');
        if ($cek_like_user == 0) {
            $save_like = $this->model->d_event_like()
                      ->create([
                        'del_event'=>$req->event,
                        'del_like_user'=>Auth::user()->m_id,
                        'del_creator'=>$req->creator,
                      ]);
            $status_like = 'plus';
        }else{
            $save_like = $this->model->d_event_like()->where('del_event',$req->event)->where('del_like_user',Auth::user()->m_id)->delete();
            $status_like = 'minus';
        }
        
        $total_like = $this->model->d_event_like()->where('del_event',$req->event)->count();
        return response()->json(['status'=>'sukses','total_like'=>$total_like,'status_like'=>$status_like]);
    }
    public function event_detail_interest(Request $req)
    {
        $cek_interest_user = $this->model->d_event_interest()->where('dei_event',$req->event)->where('dei_interest_user',Auth::user()->m_id)->count('dei_event');
        if ($cek_interest_user == 0) {
            $save_interest = $this->model->d_event_interest()
                      ->create([
                        'dei_event'=>$req->event,
                        'dei_interest_user'=>Auth::user()->m_id,
                        'dei_creator'=>$req->creator,
                      ]);
            $status_interest = 'plus';
        }else{
            $save_interest = $this->model->d_event_interest()->where('dei_event',$req->event)->where('dei_interest_user',Auth::user()->m_id)->delete();
            $status_interest = 'minus';
        }
        
        $total_interest = $this->model->d_event_interest()->where('dei_event',$req->event)->count();
        return response()->json(['status'=>'sukses','total_interest'=>$total_interest,'status_interest'=>$status_interest]);
    }
    public function event_detail_comment(Request $req)
    {
        $save_comment = $this->model->d_event_comment()
                      ->create([
                        'dec_event'=>$req->event,
                        'dec_comment_text'=>$req->message,
                        'dec_comment_user'=>Auth::user()->m_id,
                        'dec_creator'=>$req->creator,
                      ]);
        $comment_user = $this->model->m_mem()->where('m_id',Auth::user()->m_id)->first();
        return response()->json(['status'=>'sukses','comment_text'=>$req->message,'comment_user'=>$comment_user,'comment_date'=>date('d F Y')]);
    }
    function event_list_fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = $this->model->d_event()->with('m_mem','m_category_event')->paginate(8);
      return view('frontend.event.event_list_result_render', compact('data'))->render();
     }
    }
    public function event_list_search(Request $req)
    {
      if ($req->kategori != null) {
          $kategori = 'e_category = '.$req->kategori.'';
      }else{
          $kategori = '';
      }
      if ($req->tgl_awal != null) {
          $tgl_awal = 'and e_start_date = '.$req->tgl_awal.'';
      }else{
          $tgl_awal = '';
      }
      if ($req->tgl_akir != null) {
          $tgl_akir = 'and e_end_date = '.$req->tgl_akir.'';
      }else{
          $tgl_akir = '';
      }
      $data = $this->model->d_event()->with('m_mem','m_category_event')->whereRaw($kategori.$tgl_awal.$tgl_akir)->paginate(8);
      return view('frontend.event.event_list_result_render', compact('data'))->render();
    }
}

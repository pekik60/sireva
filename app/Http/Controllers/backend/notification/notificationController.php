<?php

namespace App\Http\Controllers\backend\notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Storage;
use Auth;
class notificationController extends Controller
{
	  protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function notification()
    {
      $del_news = $this->model->d_news_like()
                        ->select('dnl_id as id','dnl_created_at as tgl_notif','dnl_read as status','m_image as gambar','m_name as user','n_title as news')
                        ->selectRaw("'' as kosong,'like' as LIKES")
                        ->join('m_mem','m_id','dnl_like_user')
                        ->join('d_news','dnl_news','n_id')
                        ->where('dnl_creator',auth::user()->m_id);

      $dei_news = $this->model->d_news_interest()
                      ->select('dni_id as id','dni_created_at as tgl_notif','dni_read as status','m_image as gambar','m_name as user','n_title as news')
                      ->selectRaw("'' as kosong,'interest' as INTEREST")
                      ->join('m_mem','m_id','dni_interest_user')
                      ->join('d_news','dni_news','n_id')
                      ->where('dni_creator',auth::user()->m_id);

      $dec_news = $this->model->d_news_comment()
                      ->select('dnc_id as id','dnc_created_at as tgl_notif','dnc_read as status','m_image as gambar','m_name as user','dnc_comment_text as texts','n_title as news')
                      ->selectRaw("'comment' as tipe")
                      ->join('m_mem','m_id','dnc_comment_user')
                      ->join('d_news','dnc_news','n_id')
                      ->where('dnc_creator',auth::user()->m_id);

      $del_event = $this->model->d_event_like()
                        ->select('del_id as id','del_created_at as tgl_notif','del_read as status','m_image as gambar','m_name as user','e_title as events')
                        ->selectRaw("'' as kosong,'like' as LIKES")
                        ->join('m_mem','m_id','del_like_user')
                        ->join('d_event','del_event','e_id')
                        ->where('del_creator',auth::user()->m_id);

      $dei_event = $this->model->d_event_interest()
                      ->select('dei_id as id','dei_created_at as tgl_notif','dei_read as status','m_image as gambar','m_name as user','e_title as events')
                      ->selectRaw("'' as kosong,'interest' as INTEREST")
                      ->join('m_mem','m_id','dei_interest_user')
                      ->join('d_event','dei_event','e_id')
                      ->where('dei_creator',auth::user()->m_id);

      $dec_event = $this->model->d_event_comment()
                      ->select('dec_id as id','dec_created_at as tgl_notif','dec_read as status','m_image as gambar','m_name as user','dec_comment_text as texts','e_title as events')
                      ->selectRaw("'comment' as tipe")
                      ->join('m_mem','m_id','dec_comment_user')
                      ->join('d_event','dec_event','e_id')
                      ->where('dec_creator',auth::user()->m_id)
                      ->union($del_event)
                      ->union($dei_event)
                      ->union($del_news)
                      ->union($dei_news)
                      ->union($dec_news)
                      ->orderBy('tgl_notif','DESC')
                      ->limit(8)
                      ->get();

      return response()->json(['notif'=>$dec_event]);

    }

}

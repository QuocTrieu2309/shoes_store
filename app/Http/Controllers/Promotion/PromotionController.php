<?php

namespace App\Http\Controllers\Promotion;

use App\Http\Requests\Promotion\PromotionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use Carbon\Carbon;

class PromotionController extends Controller
{
    const PATH_VIEW = "admins.promotions.";
    public function index()
    {
        $title = "Promotions";
        $data = Promotion::where('deleted',0)->get();
        return view(self::PATH_VIEW.__FUNCTION__,compact('title','data'));
    }
    public function create()
    {
        $title  = "Create Promotion";
        return view(self::PATH_VIEW.__FUNCTION__,compact('title'));
    }
    public function store(PromotionRequest $request)
    {
        $start_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_time'))->format('Y-m-d H:i:s');
        $end_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end_time'))->format('Y-m-d H:i:s');
        $promotion = Promotion::query()->create([
            'name'=>$request->name,
            'start_time'=>$start_time,
            'end_time'=>$end_time,
            'type_promotion' => $request->type_promotion,
            'value'=>$request->value,
            'decription'=> $request->description
        ]);
        if(!$promotion){
           return back()->with('error','Tao moi khong thanh cong!');
        }
        return back()->with('msg','Tao moi thanh cong!');
    }
    public function edit($id)
    {
        $title = "Edit Promotion";
        $promotion  = Promotion::find($id);
        return view(self::PATH_VIEW.__FUNCTION__,compact('title','promotion'));
    }
    public function update(PromotionRequest $request, $id)
    {
        try {
            $start_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_time'))->format('Y-m-d H:i:s');
            $end_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end_time'))->format('Y-m-d H:i:s');
            $promotion = Promotion::findOrFail($id);
            $promotion->update([
                'name' => $request->name,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'type_promotion' => $request->type_promotion,
                'value' => $request->value,
                'description' => $request->description
            ]);
            
            return back()->with('msg', 'Cập nhật thành công!');
        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra khi cập nhật: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        if($promotion){
            $promotion->deleted  = Promotion::STATUS_DEL;
            $promotion->save();
            return back()->with('msg','Xoa thanh cong!');
        }else{
            return back()->with('error','Xoa khong thanh cong!');
        }
    }
}

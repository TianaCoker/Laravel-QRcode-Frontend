<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp;


class ProductController extends Controller
{

    public function index(Request $request){
     
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:3232/api/qrcodes', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZiZTI1MmViNDJiNWExYzM2MWRkMGZkM2EyOGEyMjEwZTZlODlmZDA3MjZlNmFkNTRiMjk1NDQ1ZmNmZGE4YzUzMmI1Njc0YTIyMjIxNGZiIn0.eyJhdWQiOiIzIiwianRpIjoiZmJlMjUyZWI0MmI1YTFjMzYxZGQwZmQzYTI4YTIyMTBlNmU4OWZkMDcyNmU2YWQ1NGIyOTU0NDVmY2ZkYThjNTMyYjU2NzRhMjIyMjE0ZmIiLCJpYXQiOjE2NTY0MTY3NDQsIm5iZiI6MTY1NjQxNjc0NCwiZXhwIjoxNjg3OTUyNzQyLCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.Jr6uYZpymAuGarzM1K6RQuS7D1ZM4x4_LWOHK1RlnTR5hM2lq30l1S4f-va1AEIvSMssTOa4BsOiZAlTJdcVNbzmln3C_SsV1wXqHX_vwAvm8z9cZjLm7rjPc_fsqiW4xkLz3-__m06CWOM_LEsRWBlwgmmm3CfccQCgIWAY0-keCZy6Lufjj98MD3v3DIdE1AiN4XqeOwgBoXREItHWQkdkai1xZSLtol4hAZOh_XbkjNpb23RPOnwyiDy1_56TCUwvNQFuOa-qaOFnymaCtAnBGOeTEZu_qytmoYvFJVWqRqDiZ5KKuBywqZk23YJwxk1_vSNEsyj8ronCPr7RsD5ji4IXgfnaNrsrf7vEZj6f1j7lvAusEqKa21HXIYRyYFY-OWkY23yh7ZJj2ucsTBp50XkhIUfkQmHeQB9Pcuxa6WwiUyrO5AxedKHMh54COIZEP8JvkJyQbcdOH0GspokUKGYEpiPPIG2Jb5fJUmMSwWWqpLe_OMJ-ku2kcIDIBanL3BIykoVOMjsKzF9AYuOUxAyi6e2frgg5C5mlyIiCO2BmAac1xwutG_Lzi5b3W-ema3-MJn2NDKWnCc0M2EGjt16bkItufLKbMQOcTI2nrnHeztQmX-QLVNCfpEerP4kx_mEgncsEcHXPMGg6SXA-n5R9JGqFMNhXm-kX5Mk'
            ]
        ]);

     $qrcodes =  json_decode((string) $res->getBody(), true);

     return view('products.index')->with('qrcodes', $qrcodes);
    }

    public function show(Request $request){
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:3232/api/qrcodes/'.$request->id, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZiZTI1MmViNDJiNWExYzM2MWRkMGZkM2EyOGEyMjEwZTZlODlmZDA3MjZlNmFkNTRiMjk1NDQ1ZmNmZGE4YzUzMmI1Njc0YTIyMjIxNGZiIn0.eyJhdWQiOiIzIiwianRpIjoiZmJlMjUyZWI0MmI1YTFjMzYxZGQwZmQzYTI4YTIyMTBlNmU4OWZkMDcyNmU2YWQ1NGIyOTU0NDVmY2ZkYThjNTMyYjU2NzRhMjIyMjE0ZmIiLCJpYXQiOjE2NTY0MTY3NDQsIm5iZiI6MTY1NjQxNjc0NCwiZXhwIjoxNjg3OTUyNzQyLCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.Jr6uYZpymAuGarzM1K6RQuS7D1ZM4x4_LWOHK1RlnTR5hM2lq30l1S4f-va1AEIvSMssTOa4BsOiZAlTJdcVNbzmln3C_SsV1wXqHX_vwAvm8z9cZjLm7rjPc_fsqiW4xkLz3-__m06CWOM_LEsRWBlwgmmm3CfccQCgIWAY0-keCZy6Lufjj98MD3v3DIdE1AiN4XqeOwgBoXREItHWQkdkai1xZSLtol4hAZOh_XbkjNpb23RPOnwyiDy1_56TCUwvNQFuOa-qaOFnymaCtAnBGOeTEZu_qytmoYvFJVWqRqDiZ5KKuBywqZk23YJwxk1_vSNEsyj8ronCPr7RsD5ji4IXgfnaNrsrf7vEZj6f1j7lvAusEqKa21HXIYRyYFY-OWkY23yh7ZJj2ucsTBp50XkhIUfkQmHeQB9Pcuxa6WwiUyrO5AxedKHMh54COIZEP8JvkJyQbcdOH0GspokUKGYEpiPPIG2Jb5fJUmMSwWWqpLe_OMJ-ku2kcIDIBanL3BIykoVOMjsKzF9AYuOUxAyi6e2frgg5C5mlyIiCO2BmAac1xwutG_Lzi5b3W-ema3-MJn2NDKWnCc0M2EGjt16bkItufLKbMQOcTI2nrnHeztQmX-QLVNCfpEerP4kx_mEgncsEcHXPMGg6SXA-n5R9JGqFMNhXm-kX5Mk'
            ]
        ]);

     $qrcodes =  json_decode((string) $res->getBody(), true);

     

     return view('products.index')->with('qrcodes', $qrcodes);


    }
}

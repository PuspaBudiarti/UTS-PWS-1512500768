<?php

namespace App\Http\Controllers;
use App\KategoriModel;
use App\BukuModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index(){
		$data = KategoriModel::all();
		return response($data);
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function show($id){
		$data = KategoriModel::where('id',$id)->get();
		return response ($data);
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function store(Request $request){
		$data = new KategoriModel();
		$data->name = $request->input('name');
		$data->save();

		return response('Berhasil Tambah Data');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function update(Request $request, $id){
		$data = KategoriModel::where('id',$id)->first();
		$data->name = $request->input('name');
		$data->save();

		return response('Berhasil Merubah Data');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function destroy($id_cat){
		$data = KategoriModel::where('id',$id_cat)->first();
		$data->delete();

		return response('Berhasil Menghapus Data');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////



	public function buku(){
		$data = BukuModel::all();
		return response($data);
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function showbuku($id){
		$data = BukuModel::where('id_book',$id)->get();
		return response ($data);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function storebuku(Request $request){
		$data = new BukuModel();
		$data->title = $request->input('title');
		$data->author = $request->input('author');
		$data->publisher = $request->input('publisher');
    $data->stock = $request->input('stock');
		$data->synopsis = $request->input('synopsis');
		$data->id_book = $request->input('id_book');

		$data->save();

		return response('Berhasil Tambah Data');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function updatebuku(Request $request, $id){
		$data = BukuModel::where('id_book',$id)->first();
		$data->title = $request->input('title');
		$data->author = $request->input('author');
		$data->publisher = $request->input('publisher');
		$data->stock = $request->input('stock');
		$data->synopsis = $request->input('synopsis');
		$data->save();

		return response('Berhasil Merubah Data');
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function destroybuku($id_book){
		$data = BukuModel::where('id_book',$id_book)->first();
		$data->delete();

		return response('Berhasil Menghapus Data');
	}
}

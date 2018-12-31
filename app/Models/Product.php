<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome','descricao'];

    public function rules($id = '')
    {
    	return [
    		'nome' => "required|min:3|max:100|unique:products,nome,{$id},id",
    		'descricao' => 'required|min:3|max:1500'
    	];
    }

    public function rulesSearch()
    {
    	return [
    		'key-search' => 'required',
    	]; 
    }

    public function search($data,$totalPage)
    {
    	return $this->where('nome',$data['key-search'])->orWhere('descricao','LIKE',"%{$data['key-search']}%")->paginate($totalPage);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;


class BookController extends Controller
{
    public function __construct(){
		
		
		
	}
	
	public function index(){
		
		$books= Book::OrderBy('created_at', 'desc')->get();
				
		return view('books.index', compact('books'));
		
	}
	
	public function create(){
		
		return view('books.create');
		
	}
	
	public function edit($id){
		
		$books=Book::find($id);
		
		return view('books.edit', compact('books'));
		
	}
	
	public function update($id, Request $request){
		
		$this->validate($request,[
			'bk_isbn'=>'required|max:225',
			'bk_title'=>'required|max:225',
			'bk_author'=>'required|max:225',
			'bk_publisher'=>'required|max:225',
			'bk_count'=>'required|integer']);
			
		$person=['bk_isbn'=>$request->bk_isbn,	
		'bk_title'=>$request->bk_title,	
		'bk_author'=>$request->bk_author,	
		'bk_publisher'=>$request->bk_publisher,	
		'bk_count'=>$request->bk_count,	
		'bk_desc'=>$request->bk_desc];	
		
		Book::where('id',$id)->update($person);
		
		return redirect('books');
	}
	
	public function destroy($id){
		
		Book::where('id',$id)->delete();
		
		return redirect('books');
		
	}
	
	public function store(Request $request){
		
		$this->validate($request,[
			'bk_isbn'=>'required|max:225',
			'bk_title'=>'required|max:225',
			'bk_author'=>'required|max:225',
			'bk_publisher'=>'required|max:225',
			'bk_count'=>'required|integer']);
			
		$books= new Book;
		$books->bk_isbn=$request->bk_isbn;	
		$books->bk_title=$request->bk_title;	
		$books->bk_author=$request->bk_author;	
		$books->bk_publisher=$request->bk_publisher;	
		$books->bk_count=$request->bk_count;	
		$books->bk_desc=$request->bk_desc;	
		$books->save();
		
		return redirect('books');
		
	}
}

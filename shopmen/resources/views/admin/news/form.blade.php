@extends('layouts.admin.main')
@php
	$title = $News->id == null ? "Thêm bài viết" : "Sửa bài viết";
@endphp
@section('title', $title)
@section('page',$title)
@section('content')
<form enctype="multipart/form-data" action="{{ route('save.news') }}" method="post">
		@csrf
		<div class="container-fluid">
    		<div class="row">                    
    			<div class="col-lg-12">
    				<div class="card">
    					<div class="card-body">
    						<h4 class="card-title">Add news</h4>
    						<div class="basic-form">

    							<div class="form-group row">
                                    
                                    <div class="col-sm-6" style="margin-left: 0px;">
                                        <input type="hidden" name="id" value="{{$News->id}}">
                                        <div style="width: 100%;">
                                            <label class="col-form-label">Tiêu đề</label>
                                            <div class="col-form">
                                                <input class="form-control is-valid" id="name" name="title" type="text" value="{{$News->title}}">
                                                @if(count($errors)>0)
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div style="width: 100%;">
                                            <label class="col-form-label">image</label>
                                            <input type="hidden" name="anh" value="">
                                            <div class="col-form">
                                                
                                                <input type="file" name="images" id="asgnmnt_file" class="form-control" onchange="fileSelected(this)" >
                                                @if(count($errors)>0)
                                                    <span class="text-danger">{{$errors->first('images')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div style="width: 100%;">
                                            <label class="col-form-label">Tác giả</label>
                                            <div class="col-form">
                                                <input class="form-control is-valid" name="author" type="type" value="{{$News->author}}">
                                                
                                                @if(count($errors)>0)
                                                    <span class="text-danger">{{$errors->first('author')}}</span>
                                                @endif 
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div style="width: 100%;">
                                            <div class="col-form">
                                                <img id="asgnmnt_file_img" src="{{asset(isset($News->images)?$News->images:'img/default.jpg')}}" width="355px" height="185px" >
                                             </div>
                                        </div>
                                    </div>
    								
    							</div>

    							<div class="form-group row">
    								<label class="col-sm-2 col-form-label">Nôi dung</label>
    								<div class="col-sm-12">
    								
    								<textarea id="editor1" class="form-control" rows="15" cols="80" name="content">{!! $News->content !!}</textarea>
						              @if(count($errors)>0)
                                                    <span class="text-danger">{{$errors->first('content')}}</span>
                                       @endif
    								</div>
    								
                                    
    							</div>
                                
    							<div class="form-group row">
    								<label class="col-sm-2 col-form-label"></label>
    								<div class="col-sm-12">
    									<button type="submit" class="btn mb-1 btn-success" name="submit">Save<span class="btn-icon-right">
    										
    									</span>
    								</button><br><br>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>                
    	</div>
    </div>
</form>
@endsection

@section('js')
    <script type="text/javascript">
    function passFileUrl(){
    document.getElementById('asgnmnt_file').click();
    }

    function fileSelected(inputData){
    document.getElementById('asgnmnt_file_img').src = window.URL.createObjectURL(inputData.files[0])
    }
    </script>
@endsection




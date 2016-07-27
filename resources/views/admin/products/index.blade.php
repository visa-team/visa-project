@extends('admin.layouts.master')
@section('title')
	Sản phẩm
@endsection
@section('title.name')
	Quản lý sản phẩm
@endsection
@section('link')
	<li><a href="{{ route('admin.product') }}">
		<img src="{{ asset('images/icons/control/16/add.png') }}" />
		<span>Thêm mới</span>
	</a></li>
	
	<li><a href="">
		<img src="{{ asset('images/icons/control/16/list.png') }}" />
		<span>Danh sách</span>
	</a></li>
@endsection
@section('content')
	<div class="widget" id='main_product'>
		<!-- @if(Session::has('messages'))
			<div class="alert alert-{{ Session::get('type') }}">
				{{ Session::get('messages') }}
			</div>
		@endif -->
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách trang</h6>
			<div class="num f12">Tổng số: <b></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead class="filter"><tr><td colspan="8">
				<form class="list_filter form" action="" method="get">
					<table cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
								<td class="item" style="width:155px;" >
									<input name="name" value="" id="filter_iname" type="text" style="width:155px;" autocomplete="off" />
								</td>
								
								<td class="label" style="width:60px;"><label for="filter_status">Danh mục</label></td>
								<td class="item">
									<select name="category_id" _autocheck="true" id='param_cat' class="left">
										<option value="0">Lựa chọn danh mục</option>
										
									</select>
								</td>

								<td class="label" style="width:60px;"><label for="filter_status">Thương hiệu</label></td>
								<td class="item">
									<select name="brand_id" style="border-radius: 0">
										<option value="0">Lựa chọn thương hiệu</option>
									
									</select>
								</td>
								
								<td style='width:150px'>
									<input type="submit" class="button blueB" value="Lọc" />
									<input type="reset" class="basic" value="Reset">
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</thead>

			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ asset('images/icons/tableArrows.png') }}" /></td>
					<td colspan="2">Tiêu đề</td>
					<td>Tóm tắt</td>
					<td>cate_id</td>
					
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_products">
				<tr>
					<td colspan="9">
					    <div class="list_action itemActions">
							<a href="" id="submit" class="button blueB" url="">
								<span style='color:white;'>Xóa các checkbox đã chọn</span>
							</a>
						</div>
							
					    <div class='pagination'>
				            &nbsp;<strong>1</strong>&nbsp;
				            <a href="">2</a>&nbsp;
				            <a href="">Trang kế tiếp</a>&nbsp;
			            </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
					@foreach($news as $new)
					    <tr class=''>
					        <td><input type="checkbox" name="id[]" value="{{ $new->id }}" /></td>
							<td width="70"><img src="{{ asset('resources/upload/'.$new->image) }}"  width="70" height="80"></td>
							<td>{{ $new->title }}</td>  
							<td>{{ $new->summary }}</td>  
							<td>{{ $new->cate_id }}</td> 
							<td class="option">
								<form action="" method="POST" accept-charset="utf-8">
									{!! csrf_field() !!}
									{!! method_field('DELETE') !!}
									<a href="" title="Xem chi tiết sản phẩm" class="tipS button greenB">
										<img src="{{ asset('images/icons/color/view.png') }}" />
									</a>
									<a href="{{ route('admin.product.edit' ,$new->id) }}" title="Chỉnh sửa" class="tipS button blueB">
										<img src="{{ asset('images/icons/color/edit.png') }}" />
									</a>
									<!-- <button title="Xóa" class="tipS button redB" onclick="return confirm('Hãy cân nhắc trước khi xóa, bởi nó có thể làm thay đổi hệ thống của bạn.');"> -->
									<a href="{{ route('admin.product.delete' ,$new->id) }}" onclick="xacnhanxoa('Bạn có muỗn xóa không!')" title="Xóa" class="tipS button blueB">
										<img src="{{ asset('images/icons/color/delete.png') }}"/>
									</a>
									<!-- </button> -->
								</form>
							</td>
						</tr>
					@endforeach
			</tbody>
		</table>
	</div>
@endsection
@section('css')
	<style type="text/css">
		.taskWidget td {
			text-align: left;
		}
		.taskWidget td.option {
		    text-align: center;
		}
		.tipS {
			padding: 5px 10px;
		}
		.alert {
			padding: 10px;
			color: #FFF;
		}
		.alert-success {
			background: #3672a0;
		}
		.alert-error {
			background: #9f352b;
		}
		.sale {
			border-radius: 100%;
			background: #337ab7;
			color: #FFF;
			padding: 7px;
			font-size: 12px;
		}
		.unlink {
			text-decoration: line-through;
    		color: #E22B2B;
    		font-size: 11px;
		}
	</style>
@stop

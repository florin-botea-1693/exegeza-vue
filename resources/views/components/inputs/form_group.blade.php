
	<div class="flex flex-wrap {{$class??''}}">
		@if(isset($label))
		<label for="{{$input['id']??''}}" class="{{$label['class']??''}}">
			{{$label['value']}}
		</label>
		@endif
		<div class="relative flex flex-wrap items-center h-full w-full">
			
			<input class="form-control py-2 px-3" name="{{$input['name']??''}}" id="{{$input['id']??''}}" value="{{$input['value']??''}}" type="{{$input['type']??'text'}}" {{isset($required)?'required':''}}
			@if(isset($input['attrs']))
				@foreach($input['attrs'] as $attr=>$value)
					{{$attr}}="{{$value}}"
				@endforeach
			@endif
			>
			
			@if(isset($iErrors) && count($iErrors))
			<div class="hover:next-hidden-show absolute right-0 px-1 text-red-600 h-full table cursor-pointer">
				<i class="fas fa-exclamation-circle align-middle" style="display:table-cell"></i>
			</div>
			<div class="hidden w-full h-0">
				@foreach($iErrors as $err)
				<p class="w-full font-semibold text-red-600 leading-none absolute text-sm bg-white shadow p-1 left-0">
					{{$err}}
				</p>
				@endforeach
			</div>
			@endif
		</div>
	</div>

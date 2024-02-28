@extends('layouts.app')

@section('title', 'Бот')

@section('content')
<div class="flex flex-col items-center justify-center bg-gray-100 text-gray-800" style="min-height: 440px;">
    <div class="flex flex-col flex-grow w-full max-w-xl bg-white shadow-xl rounded-lg overflow-hidden">
		<div class="flex flex-col flex-grow h-0 p-4 overflow-auto">
			<div class="flex w-full mt-2 space-x-3 max-w-xs">
				<div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray"></div>
				<div>
					<div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
						<p class="text-sm text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<span class="text-xs text-gray leading-none">2 min ago</span>
				</div>
			</div>
			<div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
				<div>
					<div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
						<p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
					</div>
					<span class="text-xs text-gray leading-none">2 min ago</span>
				</div>
				<div class="flex-shrink-0 h-10 w-10 rounded-full bg-silver"></div>
			</div>
			<div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
				<div>
					<div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
						<p class="text-sm">Lorem ipsum dolor sit amet.</p>
					</div>
					<span class="text-xs text-gray leading-none">2 min ago</span>
				</div>
				<div class="flex-shrink-0 h-10 w-10 rounded-full bg-silver"></div>
			</div>
		</div>
		
		<div class="bg-gray-300 p-4">
			<input class="flex items-center h-10 text-gray w-full rounded px-3 text-sm" type="text" placeholder="Ваше сообщение…">
		</div>
	</div>
</div>
@endsection

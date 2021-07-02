<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ロール
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{ \Form::open(['route' => 'roles.store']) }}

                <div>
                    <label for="name">name</label>
                    {{ \Form::text('name', old('name')) }}
                </div>

                <div>
                    {{ \Form::submit() }}
                </div>

                {{ \Form::close() }}

            </div>
        </div>
    </div>
</x-app-layout>

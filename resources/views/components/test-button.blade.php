{{--component should be placed within resources/view/components folder only.--}}
@props([
    'class' => 'tw-w-40',
    'color' => 'white',
    'bg'    => 'primary'
])

<button {{ $attributes->merge(['class' => 'this class will be used']) }}>
    {{ $slot }}
</button>


{{--loop through users, dummy data in blade--}}
@php
    $users = [
        [
            'id' => 1,
            'name' => 'test'
        ],
            [
            'id' => 2,
            'name' => 'test 2'
        ]
    ];
@endphp

@for($i = 0; $i< count($users); $i++)
    <p class="class=1">{{$user['id']}} - {{ $user['name'] }}</p>
@endfor

@foreach($users as $user)
<p class="class=1">{{$user['id']}} - {{ $user['name'] }}  &nbsp;</p> <br/>
@endforeach


{{--list users with default text when no users are available--}}
@forelse($users as $user)
    main logic table
@empty
    this portion will be visible, when data is empty
@endforelse

@extends('layouts.app')

@section('content')
Welcome

<button id="show-modal" @click="sampleModal = true">Show Modal</button>

<modal v-if="sampleModal" @close="sampleModal = false" header='Confirmation'>
    <div>
        Are you sure?
    </div>

    <div class=" mt-2 flex flex-row justify-end">
        <span @close="sampleModal = false">
            <app-button :color="'secondary'">Close</app-button>
        </span>
    </div>
</modal>
@endsection
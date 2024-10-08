@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Create Events</h1>
@stop

@section('content')
    <div>
        <div class="row">
            <x-adminlte-input name="name" label="Name" placeholder="Event's name"
                              fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-textarea name="description" label="Description" placeholder="Event's description"
                                 fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-select name="status" label="Status" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option>Select</option>
                <option>Draft</option>
                <option>Published</option>
            </x-adminlte-select>
        </div>
        <div class="row"> 
            <x-adminlte-select2 name="type" label="Type" data-placeholder="Select" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option value=""></option>
                <option>Concert</option>
                <option>Soccer</option>
                <option>Theater</option>
                <option>Standup Comedy</option>
                <option>Festival</option>
                <option>Museum</option>
 
            </x-adminlte-select2>
 
        </div>
        <div class="row">
            @php
                $config = ['format' => 'YYYY-MM-DD'];
            @endphp
            <x-adminlte-input-date name="date" label="Date" :config="$config" placeholder="Choose a date" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-calendar"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Save" theme="primary" icon="fas fa-save"/>
            </div>
 
        </div>
    </div>
@endsection
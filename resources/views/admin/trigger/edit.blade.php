@extends('layouts.admin')
@section('title', '来店きっかけの編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ご来店きっかけカテゴリーの編集</h2>
                <form action="{{ action('Admin\TriggerController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="trigger">カテゴリー名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="trigger" value="{{ $trigger_form->trigger }}">
                        </div>
                    </div>
                   <div class="form-group row">
                        <label class="col-md-2" for="trigger">来店きっかけカテゴリー名</label>
                        @foreach($triggers as $trigger)
                    <label class="col-md-6 form-check-label" >
                        <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $trigger->id}}"  {{ in_array($trigger->id,$selected_triggers)? 'checked' : ''}}>
                        {{$trigger->trigger}}
                    </label> 
                    
                   @endforeach
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $$trigger_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
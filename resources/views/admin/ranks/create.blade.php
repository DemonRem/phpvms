<section class="content-header">
    <h1>Rank</h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">

        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'admin.ranks.store', 'class' => 'add_rank']) !!}

                    @include('admin.ranks.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

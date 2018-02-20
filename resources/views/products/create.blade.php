<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h1>Create new Product</h1>
            <hr>

            {!! Form::open(array('route'=>'products.store')) !!}


                {{Form::label('id_kat', 'Kategorija:', array('style' => 'margin-top:15px'))}}
                {{Form::select('id_kat', $category,array('class'=>'form-control')) }}
                <br>

                {{Form::label('ime','Ime:',array('style' => 'margin-top:15px'))}}
                {{Form::text('ime',null,array('class' =>'form-control'))}}

                {{Form::label('opis', 'Opis:', array('style' => 'margin-top:15px'))}}
                {{Form::textarea('opis', null,array('class' =>'form-control'))}}

                {{Form::label('kolicina', 'Kolicina', array('style' => 'margin-top:15px'))}}
                {{Form::text('kolicina', null,array('class' =>'form-control'))}}

                {{Form::label('slika', 'Slika:', array('style' => 'margin-top:15px'))}}
                {{Form::text('slika', null,array('class' =>'form-control'))}}

                {{Form::label('cena', 'Cena:', array('style' => 'margin-top:15px'))}}
                {{Form::text('cena', null,array('class' =>'form-control'))}}

                {{Form::label('rok', 'Rok:', array('style' => 'margin-top:15px'))}}
                {{Form::text('rok', null,array('class' =>'form-control'))}}

                {{Form::label('slug', 'Slug:', array('style' => 'margin-top:15px'))}}
                {{Form::text('slug', null,array('class' =>'form-control'))}}

                {{Form::submit('Add product',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px'))}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>
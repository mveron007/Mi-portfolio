<!DOCTYPE html>

<html>

<head>

	<title>Countries Lists</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css" />

</head>

<body>



<div class="container">

	<h2 class="text-center">Laravel 5.5 Countries Lists</h2>
 {{dd($countries)}}

 <!-- <select name="country">
    @foreach ($countries as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
    @endforeach
</select>

<select name=“state”>
    @foreach ($states as $state)
        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
</select> -->



	<!-- @if($countries->count())

		@foreach($countries as $country)

			<span style="padding: 5px;"> {!! $country->flag['flag-icon'] !!} {!! $country->name->common !!} </span>

		@endforeach

	@endif -->

</div>

<script>
    $(function() {
        $('select[name=country]').change(function() {

            var url = '{{ url('country') }}' + $(this).val() + '/states/';

            $.get(url, function(data) {
                var select = $('form select[name= state]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });
</script>
</body>

</html>

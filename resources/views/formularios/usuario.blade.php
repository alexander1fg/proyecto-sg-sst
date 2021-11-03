	@extends('adminlte::page')

	@section('title','USUARIO_SG_SST')

	@section('plugins.Sweetalert2',true)


	@section('css')
	<link rel="stylesheet" href="">
	@stop 

	@section('content_header')
	<h1>Usuarios</h1>
	@stop

	@section('content')
	<body>
		<section id="contenido">
			<form>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Nombre de usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Cédula</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Celular</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Dirección</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Rol en el sistema</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email">
					</div>
				</div>
				<div class="row">
					<div class="col align-self-end">
						<button class="btn btn-success col align-self-end">Guardar</button>
					</div>
				</div>
				<hr>
			</form>


			<tbody>

			</tbody>

		</section>
	</body>

	<table id="tabla" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Nombre de usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Cédula</th>
				<th>Teléfono</th>
				<th>Celular</th>
				<th>Dirección</th>
				<th>Contraseña</th>
				<th>Rol en el sistema</th>
			</tr>
		</thead>
	</table>
	@stop

	@section('js')
	<script>
		$(document).ready(function () {
			$('#tabla').DataTable();
		});
		$(document).on('click', '.eliminar', function (e) {
			Swal.fire({
				title: 'Estas seguro de eliminar?',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Si!'
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Eliminado!',
						'Archivo eliminado correctamente.',
						'success'
					)
				}
			})
		});

		Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
	</script>
	@stop





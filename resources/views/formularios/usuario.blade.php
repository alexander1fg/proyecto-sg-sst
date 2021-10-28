<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>

	<!-- javascript bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!-- javascript de datatables -->
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

	<!-- hoja de estilos propia -->
	<link rel="stylesheet" href="css/style.css">
	<!-- hoja de estilos bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- hoja de estilos datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<!-- hoja de estilos bootstrap icons -->
	<link rel="stylesheet" href="font/bootstrap-icons.css">

	<!-- Sweealert  -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<section id="contenido">
		<form>
			<h3>Usuarios</h3> 
			<div class="form-group row">
				<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

				<div class="col-md-6">
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
						name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
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
					<th>Rol en el sistema.</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</section>
</body>



</html>
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
</script>
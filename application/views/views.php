<!doctype html>
<html lang="en">

<head>
	<title>Simple Get Affected API</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container p-5">
		<h4>Simple Get API</h4>
		<table id="myTable" class="table table-striped table-inverse table-responsive mt-2">
			<thead class="thead-inverse">
				<tr>
					<th>No</th>
					<th>assetName</th>
					<th>kodeBar</th>
					<th>assetCatName</th>
					<th>propZAssetCatprop</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result['data'] as $i => $d) :
					$list =  $d['propAssetCat']['propZAssetCatprop'];
				?>
					<tr>
						<td scope="row"><?= ++$i; ?></td>
						<td><?= $d['assetName'] ?></td>
						<td><?= $d['kodeBar'] ?></td>
						<td><?= $d['propAssetCat']['assetCatName'] ?></td>
						<td>
							<ul>
								<?php foreach ($list as $l) : ?>
									<li><?= $l['propName'] ?></li>
								<?php endforeach; ?>
							</ul>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>
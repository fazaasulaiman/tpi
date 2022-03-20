<!DOCTYPE html>
<html lang="en">

<head>
	<script nonce="816b659e-d4f0-4415-88d7-c03d51a5b43c">
		(function(w, d) {
			! function(a, e, t, r) {
				a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
					deferred: []
				}, a.zaraz.track = (e, t) => {
					for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
				}, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
					a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
				}, a.addEventListener("DOMContentLoaded", (() => {
					var t = e.getElementsByTagName(r)[0],
						z = e.createElement(r),
						n = e.getElementsByTagName("title")[0];
					n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
				}))
			}(w, d, 0, "script");
		})(window, document);
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Lockscreen</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="/lte/assets/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition lockscreen">

	<div class="lockscreen-wrapper">
		<div class="lockscreen-logo">
			<a href="/lte/index2.html"><b>TPI</b> NGR</a>
		</div>

		<div class="lockscreen-name">Admin</div>

		<div class="lockscreen-item">

			<div class="lockscreen-image">
				<img src="/lte/assets/img/user1-128x128.jpg" alt="User Image">
			</div>

			<form class="lockscreen-credentials">
				<div class="input-group">
					<input type="password" class="form-control" id="password" placeholder="password">
					<div class="input-group-append">
						<button type="submit" id="validate" class="btn">
							<i class="fas fa-arrow-right text-muted"></i>
						</button>
					</div>
				</div>
			</form>

		</div>

		<div class="help-block text-center">
			Ketik password untuk Log in.
		</div>
		<div class="text-center">
			<!-- <a href="login.html">Or sign in as a different user</a> -->
		</div>
		<div class="lockscreen-footer text-center">
			Copyright &copy; 2022<b><a href="https://adminlte.io" class="text-black"> TPI NGR</a></b><br>
			All rights reserved
		</div>
	</div>
	<script src="/lte/plugins/jquery/jquery.min.js"></script>
	<!-- swall alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
	<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
		$(function() {
			$("#validate").click(function(e) {
				Nloading();
				submit();
				e.preventDefault();
			});
		});

		function submit() {
			$.ajax({
				context: this,
				url: "/home/login",
				type: "POST",
				data: {
					password: $("#password").val()
				},
				dataType: "JSON",
				success: function(data) {
					if (data.status) {
						Nberhasil('Berhasil Login');
						location.href = "lapharian";
					} else {
						
						Nwarning(data.ket);
						$("#validate").removeClass('disabled');
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					Nerror(errorThrown)
					$("#validate").removeClass('disabled');

				}
			});
		}

		function Nberhasil(text) {
			Swal.fire({
				icon: 'success',
				title: text,
				showConfirmButton: false,
				timer: 1500
			})
		}

		function Nloading() {
			Swal.fire({
				title: "Loading...",
				text: "",
				imageUrl: "<?php echo base_url(); ?>/lte/assets/img/loading.gif",
				showConfirmButton: false,
				allowOutsideClick: false
			});
		}

		function Nwarning(text) {
			Swal.fire({
				icon: 'warning',
				title: 'Oops...',
				text: text
			})
		}

		function Nerror(text) {
			Swal.fire({
				icon: 'error',
				title: 'Error !!!',
				text: text
			})
		}
	</script>
</body>

</html>
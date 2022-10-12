<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send Email Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="ContactFrom_v1/images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="{{ route('send') }}" method="post" enctype="multipart/form-data">
                @csrf
				<span class="contact1-form-title">
					Liên lạc với chúng tôi
				</span>

				<div class="wrap-input1 validate-input" >
					<input
                        class="input1 @error('name') is-invalid @enderror"
                        type="text" name="name" placeholder="Tên" value="{{ old('name') }}"
                    >
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" @error('email') is-invalid @enderror
                        type="text" name="email" placeholder="Đại chỉ Email" value="{{ old('email') }}"
                    >
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" @error('subject') is-invalid @enderror
                        type="text" name="subject" placeholder="Tiêu đề" value="{{ old('subject') }}"
                    >
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<textarea class="input1" @error('content') is-invalid @enderror
                        type="text" name="content" placeholder="Nội dung" >{{ old('content') }}</textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" value="submit" type="submit" name="submit">
						<span>
							Xác nhận gửi Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="ContactFrom_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

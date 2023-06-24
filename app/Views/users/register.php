<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Register</h2>
    <form action="<?php echo base_url('/register/storeRegister'); ?>" enctype="multipart/form-data"  method="post">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
          Name
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name"
          name="name"
          type="text"
          placeholder="Full Name"
        > <?php if(isset($validation)):?>
			<span class="text-sm text-red-600">
			<?= $validation->showError('name') ?>
		</span>
		<?php endif;?>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
          Email
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="email"
          name="email"
          type="email"
          placeholder="Email address"
        >
		<?php if(isset($validation)):?>
			<span class="text-sm text-red-600">
			<?= $validation->showError('email') ?>
		</span>
		<?php endif;?>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="photo">
          Photo
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="file"
          type="file"
          name="photo"
          placeholder="Photo"
        >
		<?php if(isset($validation)):?>
			<span class="text-sm text-red-600">
			<?= $validation->showError('photo') ?>
		</span>
		<?php endif;?>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="password">
          Password
        </label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="password"
          type="password"
          name="password"
          placeholder="Password"
        >
		<?php if(isset($validation)):?>
			<span class="text-sm text-red-600">
			<?= $validation->showError('password') ?>
		</span>
		<?php endif;?>
      </div>
      <div class="flex items-center justify-between">
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit"
        >
          Create Account
        </button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
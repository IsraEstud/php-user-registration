<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro Básico</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-200 flex items-center justify-center">

  <div class="w-full max-w-md bg-white p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">
      Formulario de Registro
    </h2>

    <form action="procesar.php" method="POST" class="space-y-4">

      <div>
        <label class="block text-sm font-medium text-gray-600">Nombre</label>
        <input
          type="text"
          name="name"
          required
          class="w-full mt-1 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Email</label>
        <input
          type="email"
          name="email"
          required
          class="w-full mt-1 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Contraseña</label>
        <input
          type="password"
          name="password"
          required
          class="w-full mt-1 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">
          Confirmar contraseña
        </label>
        <input
          type="password"
          name="password_confirm"
          required
          class="w-full mt-1 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition"
      >
        Registrarse
      </button>

    </form>
  </div>

</body>
</html>


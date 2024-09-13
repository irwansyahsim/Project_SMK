<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Stok Menu</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Restoran Admin</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="user">User</a></li>
                <li><a href="addstock">Tambah Stok</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h2>Tambah Stok Menu</h2>
            </header>

            <!-- Form Tambah Menu -->
            <div class="form-container">
                <!-- Notifikasi Sukses -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Menu:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama menu" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori:</label>
                        <select id="category" name="category" class="form-control" required>
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="dessert">Dessert</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga (Rp):</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Masukkan harga menu" required>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Jumlah Stok:</label>
                        <input type="number" id="stock" name="stock" class="form-control" placeholder="Masukkan jumlah stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto Menu:</label>
                        <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Tambah Menu</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

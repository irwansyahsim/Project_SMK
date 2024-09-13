<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Restoran - Stok Menu</title>

    <!-- Link ke file CSS yang kamu gunakan sebelumnya -->
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
                <li><a href="dasboard">Dashboard</a></li>
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
                <h2>Stok Menu</h2>
            </header>

            <!-- Menu Stock Table -->
            <div class="menu-stock-table">
                <h3>Daftar Stok Menu</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Menu</th>
                            <th>Jumlah Stok</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data dummy -->
                        <tr>
                            <td>1</td>
                            <td>Nasi Goreng</td>
                            <td>50</td>
                            <td>Porsi</td>
                            <td>Rp 20.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ayam Bakar</td>
                            <td>30</td>
                            <td>Porsi</td>
                            <td>Rp 25.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Es Teh</td>
                            <td>100</td>
                            <td>Gelas</td>
                            <td>Rp 5.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

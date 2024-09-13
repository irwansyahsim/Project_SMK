<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Restoran - User Management</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Restoran Admin</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="admin">Dashboard</a></li>
                <li><a href="user">User</a></li>
                <li><a href="admin/addstock">addstock</a></li>
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
                <h2>Dashboard</h2>
                <div class="user-profile">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhWVZSBUK_Vj6sGgFSHtelnNMFC52O29bK7Q&s" alt="Profile Picture">
                    <span>Admin</span>
                </div>
            </header>

            <!-- User Table -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>
                                @if ($post->email_verified)
                                    Admin
                                @else
                                    User
                                @endif
                            </td>
                            <td>
                                <a href="{{ url("/user/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                                
                                <!-- Delete Button -->
                                <form method="POST" action="{{ url("/user/{$post->id}") }}" style="display:inline-block; margin-left: 5px;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

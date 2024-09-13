<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now - Catering</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .order-container {
            max-width: 600px;
            margin: 2rem auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .order-container h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.75rem;
            color: #333;
        }

        .order-container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .order-container label {
            font-weight: 600;
            color: #333;
        }

        .order-container input,
        .order-container select,
        .order-container textarea {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        .order-container textarea {
            resize: vertical;
            height: 100px;
        }

        .order-container button {
            padding: 0.75rem;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .order-container button:hover {
            background-color: #89CFF0;
        }
    </style>
</head>
<body>

<header>
    <h1>Catering</h1>
</header>

<div class="order-container">
    <h2>Place Your Order</h2>
    <form id="orderForm" action="{{ url('/kirim') }}" method="POST">
        
        @csrf

        <label for="no_kursi">No Kursi:</label>
        <input type="text" id="no_kursi" name="no_kursi" required>

        <label for="catatan">Catatan:</label>
        <textarea id="catatan" name="catatan" required></textarea>

        <label for="size">Select size:</label>
        <select id="size" name="info" required>
            <option value="Kecil | Rp50.000">Kecil | Rp50.000</option>
            <option value="Sedang | Rp75.000">Sedang | Rp75.000</option>
            <option value="Besar | Rp99.999">Besar | Rp99.999</option>
        </select>

        <button type="submit">Submit Order</button>
    </form>
</div>

<script>
    document.getElementById('orderForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah submit form agar JavaScript bisa menjalankan alert

        // Generate nomor antrian random
        const noAntrian = Math.floor(Math.random() * 1000) + 1; 

        // Tampilkan alert dengan nomor antrian
        alert('Terima kasih! Pesanan Anda telah diterima. Nomor antrian Anda adalah: ' + noAntrian);

        // Setelah menampilkan alert, lanjutkan submit form
        this.submit();
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav>
      <h1>Library Management System</h1>
      <ul>
        <li><a href="./trial.html">Home</a></li>
        <li><a href="./addBook.html">Add Book</a></li>
        <li><a href="#">Search</a></li>
      </ul>
    </nav>

    <!-- Daftar Buku -->
    <div class="book-list">
      <h2>Daftar Buku</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Genre</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contoh data buku -->
          <tr>
            <td>1</td>
            <td>To Kill a Mockingbird</td>
            <td>Harper Lee</td>
            <td>1960</td>
            <td>Fiction</td>
            <td>
              <button>Edit</button>
              <button>Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>1984</td>
            <td>George Orwell</td>
            <td>1949</td>
            <td>Dystopian</td>
            <td>
              <button>Edit</button>
              <button>Delete</button>
            </td>
          </tr>
          <!-- Tambahkan lebih banyak data buku di sini -->
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 Library Management System</p>
    </footer>
  </body>
</html>

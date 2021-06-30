<html>
   <head>
      <title>Menampilkan Data Tabel MySQL Dengan mysqli_fetch_array</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <h3>CRUD dengan PHP MySQL</h3>
      <form method="post" action="add.php">
    <input type="varchar" name="no_transaksi" placeholder="No transaksi">
    <input type="varchar" name="tanggal_transaksi" placeholder="Tanggal transaksi">
    <input type="varchar" name="jenis_transaksi" placeholder="jenis transaksi">
    <input type="varchar" name="nama_member" placeholder="Nama member">
    <input type="varchar" name="no_room" placeholder="no room">
    <input type="submit" name="submit" value="Tambah Data">
         </form><br/>
      <h3>Tabel member (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>
               <th>Nama member</th> 
               <th>jenis transaksi</th>          
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM member';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['nama_member'] ?></td>
               <td><?php echo $row['jenis_transaksi'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel room (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>No room</th>
               <th>No transaksi</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM room';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      <h3>Tabel tamu (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>Nama tamu</th>
               <th>No room</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM tamu';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      <h3>Tabel transaksi (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>No transaksi</th>
               <th>Tanggal transaksi</th>
               <th>Jenis transaksi</th>
               <th>nama member</th>
               <th>no room</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><a href="update.php?no_transaksi=<?php echo $row['no_transaksi'] ?>">Update</a></td>
               <td><a href="delete.php?no_transaksi=<?php echo $row['no_transaksi'] ?>"
               onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      <h3>Inner Join (mysqli_fetch_assoc)</h3>
      <h4> (menampilkan semua data member dari tabel member yang melakukan transaksi)</h4>
      <table>
         <thead>
            <tr>
               <th>Nama member</th>
               <th>jenis transaksi</th>
               <th>no transaksi</th>
               <th>tanggal transaksi</th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM member 
            INNER JOIN transaksi
            ON member.nama_member = transaksi.jenis_transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_assoc($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['nama_member'] ?></td>
               <td><?php echo $row['jenis_transaksi'] ?></td>
               <td><?php echo $row['no_transaksi'] ?></td>
               <td><?php echo $row['tanggal_transaksi'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      </table>
      <h3>Left Outer Join </h3>
      <h4> (menampilkan semua data member dari tabel member yang melakukan transaksi)</h4>
      <table>
         <thead>
            <tr>
               <th>Nama member</th>
               <th>jenis transaksi</th>
               <th>no transaksi</th>
               <th>tanggal transaksi</th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM member 
            LEFT JOIN transaksi
            ON member.nama_member = transaksi.jenis_transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_assoc($query))
            {
            	?>
         <tbody>
            <tr>
              <td><?php echo $row['nama_member'] ?></td>
               <td><?php echo $row['jenis_transaksi'] ?></td>
               <td><?php echo $row['no_transaksi'] ?></td>
               <td><?php echo $row['tanggal_transaksi'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>